<?php
include 'lihatData.php';

		$nim = $_POST['nim'];

		$delete = "DELETE FROM 'mahasiswa' WHERE nim = $nim";
		mysqli_query($con,$delete);

		header("location:inputMahasiswa.php");
?>