<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>BPH | Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/css/animate-3.7.0.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-4.7.0.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.1.3.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl-carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.datetimepicker.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/linearicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/customstyle.css') ?>">

    <?= $this->renderSection('customcss') ?>
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <?= $this->include('layouts/header') ?>
    <!-- Header Area End -->
    
    <?= $this->renderSection('content') ?>

    <!-- Footer Area Starts -->
    <?= $this->include('layouts/footer') ?>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="<?= base_url('assets/js/vendor/jquery-2.2.4.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/vendor/bootstrap-4.1.3.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/owl-carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/jquery.datetimepicker.full.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/superfish.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <?= $this->renderSection('customjs') ?>
</body>
</html>
