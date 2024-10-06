<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar User</h3>
                <p class="text-subtitle text-muted">Menampilkan Seluruh Data Member Yang Terdaftar Pada BIU Knowledge.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar User</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- <div class="mb-4">
        <button class="btn btn-primary tambah"><i class="fa-solid fa-plus"></i> Tambah User</button>
    </div> -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="justify-content-between d-flex mb-0">
                <div class="col-md-8">
                    <h4 class="card-title">Tabel User</h4>
                    <p class="text-subtitle text-muted">
                        Menampilkan data user yang sudah terdaftar.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="justify-content-end d-flex">
                        <button class="btn btn-success tambah"><i class="fa-solid fa-plus"></i> Tambah User</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="example1" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Nama User</th>
                            <th>Alamat</th>
                            <th>Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('', ['csrf_id' => 'token']); ?>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">
                        <label for="nama">Nama</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">
                        <label for="email">Alamat Email</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Alamat email">
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">
                        <label for="alamat">Alamat</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-form-label">
                        <label for="role">Hak Akses</label>
                    </div>
                    <div class="col-sm-9">
                        <select class="form-control" name="role" id="role">
                            <option value="">Pilih Role</option>
                            <?php foreach (esc($roles) as $data) : ?>
                                <option value="<?= esc($data->id) ?>"><?= esc($data->keterangan) ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="" class="btn btn-primary">Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // $(function() {
    //     $("#example1").DataTable({
    //         // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    //         "responsive": true,
    //         "paging": true,
    //         "lengthMenu": [
    //             [10, 25, 50, -1],
    //             [10, 25, 50, "All"]
    //         ],
    //         "lengthChange": true,
    //         "autoWidth": false
    //     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    //     $('#example2').DataTable({
    //         "paging": true,
    //         "lengthChange": false,
    //         "searching": false,
    //         "ordering": true,
    //         "info": true,
    //         "autoWidth": false,
    //         "responsive": true,
    //     });
    // });
    $(document).ready(function() {
        const table = $("#example1").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: `${BASE_URL}/user/ajax`
            },
            lengthMenu: [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
                // [1],
                // [1]
            ],
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'username'
                },
                {
                    data: 'nama'
                },
                {
                    data: 'alamat'
                },
                {
                    data: 'keterangan'
                },
                {
                    render: function(data, type, row) {
                        let html = `<button class="btn btn-success btn-sm mr-1 edit me-2" data-id="${row.id}" data-nama="${row.nama}" data-username="${row.username}" data-email="${row.email}" data-alamat="${row.alamat}" data-role="${row.role}"><i class="fa-solid fa-pen-to-square"></i> Edit</button>`;
                        html += `<button class="btn btn-danger btn-sm hapus" data-id="${row.id}"><i class="fa fa-trash"></i> Hapus</button>`;
                        return html;
                    }
                }
            ],
            columnDefs: [{
                    targets: 0,
                    width: "5%"
                },
                {
                    targets: [0, -1],
                    orderable: false
                }
            ]
        })
        // tambah data user
        $(".tambah").on("click", function() {
            $("#formModal").modal('show');
            $("form").attr('action', `${BASE_URL}/user/tambah`);
            $(".modal-title").text('Tambah Data');
            $("button[type=submit]").attr('id', 'tambah');
        })
        // jika tombol save di tekan kirim data dengan ajax 
        $(".content").on('click', '#tambah', function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $("form").attr('action'),
                data: $("form").serialize(),
                success: function(response) {
                    responValidasi(['tambah'], ['nama', 'username', 'email', 'password', 'role'], response);
                    if (response.sukses) {
                        table.ajax.reload();
                        $("#formModal").modal('hide');
                    }
                },
                error: function(xhr, status, message) {
                    $("#formModal").modal('hide');
                    toastr.error(message);
                }
            });
        })

        // edit data user
        $(".content").on('click', '.edit', function(e) {
            e.preventDefault();
            $("#formModal").modal('show');
            $("form").attr('action', `${BASE_URL}/user/ubah`);
            $(".modal-title").text('Ubah Data');
            $("button[type=submit]").attr('id', 'ubah');

            $("#nama").val($(this).data('nama'));
            $("#username").val($(this).data('username'));
            $("#email").val($(this).data('email'));
            $("#alamat").val($(this).data('alamat'));
            $("#role").val($(this).data('role'));
            $(".modal-footer").append('<input type="hidden" name="id" value="' + $(this).data('id') + '">')
        })
        // jika tombol save di tekan kirim data dengan ajax 
        $(".content").on('click', '#ubah', function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $("form").attr('action'),
                dataType: "json",
                data: $("form").serialize(),
                success: function(response) {
                    responValidasi(['ubah'], ['nama', 'username', 'email', 'password', 'role'], response);
                    if (response.sukses) {
                        table.ajax.reload();
                        $("#formModal").modal('hide');
                    }
                },
                error: function(xhr, status, message) {
                    $("#formModal").modal('hide');
                    toastr.error(message);
                }
            });
        })
        // hapus data user
        $(".content").on('click', '.hapus', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "post",
                        url: `${BASE_URL}/user/hapus`,
                        dataType: "json",
                        data: {
                            [$("#token").attr('name')]: $("#token").val(),
                            id: $(this).data('id')
                        },
                        success: function(response) {
                            if (response.status) {
                                table.ajax.reload();
                                toastr.success(response.pesan)
                            } else {
                                toastr.error(response.pesan)
                            }
                        },
                        error: function(xhr, status, message) {
                            $("#formModal").modal('hide');
                            toastr.error(message);
                        }
                    });
                }
            });
        });
        $("#formModal").on('hidden.bs.modal', function() {
            $("form")[0].reset();
            $("input").removeClass('is-invalid');
            $("textarea").removeClass('is-invalid');
            $("select").removeClass('is-invalid');
            $(".modal-footer input[name=id]").remove();
        });
    })
</script>
<?php $this->endSection(); ?>