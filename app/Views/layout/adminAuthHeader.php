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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


    <?php if (session()->getFlashdata('success') !== NULL) : ?>
        <div class="alert alert-success" id="alert-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="alert-header">
                <strong class="me-auto">Message</strong>
                <button type="button" class="close btn btn-outline-dark" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="alert-body">
                <?php echo session()->getFlashdata('success'); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error') !== NULL) : ?>
        <div class="alert alert-danger" id="alert-danger" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="alert-header">
                <strong class="me-auto">Message</strong>
                <button type="button" class="close btn btn-outline-dark" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="alert-body">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('message') !== NULL) : ?>
        <div class="alert alert-info" id="alert-message" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="alert-header">
                <strong class="me-auto">Message</strong>
                <button type="button" class="close btn btn-outline-dark" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="alert-body">
                <?php echo session()->getFlashdata('message'); ?>
            </div>
        </div>
    <?php endif; ?>