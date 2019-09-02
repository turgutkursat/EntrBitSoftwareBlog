<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Genel Ayarlar | EntrBit Software</title>
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
                <?= form_open_multipart($this->url . "/genel") ?>
                <div class="col-md-12">
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger"><?= validation_errors() ?></div>
                    <?php endif; ?>
                    <div class="widget">
                        <header class="widget-header">
                            <div class="row">
                                <div class="col-md-2">
                                    <h4 class="widget-title">Genel</h4>
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
                                <label>Logo</label>
                                <input type="file" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>E-Mail 2</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" id="phone" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>Phone 2</label>
                                <input type="text" id="phone" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>About Us</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>Copyright</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <hr>
                            <h3>Social Media</h3>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" id="facebook" class="form-control" name="title"
                                       value="https:/www.facebook.com/">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" name="title" id="twitter"
                                       value="https://www.twitter.com/">
                            </div>
                            <div class="form-group">
                                <label>Linkedin</label>
                                <input type="text" class="form-control" name="title" id="linkedin"
                                       value="https://www.linkedin.com/in/">
                            </div>
                            <div class="form-group">
                                <label>İnstagram</label>
                                <input type="text" class="form-control" name="title"
                                       value="https:/www.instagram.com/" id="instagram">
                            </div>
                            <div class="form-group">
                                <label>Youtube</label>
                                <input type="text" class="form-control" name="title" value="https:/www.youtube.com/"
                                       id="youtube">
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
<script !src="">

    $("#facebook").keypress(function (ev) {
        var value = "https:/www.facebook.com/";
        var tval = this.value;
        var c = ev.keyCode;
        this.selectionStart = this.selectionEnd = this.value.length;
        if (tval.length == value.length && c == 8) {
            ev.preventDefault();
        }
        this.value = value + tval.substring(value.length);
    });
    $("#twitter").keypress(function (ev) {
        var value = "https:/www.twitter.com/";
        var tval = this.value;
        var c = ev.keyCode;
        this.selectionStart = this.selectionEnd = this.value.length;
        if (tval.length == value.length && c == 8) {
            ev.preventDefault();
        }
        this.value = value + tval.substring(value.length);
    });
    $("#instagram").keypress(function (ev) {
        var value = "https:/www.instagram.com/";
        var tval = this.value;
        var c = ev.keyCode;
        this.selectionStart = this.selectionEnd = this.value.length;
        if (tval.length == value.length && c == 8) {
            ev.preventDefault();
        }
        this.value = value + tval.substring(value.length);
    });
    $("#youtube").keypress(function (ev) {
        var value = "https:/www.youtube.com/";
        var tval = this.value;
        var c = ev.keyCode;
        this.selectionStart = this.selectionEnd = this.value.length;
        if (tval.length == value.length && c == 8) {
            ev.preventDefault();
        }
        this.value = value + tval.substring(value.length);
    });
    $("#linkedin").keypress(function (ev) {
        var value = "https://www.linkedin.com/in/";
        var tval = this.value;
        var c = ev.keyCode;
        this.selectionStart = this.selectionEnd = this.value.length;
        if (tval.length == value.length && c == 8) {
            ev.preventDefault();
        }
        this.value = value + tval.substring(value.length);
    });

</script>
<?php $this->load->view("include/appCustomizer") ?>

<!-- build:js <?= base_url("assets") ?>/assets/js/core.min.js -->
<?php $this->load->view("include/script") ?>
</body>
</html>