<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - Berita BIU Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/main/app.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/pages/auth.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo/logo1.svg') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo/logo1.png') ?>" type="image/png">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('plugins/toastr/toastr.min.css') ?>">
</head>


<body class="hold-transition login-page">
    <div class="login-box">
        <div id="base-url" data-url="<?= base_url(); ?>"></div>
        <?= $this->renderSection('auth'); ?>
    </div>


    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Toastr -->
    <script src="<?= base_url('plugins/toastr/toastr.min.js') ?>"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url('plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('js/script.js') ?>"></script>
    <script src="<?= base_url('js/auth.js') ?>"></script>
    <?= $this->renderSection('js'); ?>
</body>

</html>