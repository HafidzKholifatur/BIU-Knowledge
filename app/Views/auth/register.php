<?= $this->extend('auth/auth_template'); ?>
<?= $this->section('auth'); ?>

<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo mb-3">
                    <!-- <a href="#" class="small fs-1">Berita BIU</a> -->
                    <a href="<?= base_url('auth') ?>"><img src="<?= base_url('assets/images/logo/logo2.png') ?>" alt="Logo" style="width: 220px; height: 120px;"></a>
                </div>
                <h1 class="auth-title text-success">Daftar</h1>
                <p class="auth-subtitle mb-5">Masukan datamu untuk daftar.</p>

                <form action="index.html">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Masukan Alamat Email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Masukan Username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Masukan Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Konfirmasi Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button class="btn btn-success btn-block btn-lg shadow-lg mt-5">Daftar</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Sudah Mempunyai Akun? <a href="<?= base_url('auth') ?>" class="font-bold text-success">Masuk</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>