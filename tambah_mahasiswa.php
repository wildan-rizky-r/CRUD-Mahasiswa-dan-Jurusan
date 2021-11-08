<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<h3 class="tdm">Tambah Data Mahasiswa</h3>
	<form action="proses_tambah_mahasiswa.php" method="post" class="frm_tdm">
		Nama Mahasiswa : 
		<input type="text" name="nama" value="" class="form-control"><br>
		Tanggal Lahir :
		<input type="date" name="tanggal_lahir" value="" class="form-control"><br>
		Jenis Kelamin :
		<select name="jenis_kelamin" class="form-control">
			<option></option>
			<option value="L">Laki-Laki</option>
			<option value="P">Perempuan</option>
		</select><br>
		Alamat :
		<textarea name="alamat" class="form-control" rows="4"></textarea><br>
		Username :
		<input type="text" name="username" value="" class="form-control"><br>
		Password :
		<input type="password" name="password" value="" class="form-control"><br>
		Jurusan : 
		<select name="id_jurusan" class="form-control">
			<option></option>
			<?php 
			include "koneksi.php";
			$qry_jurusan=mysqli_query($conn,"select * from jurusan");
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
				echo '<option value="'.$data_jurusan['id_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';
			}
			?>
		</select><br>
		<input type="submit" name="simpan" value="Tambah Data" class="btn_btn-primary">
	</form>
</body>
</html>