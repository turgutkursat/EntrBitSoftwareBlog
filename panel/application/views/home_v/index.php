<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Anasayfa | EntrBit Software</title>
    <?php $this->load->view("include/style") ?>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">

    <!-- navbar header -->
    <div class="navbar-header">


        <a href="<?= base_url() ?>" class="navbar-brand">
            <span class="brand-icon"><i class="fa fa-code"></i></span>
            <span class="brand-name" style="font-size: 18px;">EntrBit Software</span>
        </a>
    </div><!-- .navbar-header -->

    <div class="navbar-container container-fluid">
        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
                <li class="hidden-float hidden-menubar-top">
                    <a href="javascript:void(0)" role="button" id="menubar-fold-btn"
                       class="hamburger hamburger--arrowalt is-active js-hamburger">
                        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                    </a>
                </li>
                <li>
                    <h5 class="page-title hidden-menubar-top hidden-float">Anasayfa</h5>
                </li>
            </ul>

        </div>
    </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<?php $this->load->view("include/menubar") ?>

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
    <div class="wrap">
        <!-- //TODO BURAYA ICERIKGELCEK-->

        <!-- //TODO BURAYA ICERIKGELCEK-->
    </div><!-- .wrap -->
    <!-- APP FOOTER -->
    <div class="wrap p-t-0">
        <footer class="app-footer">
            <div class="clearfix">
                <div class="copyright pull-left">Copyright EntrBit Software <?= date("Y") ?> &copy;</div>
            </div>
        </footer>
    </div>
    <!-- /#app-footer -->
</main>
<!--========== END app main -->

<?php $this->load->view("include/appCustomizer") ?>

<!-- build:js <?= base_url("assets") ?>/assets/js/core.min.js -->
<?php $this->load->view("include/script") ?>
</body>
</html>