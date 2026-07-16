<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pegawai</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>

<body>

<header>
    <h2>Sistem CRUD Data Pegawai Team 2</h2>
</header>

<main>

<h1>Edit Data Pegawai</h1>

<form action="<?= base_url('pegawai/update'); ?>" method="post">

    <!-- id pegawai disembunyikan -->
    <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai']; ?>">

    <div class="form-group">
        <label>Nama</label>
        <input
            type="text"
            name="nama"
            value="<?= $pegawai['nama']; ?>"
            required>
    </div>

    <div class="form-group">
        <label>NIK</label>
        <input
            type="text"
            name="nik"
            value="<?= $pegawai['nik']; ?>"
            required>
    </div>

    <div class="form-group">
        <label>Jabatan</label>
        <input
            type="text"
            name="jabatan"
            value="<?= $pegawai['jabatan']; ?>"
            required>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input
            type="text"
            name="alamat"
            value="<?= $pegawai['alamat']; ?>"
            required>
    </div>

    <div class="form-group">
        <label>No HP</label>
        <input
            type="text"
            name="nomor_handphone"
            value="<?= $pegawai['nomor_handphone']; ?>"
            required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input
            type="email"
            name="email"
            value="<?= $pegawai['email']; ?>"
            required>
    </div>

    <button type="submit">Update Data</button>

</form>

</main>

</body>
</html>