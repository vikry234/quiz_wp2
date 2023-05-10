<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa Berhasil Disimpan</title>
</head>
<body>
    <h1>Data Siswa Berhasil Disimpan</h1>
    <p>Nama Siswa: <?php echo $nama; ?></p>
    <p>NIS: <?php echo $nis; ?></p>
    <p>Kelas: <?php echo $kelas; ?></p>
    <p>Tanggal Lahir: <?php echo $tanggal_lahir; ?></p>
    <p>Tempat Lahir: <?php echo $tempat_lahir; ?></p>
    <p>Alamat: <?php echo $alamat; ?></p>
    <p>Jenis Kelamin: <?php echo $jenis_kelamin; ?></p>
    <p>Agama: <?php echo $agama; ?></p>

    <a href="<?php echo base_url('index.php/siswaController'); ?>"><td colspan="3"><button type="submit">Kembali Ke Form Input</button></td></a>

</body>
</html>
