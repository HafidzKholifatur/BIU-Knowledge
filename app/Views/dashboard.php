<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?php $session     = \Config\Services::session(); ?>
<?php $session = \Config\Services::session();

use App\Models\Dasbor_model;

$m_dasbor = new Dasbor_model();
?>

<div class="page-heading">
    <h3>Statistik</h3>
</div>
<div class="page-content">
    <div id="pesan" data-pesan="<?= session()->getFlashdata('pesan') ?>"></div>
    <!-- Jika Yang Login Dosen -->
    <?php if (esc(get_user('id_role') == 3)) : ?>
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body py-4-5 px-5">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="stats-icon green">
                                            <i class="fa-solid fa-newspaper"></i>
                                            <!-- <i class="iconly-boldShow"></i> -->
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <h6 class="text-muted font-semibold">
                                            Knowledge Disetujui
                                        </h6>
                                        <h6 class="font-extrabold mb-0"><?= angka($beritapublish) ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body py-4-5 px-5">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="stats-icon blue">
                                            <i class="fa-solid fa-newspaper"></i>
                                            <!-- <i class="iconly-boldProfile"></i> -->
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <h6 class="text-muted font-semibold">Knowledge Belum Disetujui</h6>
                                        <h6 class="font-extrabold mb-0"><?= angka($beritadraft) ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="<?= base_url('uploads/profile/' . esc(get_user('avatar'))) ?>" alt="Face 1">
                                        <!-- <img src="assets/images/faces/1.jpg" alt="Face 1"> -->
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold"><?= esc(get_user('nama')); ?></h5>
                                        <?php if (esc(get_user('id_role') == 1)) { ?>
                                            <h6 class="text-muted mb-0">Super Admin</h6>
                                        <?php } elseif (esc(get_user('id_role') == 2)) { ?>
                                            <h6 class="text-muted mb-0">Admin</h6>
                                        <?php } else { ?>
                                            <h6 class="text-muted mb-0">User</h6>
                                        <?php };  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-header">
                            <h4>Profile Visit</h4>
                        </div> -->
                            <div class="card-body">
                                <!-- <div id="chart-profile-visit"></div> -->
                                <div class="text-center">
                                    <h1>Selamat Datang</h1>
                                    <h2 class="mt-3 mb-5"><?= esc(get_user('nama')); ?></h2>
                                    <h4>Bagikan pengetahuan seputar pelatihan yang kamu ikuti disini!</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>
    <!-- End Bagian Dosen -->

    <!-- Jika Yang Login Admin atau SuperAdmin -->
    <?php if (esc(get_user('id_role') == 1 || get_user('id_role') == 2)) : ?>
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="fa-solid fa-newspaper"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Disetujui</h6>
                                        <h6 class="font-extrabold mb-0"><?= angka($m_dasbor->beritapublish()) ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="fa-solid fa-newspaper"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Belum Disetuji</h6>
                                        <h6 class="font-extrabold mb-0"><?= angka($m_dasbor->beritadraft()) ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="fa-solid fa-bookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Kategori</h6>
                                        <h6 class="font-extrabold mb-0"><?= angka($m_dasbor->kategori()) ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="fa-solid fa-user-group"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Users Pengguna</h6>
                                        <h6 class="font-extrabold mb-0"><?= angka($m_dasbor->user()) ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="<?= base_url('uploads/profile/' . esc(get_user('avatar'))) ?>" alt="Face 1">
                                <!-- <img src="assets/images/faces/1.jpg" alt="Face 1"> -->
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold"><?= esc(get_user('nama')); ?></h5>
                                <?php if (esc(get_user('id_role') == 1)) { ?>
                                    <h6 class="text-muted mb-0">Super Admin</h6>
                                <?php } elseif (esc(get_user('id_role') == 2)) { ?>
                                    <h6 class="text-muted mb-0">Admin</h6>
                                <?php } else { ?>
                                    <h6 class="text-muted mb-0">Dosen</h6>
                                <?php };  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Statistik Knowledge Masuk Bulanan</h4>
                    </div>
                    <div class="card-body">
                        <div class="position-relative mb-4">
                            <canvas id="laporan-berita" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>
    <!-- End Bagian Admin atau SuperAdmin -->
</div>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<?php $session     = \Config\Services::session(); ?>
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('js/dashboard.js') ?>"></script>


<!-- SWEETALERT -->
<?php if ($session->getFlashdata('sukses')) { ?>
    <script>
        swal("Berhasil", "<?= $session->getFlashdata('sukses'); ?>", "success")
    </script>
<?php } ?>

<?php if (isset($error)) { ?>
    <script>
        swal("Oops...", "<?= strip_tags($error); ?>", "warning")
    </script>
<?php } ?>

<?php if ($session->getFlashdata('warning')) { ?>
    <script>
        swal("Oops...", "<?= $session->getFlashdata('warning'); ?>", "warning")
    </script>
<?php } ?>

<script>
    // Sweet alert
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
        console.log(urlToRedirect); // verify if this is the right URL
        swal({
                title: "Yakin ingin menghapus data ini?",
                text: "Data yang sudah dihapus tidak dapat dikembalikan",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
                if (willDelete) {
                    // Proses ke URL
                    window.location.href = urlToRedirect;
                }
            });
    }

    // Kirim ulang
    function kirim(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
        console.log(urlToRedirect); // verify if this is the right URL
        swal({
                title: "Yakin Ingin Mengirim Surat Ini?",
                text: "Pengiriman Surat Sebaiknya Kurang dari 200 Kali/jam agar tidak terkena Blokir Server. Klik CANCEL untuk membatalkan. Klik OK untuk mengirim surat.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
                if (willDelete) {
                    // Proses ke URL
                    window.location.href = urlToRedirect;
                }
            });
    }
    // Akses
    // Sweet alert
    function akses(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
        console.log(urlToRedirect); // verify if this is the right URL
        swal({
                title: "Yakin ingin memberi akses?",
                text: "Data yang diberi akses akan bisa login",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
                if (willDelete) {
                    // Proses ke URL
                    window.location.href = urlToRedirect;
                }
            });
    }

    // Tinymce

    tinymce.init({
        selector: '.konten',
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic strikethrough forecolor backcolor | link image | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
</div>

<?= $this->endSection(); ?>