<?= $this->extend('frontend/layout/template'); ?>


<?= $this->section('content'); ?>

<section id="bricks">
    <div class="row masonry">
        <!-- brick-wrapper -->
        <div class="bricks-wrapper">
            <div class="grid-sizer"></div>

            <div class="brick entry featured-grid animate-this">
                <div class="entry-content">
                    <div id="featured-post-slider" class="flexslider">
                        <ul class="slides">
                            <?php foreach ($utama as $u) : ?>
                                <li>
                                    <div class="featured-post-slide">
                                        <div class="post-background" style="background-image:url(<?= base_url('../assets/upload/image/thumbs/' . $u['gambar']); ?>);"></div>
                                        <!-- <div class="post-background" style="background-image:url(<?= base_url('assets/frontend/images/thumbs/featured/featured-1.jpg'); ?>);"></div> -->
                                        <div class="overlay"></div>
                                        <div class="post-content">
                                            <ul class="entry-meta">
                                                <li><?= date('F d, Y', strtotime($u['tanggal_post'])); ?></li>
                                                <!-- <li>September 06, 2016</li> -->
                                                <li><a href="#"><?= $u['nama']; ?></a></li>
                                            </ul>
                                            <h1 class="slide-title"><a href="/homepage/<?= $u['id_berita']; ?>" title=""><?= $u['judul_berita']; ?></a></h1>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>


            <?php foreach ($utama as $u) : ?>
                <article class="brick entry format-standard animate-this">
                    <div class="featured-post-slide" style="width: 320px; height:280px;">
                        <div class="post-background" style="background-image:url(<?= base_url('../assets/upload/image/thumbs/' . $u['gambar']); ?>);"></div>
                        <div class="overlay"></div>
                        <div class="post-content">
                            <!-- <ul class="entry-meta">
                            <li>August 29, 2016</li>
                            <li><a href="#">Sasuke Uchiha</a></li>
                        </ul> -->
                            <h3 class="slide-titlee"><a href="/homepage/<?= $u['id_berita']; ?>" title="" style="text-decoration: none; color:white;"><?= $u['judul_berita']; ?></a></h3>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>

        </div>


        <hr>

        <div class="row" style="padding: 0 20px;">
            <div class="col-six tab-full">
                <h1>Berita Terbaru</h1>
                <!-- <p>
                    1600 Amphitheatre Parkway<br>
                    Mountain View, CA<br>
                    94043 US
                </p> -->
            </div>
            <!-- <div class="col-six tab-full text-right">
                <a href="<?= base_url('listBerita') ?>">
                    <h4>Lihat Selengkapnya</h4>
                </a>
            </div> -->
        </div>

        <div class="bricks-wrapper">
            <div class="grid-sizer"></div>

            <?php foreach ($publish as $p) : ?>
                <article class="brick entry format-standard animate-this">
                    <div class="entry-thumb">
                        <a href="/homepage/<?= $p['id_berita']; ?>" class="thumb-link">
                            <img src="<?= base_url('../assets/upload/image/thumbs/' . $p['gambar']) ?>" alt="building" style="width: 320px;">
                        </a>
                    </div>
                    <div class="entry-text">
                        <div class="entry-header">
                            <div class="entry-meta">
                                <span class="cat-links">
                                    <a href="#"><?= $p['nama_kategori']; ?></a>
                                </span>
                            </div>
                            <h1 class="entry-title"><a href="/homepage/<?= $p['id_berita']; ?>"><?= $p['judul_berita']; ?></a></h1>
                        </div>
                        <div class="entry-excerpt">
                            <?= word_limiter($p['ringkasan'], 30); ?>
                        </div>
                    </div>
                </article> <!-- end article -->
            <?php endforeach; ?>
        </div>

        <div class="row" style="padding: 0 20px;">
            <div class="col-six tab-full">
                <h1> </h1>
            </div>
            <div class="col-six tab-full text-right">
                <h4>
                    <a href="<?= base_url('listBerita') ?>" style="color: #151515;">
                        Lihat Selengkapnya
                    </a>
                </h4>
            </div>
        </div>

        <!-- <hr> -->
        <?php foreach ($pengaturan as $a) : ?>
            <div class="row" style="padding: 0 20px;">
                <div class="col-twelve tab-full">
                    <iframe height="800" width="100%" src="<?= $a['youtube'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    </div>
    <!-- Pagination -->
    <?php  //echo $pager->links('berita', 'berita_paging'); 
    ?>
    <!-- End Pagination -->
</section>


<?= $this->endSection(); ?>


<?= $this->section('js'); ?>

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

<?= $this->endSection(); ?>