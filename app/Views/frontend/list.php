<?= $this->extend('frontend/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    Semua Knowledge
                </h1>
                <p class="text-secondary fs-15">
                    Menampilkan semua Knowledge yang telah dibagikan mulai dari yang terbaru.
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3">List Knowledge</h5>
        </div>
    </div>
    <div class="row mb-4">
        <?php foreach ($berita as $b) : ?>
            <div class="col-sm-3 mb-5 mb-sm-5">
                <div class="position-relative image-hover">
                    <a href="/homepage/<?= $b['id_berita']; ?>">
                        <img src="<?= base_url('../assets/upload/image/thumbs/' . $b['gambar']) ?>" class="img-fluid" alt="world-news" style="width: 100%;" />
                    </a>
                    <!-- <span class="thumb-title">WORLD</span> -->
                </div>
                <h5 class="font-weight-600 mt-3">
                    <a class="text-dark" href="/homepage/<?= $b['id_berita']; ?>">
                        <?= $b['judul_berita']; ?>
                    </a>
                </h5>
                <p class="fs-15 font-weight-normal text-truncate">
                    <?= $b['ringkasan']; ?>
                </p>
                <a href="/homepage/<?= $b['id_berita']; ?>" class="font-weight-bold text-dark pt-2">Read Article</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Pagination -->
<?php echo $pager->links('berita', 'berita_paging');
?>
<!-- End Pagination -->


<?= $this->endSection(); ?>