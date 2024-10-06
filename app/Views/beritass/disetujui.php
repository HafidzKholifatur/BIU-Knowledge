<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $title; ?></h3>
                <p class="text-subtitle text-muted">List tabel dari berita yang telah disetujui.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="justify-content-between d-flex mb-0">
                    <div class="col-md-8">
                        <h4 class="card-title">Table Berita</h4>
                        <p class="text-subtitle text-muted">
                            Menampilkan Data Berita Yang Telah Disetujui.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="justify-content-end d-flex">
                            <a href="<?php echo base_url('berita') ?>" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Berita</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Thumbnail</th>
                                <th>Judul</th>
                                <th>Tanggal Upload</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Graiden</td>
                                <td>Offenburg</td>
                                <td>14-01-2022</td>
                                <td>
                                    <span class="badge bg-success">Diterima</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa-solid fa-eye me-1"></i> Detail</a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-hapus"><i class="fa-solid fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dale</td>
                                <td>New Quay</td>
                                <td>21-01-2022</td>
                                <td>
                                    <span class="badge bg-success">Diterima</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="fa-solid fa-eye me-1"></i> Detail</a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-hapus"><i class="fa-solid fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- modal hapus -->
<div class="modal fade text-left" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Konfirmasi Hapus</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Apakah yakin ingin menghapus ? <br>
                    jika sudah dihapus, data berita tidak dapat dipulihkan.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                <a class="btn btn-danger" href="#">Hapus</a>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalTitle">Detail Berita</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Biscuit powder jelly beans. Lollipop candy canes croissant icing
                    chocolate cake. Cake fruitcake
                    powder pudding pastry
                </p>
                <p>
                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah
                    chocolate bar. Cotton
                    candy
                    gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops
                    danish dessert I love
                    caramels powder
                </p>
                <p>
                    Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake.
                    Cupcake dessert icing
                    dragée dessert. Liquorice jujubes cake tart pie donut. Cotton candy
                    candy canes lollipop liquorice
                    chocolate marzipan muffin pie liquorice.
                </p>
                <p>
                    Powder cookie jelly beans sugar plum ice cream. Candy canes I love
                    powder sugar plum tiramisu.
                    Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops
                    apple pie sesame snaps
                    tootsie roll carrot cake soufflé halvah. Biscuit powder jelly beans.
                    Lollipop candy canes
                    croissant icing chocolate cake. Cake fruitcake powder pudding pastry.
                </p>
                <p>
                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah
                    chocolate bar. Cotton
                    candy gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon
                    drops danish dessert I
                    love caramels powder.
                </p>
                <p>
                    dragée dessert. Liquorice jujubes cake tart pie donut. Cotton candy
                    candy canes lollipop liquorice
                    chocolate marzipan muffin pie liquorice.
                </p>
                <p>
                    Powder cookie jelly beans sugar plum ice cream. Candy canes I love
                    powder sugar plum tiramisu.
                    Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops
                    apple pie sesame snaps
                    tootsie roll carrot cake soufflé halvah.Biscuit powder jelly beans.
                    Lollipop candy canes croissant
                    icing chocolate cake. Cake fruitcake powder pudding pastry.
                </p>
                <p>
                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah
                    chocolate bar. Cotton
                    candy gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon
                    drops danish dessert I
                    love caramels powder.
                </p>
                <p>
                    Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake.
                    Cupcake dessert icing
                    dragée dessert. Liquorice jujubes cake tart pie donut. Cotton candy
                    candy canes lollipop liquorice
                    chocolate marzipan muffin pie liquorice.
                </p>
                <p>
                    Powder cookie jelly beans sugar plum ice cream. Candy canes I love
                    powder sugar plum tiramisu.
                    Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops
                    apple pie sesame snaps
                    tootsie roll carrot cake soufflé halvah. Biscuit powder jelly beans.
                    Lollipop candy canes
                    croissant icing chocolate cake. Cake fruitcake powder pudding pastry.
                </p>
                <p>
                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah
                    chocolate bar. Cotton
                    candy gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon
                    drops danish dessert I
                    love caramels powder.
                </p>
                <p>
                    Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake.
                    Cupcake dessert icing
                    dragée dessert. Liquorice jujubes cake tart pie donut. Cotton candy
                    candy canes lollipop liquorice
                    chocolate marzipan muffin pie liquorice.
                </p>
                <p>
                    Powder cookie jelly beans sugar plum ice cream. Candy canes I love
                    powder sugar plum tiramisu.
                    Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops
                    apple pie sesame snaps
                    tootsie roll carrot cake soufflé halvah.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('js/dashboard.js') ?>"></script>
<?= $this->endSection(); ?>