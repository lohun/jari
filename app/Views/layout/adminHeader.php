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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
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

    <!-- Header -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url("admin") ?>"><img class="logo" style="width: 60%;" src="<?= base_url("assets/images/logo3.png") ?>" alt=""></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url("admin") ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url("admin/media") ?>">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url("admin/user") ?>">Users</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url("admin/profile") ?>">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url("admin/logout") ?>">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>        
    </header><!-- Header end -->


    <?php if (session()->getFlashdata('success') !== NULL) : ?>
        <div class="toast toast-success" id="alert-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Message</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?php echo session()->getFlashdata('success'); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error') !== NULL) : ?>
        <div class="toast toast-danger" id="alert-danger" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Message</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('message') !== NULL) : ?>
        <div class="toast toast-info" id="alert-message" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Message</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?php echo session()->getFlashdata('message'); ?>
            </div>
        </div>
    <?php endif; ?>