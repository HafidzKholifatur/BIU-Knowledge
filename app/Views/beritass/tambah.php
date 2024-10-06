<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tambah Berita</h3>
                <p class="text-subtitle text-muted">Form untuk membuat berita baru</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Tambah Berita</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Judul Berita</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Masukan Judul Berita" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Thumbnail Berita</label>
                                            <input type="file" class="image-resize-filepond" name="thumbnail">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Kategori Berita</label>
                                            <select class="form-select" name="kategori" id="kategori">
                                                <option value="">Pilih Kategori</option>
                                                <?php foreach (esc($kategori) as $data) : ?>
                                                    <option value="<?= esc($data->id) ?>"><?= esc($data->kategori)  ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small class="invalid-feedback"></small>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Isi Berita</label>
                                            <div id="summernote"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end my-3">
                                        <!-- Kirim nanti kasih konfirmasi, karna kalo udah dikirim gabisa diedit -->
                                        <button type="submit" class="btn btn-primary me-1 mb-1 me-2">Kirim</button>
                                        <!-- Batalnya nanti kasih konfirmasi, supaya ga asal kepencet -->
                                        <button type="button" class="btn btn-light-secondary me-1 mb-1">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('js/dashboard.js') ?>"></script>
<?= $this->endSection(); ?>