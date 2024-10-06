<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tabel Akun</h3>
                <p class="text-subtitle text-muted">List Tabel dari berisi data akun dosen pengguna</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tabel Admin</li>
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
                        <h4 class="card-title">Table Akun</h4>
                        <p class="text-subtitle text-muted">
                            Menampilkan Seluruh Data Akun Yang Terdaftar Pada BeritaBIU.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="justify-content-end d-flex">
                            <button class="btn btn-primary tambah"><i class="fas fa-plus"></i> Tambah User</button>
                        </div>
                    </div>
                </div>
                <hr>
                <table class="table" id="tabel-user">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Offenburg</td>
                            <td>Usernamenya dosen</td>
                            <td>Offenburg@mail.com</td>
                            <td>14-01-2022</td>
                            <td>14-01-2022</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                                <a href="<?php echo base_url('admin/akun_edit') ?>" class="btn btn-warning">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-hapus">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>New Quay</td>
                            <td>Usernamenya dosen</td>
                            <td>Offenburg@mail.com</td>
                            <td>21-01-2022</td>
                            <td>14-01-2022</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                                <a href="<?php echo base_url('admin/akun_edit') ?>" class="btn btn-warning">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-hapus">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Grumo Appula</td>
                            <td>Usernamenya dosen</td>
                            <td>Offenburg@mail.com</td>
                            <td>30-01-2022</td>
                            <td>14-01-2022</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                                <a href="<?php echo base_url('admin/akun_edit') ?>" class="btn btn-warning">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-hapus">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- modal hapus -->
<div class="modal fade text-left" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Apakah Anda Ingin Menghapus Data Ini?</h5>
                <button type="button" class="btn-close rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="modal-body">
                        <p><b>Nama User :</b> Namanya Dosen</p>
                        <p><b>Email User :</b> Emailnya Dosen</p>
                        <p><b>Tanggal Dibuat :</b> Tanggal Dibuat</p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Batalkan</button>
                <a class="btn btn-danger" href="#">Hapus</a>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalTitle">Detail Akun : Nama Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <img width="100%" class="img-fluid rounded" src="https://img.favpng.com/20/11/12/computer-icons-user-profile-png-favpng-0UAKKCpRRsMj5NaiELzw1pV7L.jpg" alt>
                    </div>
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="fs-5">
                                <p class="m-0 p-0">Dosen</p>
                                <p class="m-0 p-0">
                                    <b>Nama Dosennya</b>
                                </p>
                                <p class="m-0 p-0">
                                    <b>Emailnya Dosen</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b>Biodata Lengkap</b>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Alamat Email</label>
                                                <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Created At</label>
                                                <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Alamat</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php form_open('', ['csrf_id' => 'token']);
            ?>
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
                            <option value="">1</option>
                        </select>
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="" class="btn btn-primary">Simpan</button>
            </div>
            <?php form_close();
            ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('js/dashboard.js') ?>"></script>

<script>
    $(document).ready(function() {
        const table = $("#tabel-user").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: `${BASE_URL}/user/ajax`
            },
            lengthMenu: [
                [5],
                [5]
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
                        let html = `<button class="btn btn-success btn-sm mr-1 edit" data-id="${row.id}" data-nama="${row.nama}" data-username="${row.username}" data-email="${row.email}" data-alamat="${row.alamat}" data-role="${row.role}"><i class="fas fa-edit"></i></button>`;
                        html += `<button class="btn btn-danger btn-sm hapus" data-id="${row.id}"><i class="fas fa-trash"></i></button>`;
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
<?= $this->endSection(); ?>