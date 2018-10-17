		<?php
		include 'inputMahasiswa.php';
		$sql = mysqli_query($con, "SELECT * FROM mahasiswa")
		?>

		<h3>Lihat Data Mahasiswa</h3><br>
		<table border="2" bgcolor="#EEA2AD">
		<tr bgcolor="#77D9D3">
			<td>No</td>
			<td>Nama</td>
			<td>NIM</td>
			<td>Aksi</td>
		</tr>

	<form action="" method="POST">
		<?php
		if(mysqli_num_rows($sql)>0){
			$no = 1;
			while($data = mysqli_fetch_array($sql)){
		?>
		<tr bgcolor="#77D9D3">
			<td><?php echo $no ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['nim']; ?></td>
			<td><a href="inputMahasiswa.php">Tambah Data Mahasiswa &nbsp|&nbsp</a>
            <a href="hapusData.php">Hapus &nbsp|&nbsp</a></td>
		</tr>
		<?php $no++; } ?>
 		<?php } ?>
		</tr>
	</table>
</form>

<form action="" method="POST">
	<body bgcolor="#A2ADEE">
		<center>
			<br><br>
	<table border="2" bgcolor="#EEA2AD" height="50px" width="50px">
		<tr bgcolor="#77D9D3">
			<td><input type="inputd" name="inputd" placeholder="Input Data"></td>
			<td><input type="nimnya" name="nimnya" placeholder="NIM"></td>
			<td><input type="Submit" name="cari" value="Cari" placeholder="Cari"></td>
		</tr>
	</table>
	<table>

		<?php
			if(isset($_POST['cari'])){
				$inputd = $_POST['inputd'];
				$nimnya = $data['nimnya'];
				$sql = mysqli_query($con, "SELECT nama, nim, jk, prodi, fakultas, asal, moto FROM mahasiswa");
			}

		if(mysqli_num_rows($sql)>0){
			$no = 1;
			while($data = mysqli_fetch_array($sql)){
		?>

		<table border="2">
			<tr>
				<td>Nama</td>
				<td>NIM</td>
				<td>Jenis Kelamin</td>
				<td>Prodi</td>
				<td>Fakultas</td>
				<td>Asal</td>
				<td>Moto</td>
			</tr>
			<tr>
				<td><?php echo $_POST['inputd']; ?></td>
				<td><?php echo $_POST['nimnya']; ?></td>
				<td><?php echo $data['jk']; ?></td>
				<td><?php echo $data['prodi']; ?></td>
				<td><?php echo $data['fakultas']; ?></td>
				<td><?php echo $data['asal']; ?></td>
				<td><?php echo $data['moto']; ?></td>
			</tr>
		</table>
</form>
		<?php } ?>
 		<?php } ?>