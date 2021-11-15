<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NIS</th>
			<th>NAMA DEPAN</th>
			<th>NAMA BELAKANG</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>KELAMIN </th>
			<th>HOBBY</th>
			<th>ALAMAT</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($connect,"select * from daftar");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['nama_depan']; ?></td>
				<td><?php echo $d['nama_belakang']; ?></td>
				<td><?php echo $d['tempat_lahir']; ?></td>
				<td><?php echo $d['tanggal_lahir']; ?></td>
				<td><?php echo $d['kelamin']; ?></td>
				<td><?php echo $d['hobby']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['nis']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['nis']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>