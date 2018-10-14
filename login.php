

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form>
		<h3> LOGIN </h3>
		Username : <input type="text" name="user">
		<br><br>
		Password: <input type="password" name="password">
		<br><br>		
		<input type="submit" name="send" value="login">
	</form>

</body>
</html>
<?php
session_start();
	$konek = mysqli_connect('localhost', 'root','', 'datbes');
	if (isset($_POST['send'])) {
		$username=$_POST['user'];
		$password=$_POST['password'];
		$sql = mysqli_query("SELECT * FROM ta6 where username='Username' and password='password'");
		header("Location: view.php");
	}


?>

<br><a href="form.php"> Belum Punya Akun</a>