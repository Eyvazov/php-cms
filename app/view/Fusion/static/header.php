<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (isset($meta['description'])): ?>
        <meta name="description" content="<?= $meta['description']; ?>">
    <?php endif; ?>
    <?php if (isset($meta['keywords'])): ?>
        <meta name="keywords" content="<?= $meta['keywords']; ?>">
    <?php endif; ?>

    <!-- Title -->
    <title><?= $meta['title']; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="https://via.placeholder.com/80x80">
    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap">

    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="<?= public_url('css/font-awesome.min.css'); ?>">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="<?= public_url('css/bootstrap.min.css'); ?>">

    <!-- Slick Css -->
    <link rel="stylesheet" href="<?= public_url('css/slick.min.css'); ?>">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?= public_url('css/main.css'); ?>">

    <!--[if lt IE 9]>
    <script src="<?= public_url('js/html5shiv.min.js'); ?>"></script>
    <script src="<?= public_url('js/respond.min.js'); ?>"></script>
    <![endif]-->

</head>
<body>

<!-- ========== Start Loading ========== -->

<div class="loading">
    <div class="loading-content">
        <div class="inner-item"></div>
        <div class="inner-item"></div>
        <div class="inner-item"></div>
        <div class="inner-item"></div>
        <div class="inner-item"></div>
    </div>
</div>

<!-- ========== End Loading ========== -->

<!-- ========== Start Header ========== -->

<header>
    <div class="site-brand text-center">
        <div class="container">
            <a href="<?= site_url() ?>">
                <h2><?= setting('logo_title') ?></h2>
            </a>
        </div>
    </div>
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <?php require view('static/menu') ?>
                <div class="col-md-4 col-sm-4 col-xs-9 text-md-center">
                    <div class="search-toggle">
                        <i class="fa fa-search"></i>
                    </div>
                    <ul class="social-icons-menu list-unstyled">
                        <?php if ($fb = setting('facebook')): ?>
                            <li><a href="https://facebook.com/<?= $fb; ?>" target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if ($tw = setting('twitter')): ?>
                            <li><a href="https://twitter.com/<?= $tw; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ($ins = setting('instagram')): ?>
                            <li><a href="https://instagram.com/<?= $ins; ?>" target="_blank"><i
                                            class="fa fa-instagram"></i></a></li>
                        <?php endif; ?>
                        <?php if ($in = setting('linkedin')): ?>
                            <li><a href="https://linkedin.com/in/<?= $in; ?>" target="_blank"><i
                                            class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                        <?php if ($gh = setting('github')): ?>
                            <li><a href="https://github.com/<?= $gh; ?>" target="_blank"><i
                                            class="fa fa-github"></i></a></li>
                        <?php endif; ?>
                        <?php if ($yt = setting('youtube')): ?>
                            <li><a href="https://youtube.com/<?= $yt ?>" target="_blank"><i
                                            class="fa fa-youtube"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="search-area">
				<span class="close-search">
                    <i class="fa fa-close"></i>
				</span>
        <div class="display-table">
            <div class="display-table-cell">
                <form role="search" method="get" class="search-form" action="#">
                    <input type="search" class="search-field" placeholder="<?= setting('search_placeholder') ?>"
                           name="s" required="required"/>
                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</header>

<!-- ========== End Header ========== -->