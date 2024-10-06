<?= $this->extend('frontend/layout/template'); ?>

<?= $this->section('content'); ?>

<section id="content-wrap" class="site-page">
    <div class="row">
        <div class="col-twelve">
            <section>
                <!-- <div class="content-media">
                    <div id="map-wrap">
                        <div id="map-container"></div>
                        <div id="map-zoom-in"></div>
                        <div id="map-zoom-out"></div>
                    </div>
                </div> -->
                <div class="primary-content">

                    <div class="row narrow add-bottom text-center">
                        <div class="col-twelve tab-full">
                            <h1>Download Dokumen.</h1>
                            <p class="lead">
                                Disini tersedia berbagai dokumen yang dapat didownload.
                            </p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <table class="compact" id="data-download" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="25%">File</th>
                                    <th width="55%">Judul</th>
                                    <!-- <th width="15%">Kategori</th> -->
                                    <!-- <th width="15%">Jenis</th> -->
                                    <th width="15%">Author</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;

                                foreach ($file as $download) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td>
                                            <?php if ($download['gambar'] === '') {
                                                echo '-';
                                            } else { ?>
                                                <a href="<?= base_url('download/unduh/' . $download['id_download']) ?>" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Unduh</a>
                                            <?php } ?>
                                        </td>
                                        <td><?= $download['judul_download'] ?>
                                            <!-- <small>
                                                <br><i class="fa fa-link"></i> <?= $download['website'] ?>
                                            </small> -->
                                        </td>
                                        <!-- <td><?= $download['nama_kategori_download'] ?></td> -->
                                        <!-- <td><?= $download['jenis_download'] ?></td> -->
                                        <td><?= $download['nama'] ?></td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>


                        </table>

                    </div> <!-- end row -->

            </section>
        </div> <!-- end col-twelve -->
    </div> <!-- end row -->
</section> <!-- end content -->
<script>
    $(document).ready(function() {
        $('#data-download').DataTable({
            search: {
                return: true,
            },
        });
    });
</script>

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>

<script src="<?= base_url() ?>/assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
// <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="<?= base_url() ?>/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- DataTables  & Plugins -->
<!-- <script src="<?= base_url() ?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/jszip/jszip.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
// <script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->

<!-- Datatables -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.js"></script> -->





<?= $this->endSection(); ?>