<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>404 Error Page | EntrBit Software</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="shortcut icon" sizes="196x196" href="assets/assets/images/logo.png">
    <link rel="stylesheet" href="assets/libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/libs/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/assets/css/core.css">
    <link rel="stylesheet" href="assets/assets/css/misc-pages.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page">
<div id="back-to-home">
    <a href="/" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
</div>
<div class="simple-page-wrap">
    <div class="simple-page-logo animated swing">
        <a href="/">
            <span><i class="fa fa-code"></i></span>
            <span>EntrBit Software</span>
        </a>
    </div><!-- logo -->
    <h1 id="_404_title" class="animated shake">404</h1>
    <h5 id="_404_msg" class="animated slideInUp"><?= $message; ?></h5>

</div><!-- .simple-page-wrap -->
</body>
</html>