<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Panel | EntrBit Software</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="shortcut icon" sizes="196x196" href="<?= base_url() ?>assets/assets/images/logo.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="<?= base_url() ?>assets/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/core.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/misc-pages.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page" style="background-image: url('https://picsum.photos/id/879/1920/1080')">

<div class="simple-page-wrap">

    <div class="simple-page-logo animated swing text-white">
        <span><i class="fa fa-code"></i></span>
        <span>EntrBit Software</span>
    </div><!-- logo -->

    <div class="simple-page-form animated flipInY">
        <h4 class="form-title m-b-xl text-center">Sign Up For a new Account</h4>
        <form action="<?= base_url("signup") ?>" method="post">
            <?php if (validation_errors() || $this->session->flashdata("type")): ?>
                <div class="alert alert-<?= $this->session->flashdata("type") ? $this->session->flashdata("type") : "danger" ?>">
                    <?= validation_errors() ? validation_errors() : $this->session->flashdata("text"); ?>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <input required type="text" minlength="6"
                       class="form-control <?= form_error("fullName") ? "is-invalid" : null ?>" placeholder="Name"
                       value="<?= set_value("fullName") ?>"
                       name="fullName">
            </div>

            <div class="form-group">
                <input required type="email" minlength="6"
                       class="form-control <?= form_error("email") ? "is-invalid" : null ?>" placeholder="Email"
                       value="<?= set_value("email") ?>"
                       name="email">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input required type="password" minlength="6"
                               class="form-control <?= form_error("password") ? "is-invalid" : null ?>"
                               placeholder="Password"
                               name="pass">
                    </div>
                    <div class="col-md-6">
                        <input required type="password" minlength="6"
                               class="form-control <?= form_error("password") ? "is-invalid" : null ?>"
                               placeholder="Password Repeat"
                               name="rePass">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <?= $captcha["image"] ?>
                    </div>
                    <div class="col-md-8">
                        <input required minlength="5" type="text" class="form-control" name="captcha"
                               placeholder="Captcha">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <p readonly="" class="form-control">IP Adress: <?= $this->input->ip_address(); ?></p>
            </div>
            <button type="submit" class="btn btn-purple" name="submit" value="1">Sign Up</button>
        </form>
    </div><!-- #login-form -->

    <div class="simple-page-footer">
        <p>
            <small>Do you have an account ?</small>
            <a href="<?=base_url("login")?>">SIGN IN</a>
        </p>
    </div><!-- .simple-page-footer -->


</div>
</body>
</html>