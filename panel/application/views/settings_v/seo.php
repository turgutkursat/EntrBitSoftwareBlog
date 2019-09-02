<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>SEO Ayarları | EntrBit Software</title>
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
                    <h5 class="page-title hidden-menubar-top hidden-float">Ayarlar</h5>
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
        <section class="app-content">
            <div class="row">
                <form action="<?= base_url($this->url . "/seo") ?>" method="post">
                    <div class="col-md-12">
                        <?php if (validation_errors()): ?>
                            <div class="alert alert-danger"><?= validation_errors() ?></div>
                        <?php endif; ?>
                        <div class="widget">
                            <header class="widget-header">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h4 class="widget-title">SEO</h4>
                                    </div>
                                    <div class="col-md-4 pull-right">
                                        <small class="widget-title">Son Güncelleme
                                            Tarihi: <?= isset($settings->date) ? $settings->date : "Yok" ?></small>
                                    </div>
                                </div>

                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title"
                                           value="<?= isset($settings->title) ? $settings->title : form_error("title") ?>">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"
                                              name="description"><?= isset($settings->description) ? $settings->description : form_error("description") ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <textarea class="form-control"
                                              name="keywords"><?= isset($settings->keywords) ? $settings->keywords : form_error("keywords") ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input class="form-control"
                                           name="author"
                                           value="<?= isset($settings->author) ? $settings->author : form_error("author") ?>">
                                </div>
                                <div class="form-group">
                                    <label>Arama motorları web sitesini kaç günde bir tarasın</label>
                                    <input type="number" name="revisitAfter" min="1" max="7" class="form-control"
                                           value="<?= isset($settings->revisitAfter) ? $settings->revisitAfter : "1" ?>">
                                </div>

                                <div class="form-group">
                                    <label>Site Karakter Tipi</label>
                                    <select class="form-control" name="contentType">
                                        <option value="UTF-8" <?= $settings->contentType == "UTF-8" ? "selected" : null ?>>
                                            UTF-8
                                        </option>
                                        <option value="UTF-16" <?= $settings->contentType == "UTF-16" ? "selected" : null ?>>
                                            UTF-16
                                        </option>
                                        <option value="ISO-8859-1" <?= $settings->contentType == "ISO-8859-1" ? "selected" : null ?>>
                                            ISO-8859-1
                                        </option>
                                        <option value="WINDOWS-1252" <?= $settings->contentType == "WINDOWS-1252" ? "selected" : null ?>>
                                            WINDOWS-1252
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Google gibi arama motorlarına izin ver?</label>
                                    <select class="form-control" name="robots">
                                        <option value="index" <?= $settings->robots == "index" ? "selected" : null ?>>
                                            Evet
                                        </option>
                                        <option value="noindex" <?= $settings->robots == "noindex" ? "selected" : null ?>>
                                            Hayır
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Arama motorları tüm linkleri taramasına izin ver?</label>
                                    <select class="form-control" name="robotsFollow">
                                        <option value="follow" <?= $settings->robotsFollow == "follow" ? "selected" : null ?>>
                                            Evet
                                        </option>
                                        <option value="null" <?= $settings->robotsFollow == "null" ? "selected" : null ?>>
                                            Hayır
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Site Ana Dili</label>
                                    <select class="form-control" name="language">
                                        <option value="English" <?= $settings->language == "English" ? "selected" : null ?>>
                                            İngilizce
                                        </option>
                                        <option value="Turkish" <?= $settings->language == "Turkish" ? "selected" : null ?>>
                                            Türkçe
                                        </option>

                                    </select>
                                </div>


                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->

                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <button type="submit" class="btn btn-outline btn-success" name="submit" value="1"><i
                                        class="fa fa-save m-r-xs"></i>Kaydet
                            </button>
                            <button type="reset" class="btn btn-outline btn-danger" disabled><i
                                        class="fa fa-refresh m-r-xs"></i>Sıfırla
                            </button>
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </form>
            </div><!-- .row -->
        </section><!-- #dash-content -->
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