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