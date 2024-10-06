<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pengaturan</h3>
                <p class="text-subtitle text-muted">Mengatur Data Frontend Pada BIU Knowledge.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengaturan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <?= form_open(); ?>
                    <div class="form-group">
                        <label>Nama Instansi</label>
                        <input type="text" class="form-control" placeholder="Nama Instansi" name="nama_toko" value="<?= $pengaturan['nama_toko'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>No Telp</label>
                        <input type="text" class="form-control" placeholder="No Telp" name="no_telp" value="<?= $pengaturan['no_telp'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" placeholder="Alamat" class="form-control" required><?= $pengaturan['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Link Youtube Untuk Homepage (Embed Link)</label>
                        <textarea name="youtube" placeholder="Link Youtube" class="form-control" required><?= $pengaturan['youtube'] ?></textarea>
                        <small class="text-danger">Format <strong>Menggunakan Link <u>Embed</u> Dari Youtube</strong>.</small>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->
<?= $this->endSection(); ?>