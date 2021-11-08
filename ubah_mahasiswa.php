<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h3{
			text-align: center;
			background-color: aliceblue;
			padding: 5px;
			margin-top: -5px;
			width: 700px;
		}
		form{
			text-align: right;
			font-size: 20px;
			font-family: unset;
			width: 700px;
			background-color: ghostwhite;
			margin-top: -15px;
			padding: 5px;
		}
		.form-control{
			width: 400px;
			border-radius: 5px;
			margin-top: 10px;
			border: 0px;
			box-shadow: 4px 2px 2px;
		}
		.form-control:hover{
			background-color: ghostwhite;
		}
		.btn_btn-primary{
			margin-top: 20px;
			padding: 5px;
			border-radius: 5px;
			background-color: lightblue;
			border: 0px;
			box-shadow: 2px 2px 2px;
		}
		.btn_btn-primary:hover{
			background-color: aliceblue;
		}
	</style>
</head>
<body>
	<?php 
	include "koneksi.php";
	$qry_get_mahasiswa=mysqli_query($conn, "select * from mahasiswa where 
	id_mhs = '".$_GET['id_mhs']."'");
	$dt_mahasiswa=mysqli_fetch_array($qry_get_mahasiswa);
	?>
	<h3>Ubah Data</h3>
	<form action="proses_ubah_mahasiswa.php" method="post">
		<input type="hidden" name="id_mhs" value="<?=$dt_mahasiswa['id_mhs']?>"><br>
		Nama Mahasiswa :
		<input type="text" name="nama" value="<?=$dt_mahasiswa['nama']?>" class="form-control"><br>
		Tanggal Lahir :
		<input type="date" name="tanggal_lahir" value="<?=$dt_mahasiswa['tanggal_lahir']?>" class="form-control"><br>
		Jenis Kelamin :
		<?php 
		$arr_jenis_kelamin=array('L'=>'Laki-Laki','P'=>'Perempuan');
		?>
		<select name="jenis_kelamin" class="form-control">
			<option></option>
			<?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
				if ($key_jenis_kelamin==$dt_mahasiswa['jenis_kelamin']) {
					$selek="selected";
				}else {
					$selek="";
				}
			?>
			<option value="<?=$key_jenis_kelamin?>" <?=$selek?>><?=$val_jenis_kelamin?></option>
			<?php endforeach ?>
		</select><br>
		Alamat :
		<textarea name="alamat" class="form-control" rows="4"><?=$dt_mahasiswa['alamat']?></textarea><br>
		Jurusan :
		<select name="id_jurusan" class="form-control">
			<option></option>
			<?php 
			include "koneksi.php";
			$qry_jurusan=mysqli_query($conn, "select * from jurusan");
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
				if ($data_jurusan['id_jurusan']==$dt_mahasiswa['id_jurusan']) {
					$selek = "selected";
				} else {
					$selek="";
				}
				echo '<option value="'.$data_jurusan['id_jurusan'].'" '.$selek.'>'.$data_jurusan['nama_jurusan'].'</option>';
				}
			?>
		</select><br>
		Username :
		<input type="text" name="username" value="<?=$dt_mahasiswa['username']?>" class="form-control"><br>
		Password :
		<input type="password" name="password" value="" class="form-control"><br>
		<input type="submit" name="simpan" value="Ubah Data Mahasiswa" class="btn_btn-primary">
	</form>
</body>
</html>