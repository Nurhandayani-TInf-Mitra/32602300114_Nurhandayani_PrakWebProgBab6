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
            <button type="button" class="btn-tambah">
                Tambah Pegawai
            </button>
        </a>
    </div>

    <table border="1" cellspacing="0">

        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th width="18%">Action</th>
            </tr>
        </thead>

        <tbody>

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

                        <td><?= esc($p['nama']); ?></td>

                        <td><?= esc($p['nik']); ?></td>

                        <td><?= esc($p['jabatan']); ?></td>

                        <td><?= esc($p['alamat']); ?></td>

                        <td><?= esc($p['nomor_handphone']); ?></td>

                        <td><?= esc($p['email']); ?></td>

                        <td>

                            <a href="<?= base_url('pegawai/edit/' . $p['id_pegawai']); ?>">
                                <button type="button" class="btn-update">
                                    Update
                                </button>
                            </a>

                            <a href="<?= base_url('pegawai/delete/' . $p['id_pegawai']); ?>"
                               onclick="return confirm('Apakah Anda yakin ingin menghapus data pegawai ini?');">

                                <button type="button" class="btn-delete">
                                    Delete
                                </button>

                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            <?php endif; ?>

        </tbody>

    </table>

</main>

</body>

</html>