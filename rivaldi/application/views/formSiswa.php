<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>form</title>
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
</head>
<body>
	<div class="form">
		<form action="<?= base_url('siswa/cetak') ?>" method="post" class="form_siswa">
			<h1>form</h1>
			<label for="nama">Nama Siswa : </label>
			<input type="text" name="nama" id="nama" required>
			<label for="nis">NIS : </label>
			<input type="text" name="nis" id="nis" required>
			<label for="kelas">Kelas : </label>
			<input type="text" name="kelas" id="kelas" required>
			<label for="tanggal">Tanggal Lahir : </label>
			<input type="date" name="tanggal" id="tanggal" required>
			<label for="alamat">Alamat : </label>
			<textarea name="alamat" id="alamat" cols="30" rows="5" required></textarea>
			<label for="gender">Jenis Kelamin : </label>
			<div class="gender">
				<input type="radio" name="gender" id="gender_laki" value="Laki-laki"> Laki-laki
				<input type="radio" name="gender" id="gender_perempuan" value="Perempuan"> Perempuan
			</div>
			<div class="options">
				<label for="agama">Agama : </label>
				<select name="agama" id="agama">
					<option value="islam">Islam</option>
					<option value="kristen">Kristen</option>
					<option value="katolik">Katolik</option>
					<option value="protestan">Protestan</option>
					<option value="buddha">Buddha</option>
					<option value="hindu">Hindu</option>
					<option value="khonghucu">Khonghucu</option>
				</select>
			</div>
			<input type="submit" value="submit">
		</form>
	</div>
</body>
</html>