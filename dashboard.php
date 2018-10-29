<center>
	<h1 style="margin-top: 20px; margin-bottom: 20px">DASHBOARD</h1>
	<form method="POST">
		<input type="search" name="cari" placeholder="Search...">
		<input type="submit" name="send" value="Search"><br><br>
	</form>
</center>

<?php
	include 'koneksi.php';
	$sql = mysqli_query($conn, "SELECT * FROM t_ta8_data");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>TA 8</title>
</head>
<body>
	<center>
	<table class="table table-striped" border="1" cellpadding="5" cellspacing="3" style="width: 200px">
		<thead>
		    <tr>
		      <th scope="col">NAMA DEPAN</th>
		      <th scope="col">NAMA BELAKANG</th>
		      <th scope="col">NIM</th>
		      <th scope="col">KELAS</th>
		      <th scope="col">HOBI</th>
		      <th scope="col">GENRE FILM</th>
		      <th scope="col">TEMPAT WISATA</th>
		      <th scope="col">TANGGAL LAHIR</th>
		      <th scope="col">AKSI</th>
		    </tr>
		</thead>
		<?php
			if(isset($_POST['send'])) {
				$cari = $_POST['cari'];
				$query = mysqli_query($conn, "SELECT * FROM t_ta8_data WHERE nim LIKE '%".$cari."%'");
				echo"<tbody>";
				    echo"<tr>";
				      echo"<td>".$data['namadepan']."</td>";
				      echo"<td>".$data['namabelakang']."</td>";
				      echo"<td>".$data['nim']."</td>";
				      echo"<td>".$data['kelas']."</td>";
				      echo"<td>".$data['hobi']."</td>";
				      echo"<td>".$data['film']."</td>";
				      echo"<td>".$data['wisata']."</td>";
				      echo"<td>".$data['tgllahir']."</td>";
				      echo"<td><a href=delete.php?nim=".$data['nim']."> Hapus </a> || <a href=edit.php?nim=".$data['nim']."> Edit </a></td>";
			   		echo"</tr>";
			   	echo"</tbody>";
			} else {

				while ($data = mysqli_fetch_array($sql)) {
				echo"<tbody>";
				    echo"<tr>";
				      echo"<td>".$data['namadepan']."</td>";
				      echo"<td>".$data['namabelakang']."</td>";
				      echo"<td>".$data['nim']."</td>";
				      echo"<td>".$data['kelas']."</td>";
				      echo"<td>".$data['hobi']."</td>";
				      echo"<td>".$data['film']."</td>";
				      echo"<td>".$data['wisata']."</td>";
				      echo"<td>".$data['tgllahir']."</td>";
				      echo"<td><a href=delete.php?nim=".$data['nim']."> Hapus </a> || <a href=edit.php?nim=".$data['nim']."> Edit </a></td>";
			   		echo"</tr>";
			   	echo"</tbody>";
				}
			}
	   	?>
	</table>
	</center>
</body>
</html>