<?= $this->extend('frontend/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    Pencarian
                </h1>
                <p class="text-secondary fs-15">
                    MPencarian terkait kata "<?= $keyword ?>"
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3">List Pencarian</h5>
        </div>
    </div>
    <div class="row mb-4">
        <?php if ($hasil == NULL) : ?>
            <br><br>
            <div class="row" style="padding: 0 20px;">
                <div class="col-twelve tab-full">
                    <center>
                        <h1>Hasil Pencarian Tidak Ditemukan.</h1>
                    </center>
                </div>
            </div>
        <?php endif; ?>
        <?php foreach ($hasil as $b) : ?>
            <div class="col-sm-3 mb-5 mb-sm-5">
                <div class="position-relative image-hover">
                    <a href="/homepage/<?= $b['id_berita']; ?>">
                        <img src="<?= base_url('../assets/upload/image/thumbs/' . $b['gambar']) ?>" class="img-fluid" alt="world-news" style="width: 100%;" />
                    </a>
                    <span class="thumb-title"><?= $b['nama_kategori']; ?></span>
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


<?= $this->endSection(); ?>


<?php foreach ($hasil as $c) : ?>
    <p><?= $c['judul_berita']; ?></p>
<?php endforeach; ?>