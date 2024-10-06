<script src="<?= base_url('assets/js/app.js') ?>"></script>
<script src="<?= base_url('assets/js/pages/dashboard.js') ?>"></script>
<script src="<?= base_url('assets/js/extensions/datatables.js') ?>"></script>

<script src="<?= base_url('assets/js/extensions/summernote.js') ?>"></script>

<script src="<?= base_url('assets/js/extensions/filepond.js') ?>"></script>

<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?= base_url('plugins/select2/js/select2.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js') ?>"></script>

<!-- SweetAlert2 -->
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<!-- Toastr -->
<script src="<?= base_url('plugins/toastr/toastr.min.js') ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
<script src="<?= base_url('js/script.js') ?>"></script>


<?php $session     = \Config\Services::session(); ?>
<script>
</script>
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
</script>