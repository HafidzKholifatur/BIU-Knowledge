<?= $this->extend('frontend/layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="owl-carousel owl-theme" id="main-banner-carousel">
                <?php foreach ($utama as $u) : ?>
                    <div class="item">
                        <div class="carousel-content-wrapper mb-2">
                            <div class="carousel-image">
                                <!-- <a href="#"> -->
                                <img src="<?= base_url('../assets/upload/image/thumbs/' . $u['gambar']); ?>" alt="" height="345.781px" style="filter: brightness(75%);" />
                                <!-- </a> -->
                            </div>
                            <div class="carousel-content">
                                <!-- <a href="#" class="text-danger"> -->
                                <h1 class="font-weight-bold">
                                    <a class="text-light banner-text" href="/homepage/<?= $u['id_berita']; ?>" title=""><?= $u['judul_berita']; ?></a>
                                </h1>
                                <!-- </a> -->
                                <h5 class="font-weight-normal m-0 text-truncate">
                                    <?= $u['ringkasan']; ?>
                                </h5>
                                <p class="text-color m-0 pt-2 d-flex align-items-center">
                                    <span class="fs-10 mr-1"><?= date('F d, Y', strtotime($u['tanggal_post'])); ?></span>
                                    <i class="mdi mdi-bookmark-outline mr-3"></i>
                                    <span class="fs-10 mr-1"><?= $u['nama']; ?></span>
                                    <i class="mdi mdi-account-outline"></i>
                                </p>
                            </div>
                            <!-- <div class="carousel-image">
                                <img src="<?= base_url('../assets/upload/image/thumbs/' . $u['gambar']); ?>" alt="" height="345.781px" />
                            </div> -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <?php foreach ($utama as $u) : ?>
                    <div class="col-sm-12">
                        <div class="py-3 border-bottom">
                            <div class="d-flex align-items-center pb-3">
                                <img src="<?= base_url('../assets/frontend1/images/dashboard/Profile_1.jpg') ?>" class="img-xs img-rounded mr-2" alt="thumb" />
                                <span class="fs-12 text-muted"><?= $u['nama']; ?></span>
                            </div>
                            <p class="fs-14 m-0 font-weight-medium line-height-sm">
                                <a href="/homepage/<?= $u['id_berita']; ?>" class="text-dark">
                                    <?= $u['judul_berita']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- dummy berita utama 2 -->
                <!-- <?php foreach ($utama as $u) : ?>
                    <div class="col-sm-6">
                        <div class="py-3 border-bottom">
                            <div class="d-flex align-items-center pb-2">
                                <img src="<?= base_url('../assets/frontend1/images/dashboard/Profile_1.jpg') ?>" class="img-xs img-rounded mr-2" alt="thumb" />
                                <span class="fs-12 text-muted"><?= $u['nama']; ?></span>
                            </div>
                            <p class="fs-14 m-0 font-weight-medium line-height-sm">
                                <a href="#" class="text-dark">
                                    <?= $u['judul_berita']; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?> -->
                <!-- end dummy berita utama 2 -->
            </div>
        </div>
    </div>
    <div class="world-news">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex position-relative float-left">
                    <h3 class="section-title">Informasi Knowledge Terbaru</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if ($publish == NULL) : ?>
                <br><br>
                <div class="row" style="padding: 0 20px;">
                    <div class="col-twelve tab-full">
                        <center>
                            <h1>Tidak ada berita untuk ditampilkan.</h1>
                        </center>
                    </div>
                </div>
            <?php endif; ?>
            <?php foreach ($publish as $p) : ?>
                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                        <a href="/homepage/<?= $p['id_berita']; ?>">
                            <img src="<?= base_url('../assets/upload/image/thumbs/' . $p['gambar']) ?>" class="img-fluid" alt="world-news" style="width: 100%;" />
                        </a>
                        <span class="thumb-title"><?= $p['nama_kategori']; ?></span>
                    </div>
                    <h5 class="font-weight-bold mt-3 text-truncate">
                        <a href="/homepage/<?= $p['id_berita']; ?>" class="text-dark">
                            <?= $p['judul_berita']; ?>
                        </a>
                    </h5>
                    <p class="fs-15 font-weight-normal text-truncate">
                        <?= $p['ringkasan']; ?>
                    </p>
                    <a href="/homepage/<?= $p['id_berita']; ?>" class="font-weight-bold text-dark pt-2">Read Article</a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="py-3">
            <div class="d-flex position-relative float-right">
                <a href="<?= base_url('listBerita') ?>" style="color: #3e8177;">
                    <h3 class="font-weight-600">Lihat Semua Knowledge</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="world-news border-top">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex position-relative float-left">
                    <h3 class="section-title">Youtube</h3>
                </div>
            </div>
        </div>
        <?php foreach ($pengaturan as $a) : ?>
            <div class="col-12 col-sm-12 p-0">
                <?php if ($a['youtube'] == NULL) : ?>
                    <br><br>
                    <div class="row" style="padding: 0 20px;">
                        <div class="col-twelve tab-full">
                            <center>
                                <h1>Tidak ada video untuk ditampilkan.</h1>
                            </center>
                        </div>
                    </div>
                <?php endif; ?>
                <iframe class="youtube" height="650" width="100%" src="<?= $a['youtube'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!-- <iframe width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
        <?php endforeach; ?>
    </div>

    <!-- <div class="world-news">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->

</div>
<?= $this->endSection(); ?>


<?= $this->section('js'); ?>

<script>
    $("#owl-demo").owlCarousel({
        navigation: true
    });
</script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<script src="<?= base_url('assets/frontend1/js/demo.js') ?>"></script>

<?= $this->endSection(); ?>