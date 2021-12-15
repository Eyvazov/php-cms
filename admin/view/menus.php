<?php require admin_view('static/header')?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="d-inline mr-3">Menyular</h1>
                        <a href="<?= admin_url('add-menu')?>" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp Əlavə Et</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= admin_url(); ?>">Əsas Səhifə</a></li>
                            <li class="breadcrumb-item active">Menyular</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th>Menyu Başlığı</th>
                                        <th>Əlavə Edilmə Tarixi</th>
                                        <th>Əməliyyatlar</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>
                                            <a href="#" class="btn btn-primary mr-3"><i class="fa fa-edit"></i> Redaktə</a>
                                            <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Sil</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php require admin_view('static/footer')?>