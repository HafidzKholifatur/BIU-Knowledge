<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BIU Knowledge | <?= $title; ?></title>
    <!-- plugin css for this page -->

    <link rel="stylesheet" href="<?= base_url('assets/frontend1/vendors/mdi/css/materialdesignicons.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend1/vendors/aos/dist/aos.css/aos.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend1/vendors/owl.carousel/dist/assets/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/frontend1/vendors/owl.carousel/dist/assets/owl.theme.default.min.css') ?>" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="<?= base_url('assets/frontend1/images/favicon.png') ?>" />
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/frontend1/css/style.css') ?>">

    <!-- datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.css" />

    <!-- endinject -->

    <!-- icon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo/logo1.svg') ?>" type="image/x-icon">
    <link rel="icon" href="<?= base_url('assets/images/logo/logo1.svg') ?>" type="image/x-icon">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->

    <!-- bs css -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>

<style>
    .cari:hover {
        background-color: #4CAF50;
        color: white;
    }

    @media only screen and (max-width: 600px) {
        .youtube {
            height: 300px;
            width: 100%;
        }
    }

    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        margin: 0px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        margin: 0 4px;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
        border: 1px solid #4CAF50;
    }

    .pagination a:hover:not(.active) {
        background-color: #4CAF50;
        color: white;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 50px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        overflow-y: auto;
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        /* padding: 2px 16px; */
        /* background-color: #5cb85c; */
        color: white;
    }

    .modal-body {
        /* padding: 2px 16px; */
    }

    .modal-footer {
        /* padding: 2px 16px; */
        /* background-color: #5cb85c; */
        color: black;
    }

    .wrapper {
        position: relative;
        overflow: hidden;
    }

    .embed-cover {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }
