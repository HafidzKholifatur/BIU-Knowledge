<?= $this->extend('frontend/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="news-post-wrapper">
            <div class="news-post-wrapper-sm ">
              <h1 class="text-center">
                <?= $berita['judul_berita']; ?>
              </h1>
              <div class="text-center">
                <a value="<?= $berita['id_kategori'] ?>" href="/kategoriBerita/<?= $berita['id_kategori'] ?>" class="btn btn-dark font-weight-bold mb-4"><?= $berita['nama_kategori']; ?></a>
              </div>
              <p
                class="fs-15 d-flex justify-content-center align-items-center m-0"
              >
                <img
                  src="<?= base_url('uploads/profile/' . $berita['avatar']); ?>"
                  alt=""
                  class="img-xs img-rounded mr-2"
                />
                <?= $berita['nama']; ?> | <?= date('F d, Y', strtotime($berita['tanggal_post'])); ?>
              </p>
              <div class="pt-4 pb-4">
                <?= $berita['isi']; ?>
            </div>
              <div class="text-center pb-5 mb-5 border-bottom">
                <!-- <a
                  href="#"
                  class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0"
                  >News</a
                >
                <a
                  href="#"
                  class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0"
                  >News</a
                >
                <a
                  href="#"
                  class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0"
                  >News</a
                >
                <a
                  href="#"
                  class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0"
                  >News</a
                >
                <a
                  href="#"
                  class="btn btn-dark font-weight-bold mr-2 mb-2 mb-sm-0"
                  >News</a
                > -->
              </div>
              <div class="text-center">
                <img
                  src="<?= base_url('uploads/profile/' . $berita['avatar']); ?>"
                  alt="news"
                  class="img-lg img-rounded img-fluid mb-3"
                />
                <p class="fs-12 mb-1">Sang Penulis</p>
                <p class="fs-12 font-weight-medium mb-2"><?= $berita['nama']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?= $this->endSection(); ?>