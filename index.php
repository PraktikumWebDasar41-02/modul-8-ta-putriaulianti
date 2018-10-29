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
        <h1 style="margin-top: 20px; margin-bottom: 20px">INDEX LOGIN</h1>
        <form method="POST">
            <div class="form-group" style="width: 300px">
                <label for="exampleInputEmail1">Username</label>
                <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
            </div>
            <div class="form-group" style="width: 300px;">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="card-body" style="margin-top: -20px">
                <a href="register.php" class="card-link">Create User</a>
            </div>
            <div class="form-group" >
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
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

<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
    session_start();
    $query = mysqli_query($conn,"SELECT * FROM t_ta8_user");
    while ($sql = mysqli_fetch_array($query)) {
        if ($sql['username']==$_POST['username']&&$sql['password']==$_POST['password']) {
            $_SESSION['username'] = $sql['username'];
            $_SESSION['id'] = $sql['id'];
            header("Location:dashboard.php");
        }
    }
}
?>