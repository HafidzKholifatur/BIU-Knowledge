<?= $this->extend('auth/auth_template'); ?>
<?= $this->section('auth'); ?>

<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo mb-5">
                    <a href="<?= base_url('auth') ?>"><img src="<?= base_url('assets/images/logo/logo2.png') ?>" alt="Logo" style="width: 220px; height: 120px;"></a>
                </div>
                <h1 class="auth-title text-success">Masuk.</h1>
                <p class="auth-subtitle mb-5">Masuk ke dalam dashboard dengan akun yang sudah terdaftar.</p>

                <?= form_open(base_url('auth/login')); ?>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" id="username" name="username" placeholder="Username" autofocus>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" id="password" name="password" placeholder="Password" autocomplete="off">
                    <small class="invalid-feedback"></small>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Ingat saya diperangkat ini
                    </label>
                </div>
                <button type="submit" class="btn btn-success btn-block btn-lg shadow-lg mt-5" id="login">Masuk</button>
                <?= form_close(); ?>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Tidak Punya Akun ? <a href="#" class="font-bold text-success">Hubungi Admin BIU</a>.</p>
                    <p class="text-gray-600">Kembali Ke <a class="font-bold text-success" href="<?= base_url('Homepage') ?>"><u>Homepage</u></a>.</p>
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