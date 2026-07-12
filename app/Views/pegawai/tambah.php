<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>

<body>

<header>
    <h2>Sistem CRUD Data Pegawai</h2>
</header>

<main>

    <h1>Tambah Data Pegawai</h1>

    <div class="form">

        <form action="<?= base_url('pegawai/simpan'); ?>" method="post">

            <div class="input">
                <label>Nama</label>
                <input type="text" name="nama" required>
            </div>

            <div class="input">
                <label>NIK</label>
                <input type="text" name="nik" required>
            </div>

            <div class="input">
                <label>Jabatan</label>
                <input type="text" name="jabatan" required>
            </div>

            <div class="input">
                <label>Alamat</label>
                <input type="text" name="alamat" required>
            </div>

            <div class="input">
                <label>Nomor Handphone</label>
                <input type="text" name="nomor_handphone" required>
            </div>

            <div class="input">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="button">
                <button type="submit">Simpan</button>
            </div>

        </form>

    </div>

</main>

</body>

</html>