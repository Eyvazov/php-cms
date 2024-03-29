<?php require admin_view('static/header'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline mr-3">Yeni Menyu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= admin_url(); ?>">Əsas Səhifə</a></li>
                            <li class="breadcrumb-item"><a href="<?= admin_url('menus'); ?>">Menyular</a></li>
                            <li class="breadcrumb-item active">Yeni Menyu</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-header"><h5 class="float-left">Menu</h5>
                                <div class="float-right">
                                    <button id="btnReload" type="button" class="btn btn-outline-secondary">
                                        <i class="fa fa-play"></i> Load Data
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul id="myEditor" class="sortableLists list-group">
                                </ul>
                            </div>
                        </div>
                        <p>Click the Output button to execute the function <code>getString();</code></p>
                        <div class="card">
                            <div class="card-header">JSON Output
                                <div class="float-right">
                                    <button id="btnOutput" type="submit" class="btn btn-success"><i class="fas fa-check-square"></i>
                                        Output
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group"><textarea id="out" class="form-control" cols="50" rows="10"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-primary mb-3">
                            <div class="card-header bg-primary text-white">Edit item</div>
                            <div class="card-body">
                                <form id="frmEdit" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="text">Text</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control item-menu" name="text" id="text"
                                                   placeholder="Text">
                                            <div class="input-group-append">
                                                <button type="button" id="myEditor_icon" class="btn btn-outline-secondary"></button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="icon" class="item-menu">
                                    </div>
                                    <div class="form-group">
                                        <label for="href">URL</label>
                                        <input type="text" class="form-control item-menu" id="href" name="href" placeholder="URL">
                                    </div>
                                    <div class="form-group">
                                        <label for="target">Target</label>
                                        <select name="target" id="target" class="form-control item-menu">
                                            <option value="_self">Self</option>
                                            <option value="_blank">Blank</option>
                                            <option value="_top">Top</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tooltip</label>
                                        <input type="text" name="title" class="form-control item-menu" id="title"
                                               placeholder="Tooltip">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i
                                            class="fas fa-sync-alt"></i> Update
                                </button>
                                <button type="button" id="btnAdd" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php require admin_view('static/footer'); ?>