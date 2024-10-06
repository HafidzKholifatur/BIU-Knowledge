<?= $this->extend('frontend/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    Kategori Knowledge
                </h1>
                <p class="text-secondary fs-15">
                    Menampilkan semua informasi Knowledge sesuai kategori yang dipilih.
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-12">
            <h5 class="text-muted font-weight-medium mb-3">List Berita</h5>
        </div>
    </div>
    <div class="row mb-4">
        <?php if ($berita == NULL) : ?>
            <br><br>
            <div class="row" style="padding: 0 20px;">
                <div class="col-twelve tab-full">
                    <center>
                        <h1>Tidak ada berita untuk ditampilkan.</h1>
                    </center>
                </div>
            </div>
        <?php endif; ?>
        <?php foreach ($berita as $p) : ?>
            <div class="col-sm-3 mb-5 mb-sm-5">
                <div class="position-relative image-hover">
                    <a href="/homepage/<?= $p['id_berita']; ?>">
                        <img src="<?= base_url('../assets/upload/image/thumbs/' . $p['gambar']) ?>" class="img-fluid" alt="world-news" style="width: 100%;" />
                    </a>
                    <span class="thumb-title"><?= $p['nama_kategori']; ?></span>
                </div>
                <h5 class="font-weight-600 mt-3">
                    <a class="text-dark" href="/homepage/<?= $p['id_berita']; ?>">
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
</div>
<!-- Pagination -->
<?php //echo $pager->links('berita', 'berita_paging'); 
?>
<!-- End Pagination -->


<?= $this->endSection(); ?>