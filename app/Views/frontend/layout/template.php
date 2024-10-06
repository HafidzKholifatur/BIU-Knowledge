<!DOCTYPE html>
<html lang="zxx">

<!-- head disini -->
<?= $this->include('frontend/layout/header'); ?>

<?= $this->renderSection('header') ?>
<!-- Head -->

<!-- keyword search -->

<?php

// $keyword = [
//     'name' => 'keyword',
//     'class' => 'form-control',
//     'class' => ' me-2',
//     // 'class' => 'search-field',
//     'value' => $keyword,
//     'type' => 'search',
//     'placeholder' => 'Masukan Keywords',
//     'aria-label' => 'search',
// ];

// $submit = [
//     'name' => 'submit',
//     'class' => 'btn',
//     'class' => 'btn-outline-success',
//     // 'class' => 'btn',
//     'value' => 'Search',
//     'type' => 'submit',
// ];
?>

<!-- end keyword search -->

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <header id="header">
                <div class="container">

                    <?= $this->include('frontend/layout/navbar'); ?>

                </div>
            </header>

            <!-- Content Part -->

            <?= $this->renderSection('content'); ?>

            <!-- Content Ends -->

            <!-- partial:partials/_footer.html -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-top"></div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <ul class="footer-vertical-nav">
                                <li class="menu-title border-bottom"><a href="#" style="pointer-events: none">Tentang Bina Insani</a></li>
                                <p>
                                    Jln. Raya Siliwangi No. 6 Rawa Panjang Kota Bekasi
                                </p>
                                <p>
                                    <b>T : </b>021 82436886 / 021 82436996
                                    <br>
                                    <b>E : </b>info@binainsani.ac.id
                                </p>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <ul class="footer-vertical-nav">
                                <li class="menu-title border-bottom"><a href="#" style="pointer-events: none">Menu</a></li>
                                <li><a href="<?= base_url('homepage') ?>">Beranda</a></li>
                                <li><a href="<?= base_url('download') ?>">Download</a></li>
                                <?php if (session()->has('login')) { ?>
                                    <li><a href="<?= base_url('dashboard') ?>" title="" style="color: green;">Dashboard</a></li>
                                <?php } else { ?>
                                    <li><a href="<?= base_url('auth') ?>" title="" style="color: green;">Login</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- <div class="col-sm-3 col-lg-3">
                            <ul class="footer-vertical-nav">
                                <li class="menu-title"><a href="#">Features</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Video</a></li>
                                <li><a href="pages/news-post.html">Newsletters</a></li>
                                <li><a href="#">Live Events</a></li>
                                <li><a href="#">Stores</a></li>
                                <li><a href="#">Jobs</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <ul class="footer-vertical-nav">
                                <li class="menu-title"><a href="#">More</a></li>
                                <li><a href="#">RSS</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">User Agreement</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="pages/aboutus.html">About us</a></li>
                                <li><a href="pages/contactus.html">Contact</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex justify-content-between">
                                <img src="assets/images/logo.svg" class="footer-logo" alt="" />

                                <div class="d-flex justify-content-end footer-social">
                                    <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
                                    <ul class="social-media">
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-lg-flex justify-content-center align-items-center border-top mt-5 footer-bottom">
                                <!-- <ul class="footer-horizontal-menu">
                                    <li><a href="#">Terms of Use.</a></li>
                                    <li><a href="#">Privacy Policy.</a></li>
                                    <li><a href="#">Accessibility & CC.</a></li>
                                    <li><a href="#">AdChoices.</a></li>
                                    <li><a href="#">Advertise with us Transcripts.</a></li>
                                    <li><a href="#">License.</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul> -->
                                <p class="font-weight-medium">
                                    Copyright © 2023 <a href="#" target="_blank" class="text-dark">Bina Insani University | BIU Knowledge</a>. All Rights Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- partial -->
        </div>
    </div>

    <!-- script disini -->
    <?= $this->include('frontend/layout/js'); ?>

</body>

</html>