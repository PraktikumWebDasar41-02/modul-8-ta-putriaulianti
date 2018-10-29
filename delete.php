<?php
	$conn = mysqli_connect('localhost', 'root', '', 'db_ta8');
	$nim = $_GET['nim'];
	$query = mysqli_query($conn, "DELETE FROM t_ta8_data WHERE nim = '$nim'");
	if($query) {
		echo "Data Terhapus";
		header("Location:dashboard.php");
	}
?>
