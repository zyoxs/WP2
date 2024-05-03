<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>D Lemas</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/siswa.css'); ?>"">
</head>
<body>
  <div class="container">
    <div class="siswa">
      <h1 style="text-align: center;">form</h1>
      <center>
        <img src="<?= base_url('assets/images/talk.jpg');?>" width="500px" height="300px" alt="gambar">
      </center>
      <h3>Nama          : <?= $nama; ?> </h3>
      <h3>NIS           : <?= $nis; ?> </h3>
      <h3>Kelas         : <?= $kelas; ?> </h3>
      <h3>Tanggal Lahir : <?= $tanggal; ?> </h3>
      <h3>Alamat        : <?= $alamat; ?> </h3>
      <h3>Jenis Kelamin : <?= $gender; ?> </h3>
      <h3>Agama         : <?= $agama; ?> </h3>
      <a href="<?= base_url('siswa') ?>" style="color: white; text-decoration: none; width: 80px; height: 30px; background-color: black; text-align: center; line-height: 30px; border-radius: 10px">Kembali</a>
    </div>
  </div>
</body>
</html>