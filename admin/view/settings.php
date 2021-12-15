<?php require admin_view('static/header'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Parametrlər</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= admin_url(); ?>">Əsas Səhifə</a></li>
                            <li class="breadcrumb-item active">Parametrlər</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form action="" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h4>Sayt Parametrləri</h4>
                                        <label for="title">Sayt Başlığı</label>
                                        <input type="text" class="form-control" name="settings[title]"
                                               value="<?= setting('title') ?>" id="title"
                                               placeholder="Sayt üçün Başlıq Daxil Edin...">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Sayt Açıqlaması</label>
                                        <input type="text" class="form-control" name="settings[description]"
                                               value="<?= setting('description') ?>" id="description"
                                               placeholder="Sayt üçün Açıqlama Daxil Edin...">
                                    </div>
                                    <div class="form-group">
                                        <label for="keywords">Sayt Açar Sözləri</label>
                                        <input type="text" class="form-control" name="settings[keywords]"
                                               value="<?= setting('keywords') ?>" id="keywords"
                                               placeholder="Sayt üçün Açar Sözlər Daxil Edin...">
                                    </div>
                                    <h4>Şablon Parametrləri</h4>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="logo_title">Logo Başlığı</label>
                                            <input type="text" class="form-control" name="settings[logo_title]"
                                                   value="<?= setting('logo_title') ?>" id="logo_title"
                                                   placeholder="Logo üçün Başlıq Daxil Edin...">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="search_placeholder">Axtarış Sahəsi Yer Tutucusu</label>
                                            <input type="text" class="form-control" name="settings[search_placeholder]"
                                                   value="<?= setting('search_placeholder') ?>" id="search_placeholder"
                                                   placeholder="Axtarış Sahəsi üçün Yer Tutucu Mətn Daxil Edin...">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="theme">Sayt Şablonu</label>
                                            <select name="settings[theme]" id="theme" class="form-control">
                                                <option value="">Şablon Seç</option>
                                                <?php foreach ($themes as $theme): ?>
                                                    <option value="<?= $theme ?>" <?= setting('theme') == $theme ? 'selected' : null; ?>><?= $theme ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" class="form-control" name="settings[facebook]"
                                                   value="<?= setting('facebook') ?>" id="facebook"
                                                   placeholder="Facebook Hesabının Linkini Daxil Edin...">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" class="form-control" name="settings[twitter]"
                                                   value="<?= setting('twitter') ?>" id="twitter"
                                                   placeholder="Twitter Hesabının Linkini Daxil Edin...">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" class="form-control" name="settings[instagram]"
                                                   value="<?= setting('instagram') ?>" id="instagram"
                                                   placeholder="Instagram Hesabının Linkini Daxil Edin...">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="linkedin">LinkedIn</label>
                                            <input type="text" class="form-control" name="settings[linkedin]"
                                                   value="<?= setting('linkedin') ?>" id="linkedin"
                                                   placeholder="LinkedIn Hesabının Linkini Daxil Edin...">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="github">GitHub</label>
                                            <input type="text" class="form-control" name="settings[github]"
                                                   value="<?= setting('github') ?>" id="github"
                                                   placeholder="GitHub Hesabının Linkini Daxil Edin...">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="youtube">YouTube</label>
                                            <input type="text" class="form-control" name="settings[youtube]"
                                                   value="<?= setting('youtube') ?>" id="youtube"
                                                   placeholder="YouTube Hesabının Linkini Daxil Edin...">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Copyright Mətni</label>
                                            <textarea  id="summernote" name="settings[copyright_text]" ><?= setting('copyright_text') ?></textarea>
                                        </div>
                                    </div>
                                    <h4>Texniki Qulluq Parametrləri</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="maintenance_title">Başlıq</label>
                                                <input type="text" class="form-control"
                                                       name="settings[maintenance_title]"
                                                       value="<?= setting('maintenance_title') ?>"
                                                       id="maintenance_title"
                                                       placeholder="Texniki Qulluq Başlığı Daxil Edin...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="maintenance_description">Açıqlama</label>
                                                <textarea class="form-control" name="settings[maintenance_description]"
                                                          id="maintenance_description"
                                                          placeholder="Texniki Qulluq Açıqlaması Daxil Edin..."><?= setting('maintenance_description') ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="maintenance">Texniki Qulluq</label>
                                                <select name="settings[maintenance]" id="maintenance"
                                                        class="form-control">
                                                    <option value="1" <?= setting('maintenance') == 1 ? 'selected' : null; ?>>
                                                        Açıq
                                                    </option>
                                                    <option value="2" <?= setting('maintenance') == 2 ? 'selected' : null; ?>>
                                                        Bağlı
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <input type="hidden" name="submit" value="1">
                                    <button type="submit" class="btn btn-primary">Yadda Saxla</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php require admin_view('static/footer'); ?>