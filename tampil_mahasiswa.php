<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<h3 class="tm">Data Mahasiswa</h3>
	<table class="table table-hover table-striped">
		<thead class="thm">
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>TANGGAL LAHIR</th>
				<th>JENIS KELAMIN</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>JURUSAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($conn,"select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
			$no=0;
			while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)) {
				$no++;?>
				<tr>
					<td><?=$no?></td>
					<td><?=$data_mahasiswa['nama']?></td>
					<td><?=$data_mahasiswa['tanggal_lahir']?></td>
					<td><?=$data_mahasiswa['jenis_kelamin']?></td>
					<td><?=$data_mahasiswa['alamat']?></td>
					<td><?=$data_mahasiswa['username']?></td>
					<td><?=$data_mahasiswa['nama_jurusan']?></td>
					<td><a href="ubah_mahasiswa.php?id_mhs=<?=$data_mahasiswa['id_mhs']?>" class="btn_btn-success">Ubah</a> | <a href="hapus_mahasiswa.php?id_mhs=<?=$data_mahasiswa['id_mhs']?>" onclick="return confirm('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Hapus</a> </td>
				</tr>
				<?php 
				}
				?>
		</tbody>
	</table>
</body>
</html>