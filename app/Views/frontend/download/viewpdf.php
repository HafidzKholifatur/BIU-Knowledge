<h1>ini view pdf</h1>

<p><?= $file['judul_download']; ?></p>
<p><?= $file['gambar']; ?></p>

<p>An iframe with default borders:</p>
<object data="">
    <iframe src="<?= base_url('asset/upload/file' . $file['gambar']); ?>" width="100%" height="600">
    </iframe>
</object>