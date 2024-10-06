<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Edit Knowledge</h3>
        <p class="text-subtitle text-muted">Form untuk melakukan editing knowledge</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Knowledge</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section id="multiple-column-form">
    <div class="row match-height">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Form Edit Knowledge</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <form action="<?= base_url('berita/edit/' . $berita['id_berita']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <?= csrf_field();
                ?>
                <div class="row">
                  <div class="col-md-8 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Judul Knowledge</label>
                      <input type="text" name="judul_berita" class="form-control" value="<?= $berita['judul_berita'] ?>" required>
                    </div>
                  </div>
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Status publikasi</label>
                      <!-- Jika Admin dan SuperAdmin -->
                      <?php if (esc(get_user('id_role') == 1 || get_user('id_role') == 2)) : ?>
                        <select name="status_berita" class="form-control">
                          <option value="Utama" <?php if ($berita['status_berita'] == 'Utama') echo "selected"; ?>>Utama</option>
                          <option value="Publish" <?php if ($berita['status_berita'] == 'Publish') echo "selected"; ?>>Publish</option>
                          <option value="Draft" <?php if ($berita['status_berita'] == 'Draft') echo "selected"; ?>>Draft</option>
                        </select>
                      <?php endif ?>
                      <!-- Jika Admin -->
                      <!-- <?php if (esc(get_user('id_role') == 2)) : ?>
                        <select name="status_berita" class="form-control">
                          <option value="Publish">Publish</option>
                          <option value="Draft">Draft</option>
                        </select>
                      <?php endif ?> -->
                      <!-- Jika User -->
                      <?php if (esc(get_user('id_role') == 3)) : ?>
                        <select name="status_berita" class="form-control">
                          <option value="Draft">Draft</option>
                        </select>
                      <?php endif ?>
                    </div>
                  </div>
                  <div class="col-md-12 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Thumbnail Knowledge</label>
                      <input type="file" name="gambar" id="gambar" class="form-control" value="<?= $berita['gambar'] ?>">
                      <small class="text-danger">Kosongkan jika tidak ingin di ganti!</small>
                      <div class="col-sm-2 d-none">
                        <img class="img-thumbnail" id="img-preview">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Ringkasan</label>
                      <textarea name="ringkasan" class="form-control"><?= $berita['ringkasan'] ?></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Kategori Knowledge</label>
                      <select name="id_kategori" class="form-control">
                        <?php foreach ($kategori as $kategori) { ?>
                          <option value="<?= $kategori['id'] ?>" <?php if ($berita['id_kategori'] === $kategori['id']) {
                                                                    echo 'selected';
                                                                  } ?>>
                            <?= $kategori['nama_kategori'] ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                    <small class="invalid-feedback"></small>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Isi Knowledge</label>
                      <textarea name="isi" class="form-control summernote"><?= $berita['isi'] ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <label class="col-md-2">Tanggal dan jam Publikasi</label>
                      <div class="col-md-4">
                        <input type="text" name="tanggal_publish" class="form-control tanggal" value="<?php if (isset($_POST['tanggal_publis'])) {
                                                                                                        echo set_value('tanggal_publish');
                                                                                                      } else {
                                                                                                        echo date('d-m-Y');
                                                                                                      } ?>" readonly>
                        <small class="text-secondary">Format <strong>dd-mm-yyyy</strong>. Misal: <?= date('d-m-Y') ?></small>
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="jam" class="form-control jam" value="<?php if (isset($_POST['jam'])) {
                                                                                        echo set_value('jam');
                                                                                      } else {
                                                                                        echo date('H:i:s');
                                                                                      } ?>" readonly>
                        <small class="text-secondary">Format <strong>HH:MM:SS</strong>. Misal: <?= date('H:i:s') ?></small>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-2">Keyword Knowledge (untuk SEO Google)</label>
                        <div class="col-md-10">
                          <textarea name="keywords" class="form-control"><?= $berita['keywords'] ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 d-flex justify-content-end my-3">
                    <!-- Kirim nanti kasih konfirmasi, karna kalo udah dikirim gabisa diedit -->
                    <button type="submit" class="btn btn-primary me-1 mb-1 me-2">Kirim</button>
                    <!-- Batalnya nanti kasih konfirmasi, supaya ga asal kepencet -->

                    <?php if (esc(get_user('id_role') == 1 || get_user('id_role') == 3)) : ?>
                      <a href="<?= base_url('berita') ?>" type="button" class="btn btn-light-secondary me-1 mb-1">Batal</a>
                    <?php endif ?>

                    <?php if (esc(get_user('id_role') == 2)) : ?>
                      <a href="<?= base_url('berita/disetujui') ?>" type="button" class="btn btn-light-secondary me-1 mb-1">Batal</a>
                    <?php endif ?>

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?= form_close(); ?>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('js/dashboard.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('js/dashboard.js') ?>"></script>
<script>
  $(document).ready(function() {
    $('.summernote').summernote({
      callbacks: {
        onImageUpload: function(files) {
          for (let i = 0; i < files.length; i++) {
            $.upload(files[i]);
          }
        },
        onMediaDelete: function(target) {
          $.delete(target[0].src);
        }
      },
      height: 200,
      toolbar: [
        ['style', ['style']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ["style", ["bold", "italic", "underline", "clear"]],
        ["fontname", ["fontname"]],
        ["fontsize", ["fontsize"]],
        ['table', ['table']]
        ["color", ["color"]],
        ["para", ["ul", "ol", "paragraph"]],
        ["height", ["height"]],
        ["insert", ["link", "picture", "imageList", "video", "hr"]],

      ],
      dialogsInBody: true,
      imageList: {
        endpoint: "<?= site_url('berita/listGambar') ?>",
        fullUrlPrefix: "<?php echo base_url('uploads/berkas') ?>/",
        thumbUrlPrefix: "<?php echo base_url('uploads/berkas') ?>/"
      }
    });

    $.upload = function(file) {
      let out = new FormData();
      out.append('file', file, file.name);
      $.ajax({
        method: 'POST',
        url: '<?= site_url('berita/uploadGambar') ?>',
        contentType: false,
        cache: false,
        processData: false,
        data: out,
        success: function(img) {
          $('.summernote').summernote('insertImage', img);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error(textStatus + " " + errorThrown);
        }
      });
    };
    $.delete = function(src) {
      $.ajax({
        method: 'POST',
        url: '<?= site_url('berita/deleteGambar') ?>',
        cache: false,
        data: {
          src: src
        },
        success: function(response) {
          console.log(response);
        }

      });
    };
  });

  function konfirmasi(url) {
    var result = confirm("Want to delete?");
    if (result) {
      window.location.href = url;
    }
  }
</script>

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

<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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

<script>
  $("#gambar").on("change", function(e) {
    let src = URL.createObjectURL(e.target.files[0]);
    $("#img-preview").prop("src", src).parent().removeClass("d-none")
  })
  $(document).ready(function() {
    $('input.jam').timepicker({
      timeFormat: 'HH:mm:ss',
      // year, month, day and seconds are not important
      minTime: new Date(0, 0, 0, 8, 0, 0),
      maxTime: new Date(0, 0, 0, 15, 0, 0),
      // time entries start being generated at 6AM but the plugin
      // shows only those within the [minTime, maxTime] interval
      startHour: 6,
      // the value of the first item in the dropdown, when the input
      // field is empty. This overrides the startHour and startMinute
      // options
      startTime: new Date(0, 0, 0, 8, 20, 0),
      // items in the dropdown are separated by at interval minutes
      interval: 10
    });
  });
</script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/admin/dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>/assets/admin/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "responsive": true,
      "paging": true,
      "lengthMenu": [
        [100, 250, 500, -1],
        [100, 250, 500, "All"]
      ],
      "lengthChange": true,
      "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $(function() {
    // Summernote
    $('.summernote').summernote({
      height: 100, // set editor height
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
    })
  })
  // tanggal dan select
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function() {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() {
      myDropzone.enqueueFile(file)
    }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

<?= $this->endSection(); ?>




<div class="col-md-2">
  <input type="text" name="icon" class="form-control" value="<?= set_value('icon') ?>">
  <small class="text-secondary">Icon <a href="https://fontawesome.com/icons" target="_blank">Fontawsome</a></small>
</div>
</div>