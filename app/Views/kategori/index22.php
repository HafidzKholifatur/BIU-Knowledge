<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<div>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Kategori</h3>
                <p class="text-subtitle text-muted">Menampilkan Seluruh Data Kategori Yang Terdaftar Pada BeritaBIU.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Kategori</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <button class="btn btn-primary tambah"><i class="fa-solid fa-plus"></i> Tambah Kategori</button>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="table-kategori" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <?= form_open(); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kategori" id="kategori">
                        <small class="invalid-feedback"></small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" id="">Simpan</button>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script>
    $(document).ready(function() {
        const table = $("#table-kategori").DataTable({
            proseccing: true,
            serverSide: true,
            ajax: {
                url: `${BASE_URL}/kategori/ajax`
            },
            //optional
            lengthMenu: [
                [5, 10, 25],
                [5, 10, 25]
            ],
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'kategori',
                    name: 'kategori'
                },
                {
                    data: function(row) {
                        let html = '<button class="btn btn-success btn-sm mr-1 edit me-2" data-id="' + row.id + '" data-kategori="' + row.kategori + '"><i class="fa-solid fa-pen-to-square"></i> Edit</button>';
                        html += '<button class="btn btn-danger btn-sm hapus" data-id="' + row.id + '"><i class="fa fa-trash"></i> Hapus</button>'
                        return html;
                    }
                }
            ],
            columnDefs: [{
                targets: 0,
                width: "5%",
            }, {
                targets: 2,
                orderable: false
            }]
        });

        $(".tambah").on("click", function(e) {
            $("#formModal").modal("show");
            $(".modal-title").text("Tambah Data");
            $("form").attr("action", `${BASE_URL}/kategori/tambah`);
            $("button[type=submit]").attr("id", "tambah");
        })
        $(".content").on("click", "#tambah", function(e) {
            e.preventDefault();
            $.ajax({
                type: $("form").attr("method"),
                url: $("form").attr("action"),
                dataType: "json",
                data: $("form").serialize(),
                success: function(response) {
                    responValidasi(['tambah'], ['kategori'], response);
                    if (response.sukses) {
                        $("#formModal").modal("hide");
                        table.ajax.reload()
                    }
                }
            });
        })
        $(".content").on("click", ".edit", function() {
            $("#formModal").modal("show");
            $(".modal-title").text("Edit Data");
            $("form").attr("action", `${BASE_URL}/kategori/ubah`);

            $("#kategori").val($(this).data("kategori"));
            $("button[type=submit]").attr("id", "ubah");
            $(".modal-footer").append('<input type="hidden" name="id" value="' + $(this).data("id") + '">');
        })
        $(".content").on("click", "#ubah", function(e) {
            e.preventDefault();
            $.ajax({
                type: $("form").attr("method"),
                url: $("form").attr("action"),
                dataType: "json",
                data: $("form").serialize(),
                success: function(response) {
                    responValidasi(['ubah'], ['kategori'], response);
                    if (response.sukses) {
                        $("#formModal").modal("hide");
                        table.ajax.reload()
                    }
                }
            });
        })
        $("#formModal").on("hide.bs.modal", function() {
            $("form")[0].reset();
            $("#kategori").removeClass("is-invalid");
            $("input[name=id]").remove();
        })
        $(".content").on("click", ".hapus", function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Konfirmasi!',
                cancelButtonText: 'Batal'
            }).then(result => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `${BASE_URL}/kategori/hapus`,
                        data: {
                            id: $(this).data("id")
                        },
                        success: function(response) {
                            table.ajax.reload()
                            if (response.status) {
                                toastr.success(response.pesan, 'Sukses')
                            } else {
                                toastr.error(response.pesan, 'Gagal')
                            }
                        }
                    });
                }
            })
        })
    });
</script>
<?php $this->endSection(); ?>