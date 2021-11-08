<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<h3 class="dajur">Data Jurusan</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>JURUSAN</th>
				<th>ANGKATAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include "koneksi.php";
			$qry_jurusan = mysqli_query($conn,"select * from jurusan");
			$no = 0;
			while ($data_jurusan = mysqli_fetch_array($qry_jurusan)) {
			$no++;?>
			<tr>
			<td><?=$no?></td><td><?=$data_jurusan['nama_jurusan']?></td> <td><?=$data_jurusan['angkatan']?></td>

			<td><a href="hapus_jurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Hapus</a></td>
			</tr>
			<?php 
			}
			?>
			</tbody>
	</table>

</body>
</html>