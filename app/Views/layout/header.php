<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>King Jari</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?= base_url("assets/custom-font/fonts.css") ?>" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css") ?>" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("assets/css/font-awesome.min.css") ?>" />
    <!-- Bootsnav -->
    <link rel="stylesheet" href="<?= base_url("assets/css/bootsnav.css") ?>">
    <!-- Fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="<?= base_url("assets/css/custom.css") ?>" />
    <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body>

    <!-- Preloader -->

    <?php if (session()->getFlashdata('success') !== NULL) : ?>
        <div class="alert alert-success" id="alert-success" role="alert">
            <?php echo session()->getFlashdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error') !== NULL) : ?>
        <div class="alert alert-danger" id="alert-danger" role="alert">
            <?php echo session()->getFlashdata('error'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    <?php endif; ?>

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>

    <!--End off Preloader -->

    <!-- Header -->
    <header>
        <!-- Top Navbar -->
        <div class="top_nav">
            <div class="container">
                <ul class="list-inline info">
                    <li><a href="#"><span class="fa fa-phone"></span> +2348068175653</a></li>
                    <li><a href="#"><span class="fa fa-phone"></span> +2348026911981</a></li>
                    <li><a href="#"><span class="fa fa-envelope"></span> Kingjariglobalresourceslimited@gmail.com</a></li>
                    <li><a href="#"><span class="fa fa-clock-o"></span> Mon - Sat 9:00 - 5:00</a></li>
                </ul>
                <ul class="list-inline social_icon">
                    <li><a href=""><span class="fa fa-facebook"></span></a></li>
                    <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                    <li><a href=""><span class="fa fa-youtube"></span></a></li>
                </ul>
            </div>
        </div><!-- Top Navbar end -->