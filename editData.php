<?php
		include 'lihatData.php'
?>

<?php

	if(isset($_POST['edit'])){
	$inputd = $_POST['inputd'];
	$nimnya = $_POST['nimnya'];
	$name = $_POST['name'];
	$nime = $_POST['nime'];
	$sql = mysqli_query($con, "SELECT nama, nim, jk, prodi, fakultas, asal, moto FROM mahasiswa");
			}

	$reteks = str_replace("$inputd", "$name", $inputd);
	$reteks = str_replace("$nim", "$nime", $nim);

	echo $reteks;

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
				<td><?php echo $_POST['name']; ?></td>
				<td><?php echo $_POST['nime']; ?></td>
				<td><?php echo $data['jk']; ?></td>
				<td><?php echo $data['prodi']; ?></td>
				<td><?php echo $data['fakultas']; ?></td>
				<td><?php echo $data['asal']; ?></td>
				<td><?php echo $data['moto']; ?></td>
			</tr>
		</table>

		<?php } ?>
 		<?php } ?>

<form action="" method="POST">
	<center>
		<br><br><br><br><br><br><br><br>
		<table>
			<tr>
				<td>Edit Nama 	:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Edit NIM 	:</td>
				<td><input type="text" name="nime"></td>
			</tr>
			<tr>
				<td><input type="Submit" name="edit" value="Edit"></td>
			</tr>
		</table>
	</form>