<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>

<body>

<header>
    <h2>Sistem CRUD Data Pegawai Team 2</h2>
</header>

<main>

    <div class="title">
        <h1>Data Pegawai</h1>

        <a href="<?= base_url('pegawai/tambah'); ?>">
            <button class="btn-tambah">Tambah Pegawai</button>
        </a>
    </div>

    <div class="table">

        <table border="1" width="100%" cellspacing="0" cellpadding="10">

            <tr>
                <th width="5%">No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th width="15%">Action</th>
            </tr>

            <?php if (empty($pegawai)) : ?>

                <tr>
                    <td colspan="8" align="center">
                        Tidak ada data pegawai.
                    </td>
                </tr>

            <?php else : ?>

                <?php
                $no = 1;
                foreach ($pegawai as $p) :
                ?>

                    <tr>

                        <td align="center"><?= $no++; ?></td>

                        <td><?= $p['nama']; ?></td>

                        <td><?= $p['nik']; ?></td>

                        <td><?= $p['jabatan']; ?></td>

                        <td><?= $p['alamat']; ?></td>

                        <td><?= $p['nomor_handphone']; ?></td>

                        <td><?= $p['email']; ?></td>

                        <td align="center">

                            <button class="btn-edit">Update</button>

                            <button class="btn-delete">Delete</button>

                        </td>

                    </tr>

                <?php endforeach; ?>

            <?php endif; ?>

        </table>

    </div>

</main>

</body>

</html>