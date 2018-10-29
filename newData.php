<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<center>
	<h1 style="margin-top:20px; margin-bottom:30px; margin-left: 50px">INPUT DATA</h1>
	<form method="POST" action="">
		<div class="form-group row" style="width: 400px">
		  	<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Depan</label>
		  	<div class="col-sm-10">
		  		<input type="text" class="form-control" id="inputEmail3" name="namadepan" placeholder="First Name">
		    </div>
		</div>
		<div class="form-group row" style="width: 400px">
		  	<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Belakang</label>
		  	<div class="col-sm-10">
		  		<input type="text" class="form-control" id="inputEmail3" name="namabelakang" placeholder="Last Name">
		    </div>
		</div>
		<div class="form-group row" style="width: 400px">
		  	<label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
		  	<div class="col-sm-10">
		  		<input type="text" class="form-control" id="inputEmail3" name="nim" placeholder="NIM">
		    </div>
		</div>
		<div class="form-group row" style="width: 400px">
		  	<label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
		  	<div class="col-sm-10">
		  		<input type="text" class="form-control" id="inputEmail3" name="kelas" placeholder="Class">
		    </div>
		</div>
		<div class="form-group row" style="width: 400px">
		  	<label for="inputEmail3" class="col-sm-2 col-form-label">Hobi</label>
		  	<div class="col-sm-10">
		  		<input type="text" class="form-control" id="inputEmail3" name="hobi" placeholder="Hobby">
		    </div>
		</div>
		<div class="form-group row" style="width: 400px">
			<div class="col-sm-2">Genre film</div>
			<div class="col-sm-10">
				<div class="form-check" align="left">
					<input class="form-check-input" type="checkbox" id="gridCheck1" name="film[]" value="Horor">
					<label class="form-check-label" for="gridCheck1">Horor</label><br>
					
					<input class="form-check-input" type="checkbox" id="gridCheck1" name="film[]" value="Anime">
					<label class="form-check-label" for="gridCheck1">Anime</label><br>
					
					<input class="form-check-input" type="checkbox" id="gridCheck1" name="film[]" value="Action">
					<label class="form-check-label" for="gridCheck1">Action</label><br>
					
					<input class="form-check-input" type="checkbox" id="gridCheck1" name="film[]" value="Drama">
					<label class="form-check-label" for="gridCheck1">Drama</label><br>
				</div>
			</div>
		</div>
		<div class="form-group row" style="width: 400px">
			<div class="col-sm-2">Tempat Wisata</div>
			<div class="col-sm-10">
				<div class="form-check" align="left">
					<input class="form-check-input" type="checkbox" id="gridCheck1" name="wisata[]" value="Bali">
					<label class="form-check-label" for="gridCheck1">Bali</label><br>
					
					<input class="form-check-input" type="checkbox" id="gridCheck1" name="wisata[]" value="Tanjung Selor">
					<label class="form-check-label" for="gridCheck1">Tanjung Selor</label><br>
					
					<input class="form-check-input" type="checkbox" id="gridCheck1" name="wisata[]" value="Jakarta">
					<label class="form-check-label" for="gridCheck1">Jakarta</label><br>
					
					<input class="form-check-input" type="checkbox" id="gridCheck1" name="wisata[]" value="Lombok">
					<label class="form-check-label" for="gridCheck1">Lombok</label><br>
				</div>
			</div>
		</div>
		<div class="form-group row" style="width: 400px; margin-left: 70px">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary" name="save">Simpan</button>
			</div>
		</div>
		<div class="card-body" style="width: 400px; margin-left: 20px">
			<a href="dashboard.php" class="card-link">Dashboard</a>
		</div>
	</form>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </center>
</body>
</html>