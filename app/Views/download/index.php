<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Table File Dokumen</h3>
        <p class="text-subtitle text-muted">List Table dokumen yang akan tampil pada halaman download.</p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dokumen</li>
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
            <h4 class="card-title">Table File Dokumen</h4>
            <p class="text-subtitle text-muted">
              List Table dokumen yang akan tampil pada haalaman download.
            </p>
          </div>
          <div class="col-md-4">
            <div class="justify-content-end d-flex">
              <?php if (esc(get_user('id_role') == 1 || get_user('id_role') == 2)) : ?>
                <a href="<?= base_url('download/tambah') ?>" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Dokumen Baru</a>
              <?php endif ?>
            </div>
          </div>
        </div>
        <hr>
        <table class="table table-bordered" id="example1">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th width="10%">File</th>
              <th width="30%">Judul</th>
              <th width="15%">Kategori</th>
              <th width="15%">Jenis</th>
              <th width="15%">Author</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;

            foreach ($download as $download) { ?>
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
                  <small>
                    <br><i class="fa fa-link"></i> <?= $download['website'] ?>
                  </small>
                </td>
                <td><?= $download['nama_kategori_download'] ?></td>
                <td><?= $download['jenis_download'] ?></td>
                <td><?= $download['nama'] ?></td>
                <td>

                  <a href="<?= base_url('download/edit/' . $download['id_download']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="<?= base_url('download/delete/' . $download['id_download']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php $no++;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('js/dashboard.js') ?>"></script>
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
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
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