</style>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <header id="header">
                <div class="container">

                    <?php
                    // $key = [
                    //     'value' => $key,
                    // ];

                    $keyword = [
                        'name' => 'keyword',
                        'class' => 'form-control',
                        'class' => ' me-2',
                        // 'class' => 'search-field',
                        'value' => $keyword,
                        'type' => 'search',
                        'placeholder' => 'Masukan Keywords',
                        'aria-label' => 'search',
                    ];

                    $submit = [
                        'name' => 'submit',
                        'class' => 'btn',
                        'class' => 'btn-outline-success',
                        // 'class' => 'btn',
                        'value' => 'Search',
                        'type' => 'submit',
                    ];
                    ?>


                    <!-- partial:partials/_navbar.html -->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="d-flex justify-content-start align-items-left navbar-top">
                            <!-- <ul class="navbar-left">
                        <li>Wed, March 4, 2020</li>
                        <li>30°C,London</li>
                    </ul> -->
                            <div>
                                <a class="navbar-brand" href="<?= base_url('homepage') ?>">
                                    <img src="<?= base_url('assets/images/logo/logo2.png') ?>" alt="" width="200px" />
                                    <!-- Berita BIU -->
                                </a>
                            </div>
                            <!-- <div class="d-flex">
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
                    </div> -->
                        </div>
                        <div class="navbar-bottom-menu">
                            <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                                    <li>
                                        <button class="navbar-close">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link active" href="<?= base_url('homepage') ?>">Beranda</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Kategori
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php foreach ($kategori as $kategori) { ?>
                                                <li value="<?= $kategori['id'] ?>"><a class="dropdown-item my-3" href="/kategoriBerita/<?= $kategori['id'] ?>"><?= $kategori['nama_kategori'] ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('download') ?>">Download</a>
                                    </li>
                                    <li class="nav-item">
                                        <?php if (session()->has('login')) { ?>
                                            <a class="nav-link" href="<?= base_url('dashboard') ?>" style="color: green;">Dashboard</a>
                                        <?php } else { ?>
                                            <a class="nav-link" href="<?= base_url('auth') ?>" style="color: green;">Login</a>
                                        <?php } ?>
                                    </li>

                                    <!-- <form class="d-flex"> -->
                                    <?= form_open('search/index', ['class' => 'd-flex']) ?>
                                    <input class=" form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                                    <input type="submit" name="submit" class="btn btn-outline-success cari" value="Search">
                                    <!-- <button class="btn btn-outline-success cari" type="submit">Search</button> -->
                                    <?= form_close() ?>
                                    <!-- </form> -->
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <!-- partial -->

                </div>
            </header>

            <!-- Content Part -->

            <div class="container">
                <section id="content-wrap" class="site-page">
                    <!-- <div class="row"> -->
                    <div class="col-twelve">
                        <section>
                            <div class="primary-content">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="text-center">
                                            <h1 class="text-center mt-5">
                                                Download Dokumen
                                            </h1>
                                            <p class="text-secondary fs-15">
                                                Disini tersedia berbagai dokumen yang dapat didownload.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="world-news">
                                    <div class="table-responsive">
                                        <table class="display table table-bordered" id="data-download" style="width:100%" oncontextmenu="return false;">
                                            <thead>
                                                <tr>
                                                    <th width="5%" class="text-center">No</th>
                                                    <th width="25%" class="text-center">File</th>
                                                    <th width="55%" class="text-center">Judul</th>
                                                    <!-- <th width="15%">Kategori</th> -->
                                                    <!-- <th width="15%">Jenis</th> -->
                                                    <th width="15%" class="text-center">Author</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;

                                                foreach ($file as $download) { ?>
                                                    <tr>
                                                        <td class="text-center"><?= $no ?></td>
                                                        <td class="text-center">
                                                            <!-- <button id="myBtn">Open Modal</button> -->
                                                            <button class="btn btn-warning text-white" data-toggle="modal" data-target="#myModal<?php echo $download['id_download'] ?>">Lihat Dokumen</button>

                                                            <!-- <a href="<?= base_url('download/view/' . $download['gambar'] . '#toolbar=0&navpanes=0') ?>" target="_blank">Show My Pdf</a> -->

                                                            <?php if (session()->has('login')) { ?>
                                                                <?php if ($download['gambar'] === '') {
                                                                    echo '-';
                                                                } else { ?>
                                                                    <a class="btn btn-success" href="<?= base_url('download/unduh/' . $download['id_download']) ?>" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Unduh</a>
                                                                <?php } ?>
                                                            <?php } else { ?>

                                                            <?php } ?>
                                                        </td>
                                                        <td><?= $download['judul_download'] ?>
                                                            <!-- <small>
                                                <br><i class="fa fa-link"></i> <?= $download['website'] ?>
                                            </small> -->
                                                        </td>
                                                        <!-- <td><?= $download['nama_kategori_download'] ?></td> -->
                                                        <!-- <td><?= $download['jenis_download'] ?></td> -->
                                                        <td class="text-center"><?= $download['nama'] ?></td>
                                                    </tr>
                                                <?php $no++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                        </section>
                    </div> <!-- end col-twelve -->
                    <!-- </div> -->
                </section> <!-- end content -->
            </div>

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
                                <li><a href="<?= base_url('download/frontend') ?>">Download</a></li>
                                <?php if (session()->has('login')) { ?>
                                    <li><a href="<?= base_url('dashboard') ?>" title="" style="color: green;">Dashboard</a></li>
                                <?php } else { ?>
                                    <li><a href="<?= base_url('auth') ?>" title="" style="color: green;">Login</a></li>
                                <?php } ?>
                            </ul>
                        </div>
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
                                <p class="font-weight-medium">
                                    Copyright © 2020 <a href="#" target="_blank" class="text-dark">Bina Insani University | BIU Knowledge</a>. All Rights Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- partial -->
        </div>
    </div>

    <!-- The Modal -->
    <?php foreach ($file as $download) { ?>
        <div id="pdf-viewer">
            <div id="myModal<?php echo $download['id_download'] ?>" class="modal" data-backdrop="false">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                        <span class="close" data-dismiss="modal" aria-hidden="true">&times;</span>
                        <!-- <h2>Modal Header</h2> -->
                    </div>
                    <div class="modal-body">
                        <div id="pdf wrapper" oncontextmenu="return false">
                            <script type="text/javascript">
                                document.addEventListener("keydown", function(e) {
                                    if (e.ctrlKey && (e.key === "s" || e.key === "S")) {
                                        e.preventDefault();
                                        alert("Saving the PDF is not allowed");
                                    }
                                });
                            </script>
                            <object width="100%" height="650" type="application/pdf" data="<?= base_url('download/view/' . $download['gambar'] . '#toolbar=0&navpanes=0') ?>#zoom=85&scrollbar=0&toolbar=0&navpanes=0" id="pdf_content" style="pointer-events: none;">
                                <p>Dokumen Tidak Dapat Ditampilkan.</p>
                            </object>
                            <!-- <p><?= $download['id_download'] ?></p>
                        <p>Some text in the Modal Body</p>
                        <p>Some other text...</p> -->
                            <div class="embed-cover"></div>
                        </div>
                        <div class="modal-footer">
                            <small class="text-danger">File dalam modal ini dibekukan, jika ingin mendownload atau melihat selengkapnya silahkan login terlebih dahulu.</small>
                            <!-- <h3>Modal Footer</h3> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <h3>Modal Footer</h3> -->
                        <button class="btn btn-success" style="border-radius: 5px;" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>




    <!-- Disable Right Click Modal [ ERROR ANJIM TAI BAT KAGA BISA ]-->
    <script>
        $("pdf_content").on("contextmenu", function(e) {
            e.preventDefault();
            alertUser('Mouse right click');
        });
    </script>

    <!-- Disable Ctrl + P -->
    <script type="text/javascript">
        document.onkeydown = function(e) {
            if (e.ctrlKey && (e.key === 'p' || e.key === 'P')) {
                e.preventDefault();
            }
        };
    </script>

    <!-- Disable Right Click -->
    <script type="text/javascript">
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        }, false);
    </script>

    <!-- <script>
            $(document).ready(function() {
                $(document).bind("pdf_content", function(e) {
                    return false;
                });
            })
        </script> -->

    <script>
        $(document).ready(function() {
            $('#data-download').DataTable({
                search: {
                    return: true,
                },
            });
        });
    </script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script src="<?= base_url() ?>/assets/admin/plugins/jquery/jquery.min.js"></script>

    <!-- inject:js -->
    <script src="<?= base_url('assets/frontend1/vendors/js/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="<?= base_url('assets/frontend1/vendors/owl.carousel/dist/owl.carousel.min.js') ?>"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->

    <!-- End custom js for this page-->

    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>

</body>

</html>