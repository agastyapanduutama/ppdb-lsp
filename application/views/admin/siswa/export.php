<!DOCTYPE html>
<html>

<head>
    <title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Siswa.xls");
    ?>

    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Siswa</td>
                <td>Jurusan</td>
                <td>Agama</td>
                <td>NIK</td>
                <td>NISN</td>
                <td>No HP/WA</td>
                <td>Status</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Jenis Kelamin</td>
                <td>Asal Sekolah</td>
                <td>Nama Orang Tua / Wali</td>
                <td>Alamat</td>
                <td>Desa</td>
                <td>Kecamatan</td>
                <td>Kota</td>
                <td>Provinsi</td>
                <td>Nilai UN B.Indonesia</td>
                <td>Nilai UN B.Inggris</td>
                <td>Nilai UN Matematika</td>
                <td>Nilai UN IPA</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($isi as $sis) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $sis->nama_siswa ?></td>
                    <td><?= $sis->nama_jurusan ?></td>
                    <td><?= $sis->nama_agama ?></td>
                    <td><?= $sis->nik ?></td>
                    <td><?= $sis->nisn ?></td>
                    <td><?= $sis->no_hp ?></td>
                    <td>
                        <?php

                if ($sis->status == '1') {
                    echo  "<span style='color:green'>Diterima</span>";
                } elseif ($sis->status == '2') {
                    echo  "<span style='color:blue'>Cadangan</span>";
                } elseif ($sis->status == '3') {
                    echo  "Tidak Diterima";
                } else {
                    echo  "<span style='color:red'>Belum di Konfirmasi</span>";
                }
                
                ?>
                    <td><?= $sis->tempat_lahir ?></td>
                    <td><?= $sis->tanggal_lahir ?></td>
                    <td><?= $jk = ($sis->jk == '1') ? "Laki-Laki" : "Perempuan" ; ?></td>
                    <td><?= $sis->sekolah_asal ?></td>
                    <td><?= $sis->nama_ortu ?></td>
                    <td><?= $sis->alamat ?></td>
                    <td><?= $sis->desa ?></td>
                    <td><?= $sis->kecamatan ?></td>
                    <td><?= $sis->kota ?></td>
                    <td><?= $sis->provinsi ?></td>
                    <td><?= $sis->nilai_un_ind ?></td>
                    <td><?= $sis->nilai_un_ing  ?></td>
                    <td><?= $sis->nilai_un_mat  ?></td>
                    <td><?= $sis->nilai_un_ipa  ?></td>

                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>