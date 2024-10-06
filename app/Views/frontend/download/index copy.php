<?= $this->extend('frontend/layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h1 class="text-center mt-5">
                    Download Dokumen
                </h1>
                <p class="text-secondary fs-15">
                    Menyediakan dokumen untuk berbagai keperluan terkait kampus.
                </p>
            </div>
        </div>
    </div>
    <div class="world-news">
        <div class="table-responsive">
            <table class="display table table-bordered" id="table-data">
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
        </div>
    </div>
</div>


<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script>
    $(document).ready(function() {
        $('#table-data').DataTable();
    });
</script>

<?= $this->endSection(); ?>