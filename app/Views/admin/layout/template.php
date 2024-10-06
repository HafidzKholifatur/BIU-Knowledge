<!DOCTYPE html>
<html lang="en">

<!-- head disini -->
<?= $this->include('admin/layout/header'); ?>

<?= $this->renderSection('header') ?>
<!-- Head -->

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <div class="preloader">
        <div class="loading">
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <div id="base-url" data-url="<?= base_url(); ?>"></div>
    <div id="app">
        <!-- Main Sidebar Container -->
        <?= $this->include('admin/layout/sidebar'); ?>

 

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <!-- content disini -->
            <?= $this->renderSection('content'); ?>

            <!-- modal logout -->
            <div class="modal fade text-left" id="modal-logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Konfirmasi Logout</h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Apakah yakin ingin keluar ?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                            <a class="btn btn-danger" href="<?= base_url('auth/logout') ?>">Keluar</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer -->
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <strong>Copyright &copy; <?= date('Y') ?> <a href="<?= base_url() ?>"><?= get_pengaturan('nama_toko'); ?></a>.</strong> All rights reserved.
                    </div>
                    <div class="float-end">
                        <span>{elapsed_time} detik</span> |
                        <!-- <span>Dev : <a href="<?= esc(WA_DEV) ?>" target="blank" rel="nofollow"><?= esc(APP_DEV) ?></a></span> | -->
                        <span>Versi : <?= esc(APP_VER) ?></span>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- script disini -->
    <?= $this->include('admin/layout/js'); ?>

    <?= $this->renderSection('js'); ?>
    <!-- Javascript -->

</body>

</html>