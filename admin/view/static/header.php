<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= admin_public_url('plugins/fontawesome-free/css/all.min.css')?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= admin_public_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= admin_public_url('dist/css/adminlte.min.css')?>">
    <?php if (route(1) == 'settings'):?>
        <!-- summernote -->
        <link rel="stylesheet" href="<?= admin_public_url('plugins/summernote/summernote-bs4.min.css')?>">
    <?php endif;?>
    <?php if (route(1) == 'add-menu'):?>
        <style type="text/css">
            .container {
                margin: 150px auto;
            }

            body {
                background-color: #fafafa;
            }

            ol.example li.placeholder:before {
                position: absolute;
            }

            .list-group-item > div {
                margin-bottom: 5px;
            }
        </style>
        <link rel="stylesheet" href="<?= admin_public_url('dist/menu/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css'); ?>">
    <?php endif;?>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="<?= admin_public_url('dist/img/AdminLTELogo.png')?>" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php require admin_view('static/navbar')?>
    <!-- /.navbar -->