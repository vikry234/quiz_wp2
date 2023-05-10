<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Siswa</title>
</head>
<body>
    <h1>Form Input Data Siswa</h1>
    <?php echo form_open('siswaController/simpanData'); ?>

    <label for="nama">Nama Siswa:</label>
    <input type="text" name="nama" required><br><br>

    <label for="nis">NIS:</label>
    <input type="text" name="nis" required><br><br>

    <label for="kelas">Kelas:</label>
    <input type="text" name="kelas" required><br><br>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required><br><br>

    <label for="tempat_lahir">Tempat Lahir:</label>
    <input type="text" name="tempat_lahir" required><br><br>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" required></textarea><br><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br><br>

    <label for="agama">Agama:</label>
    <select name ="agama" required>
	<option value="Islam">Islam</option>
	<option value="Kristen">Kristen</option>
	<option value="Katolik">Katolik</option>
	<option value="Budha">Budha</option>
	<option value="Hindu">Hindu</option>
	<option value="Protestan">Protestan</option>
	<option value="Khonghucu">Khonghucu</option>
	</select><br><br>

	<input type="submit" value="Simpan">
<?php echo form_close(); ?>

</body>
</html>