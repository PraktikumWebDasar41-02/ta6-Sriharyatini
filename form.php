<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 6</title>
</head>
<body>
	<h4>Registrasi</h4>
	<form action="" method="POST">
		Username :<input type="text" name="un"><br><br>
		Password :<input type="password" name="password"><br><br>
		Nama :<input type="text" name="nm"><br><br>
		NIM : <input type="text" name="nim"><br><br>
		Kelas : <br>
			<input type="Radio" name="kls" value="D3MI41-01">D3MI41-01<br>
			<input type="Radio" name="kls" value="D3MI41-02">D3MI41-02<br>
			<input type="Radio" name="kls" value="D3MI41-03">D3MI41-03<br>
			<input type="Radio" name="kls" value="D3MI41-04">D3MI41-04<br>
		<br>
		Jenis Kelamin : <br>
			<input type="Radio" name="jk" value="Perempuan">Perempuan<br>
			<input type="Radio" name="jk" value="Laki-Laki">Laki-Laki<br>
		<br>
		Hobby :<br>
			<input type="checkbox" name="hb" value="Berenang">Berenang<br>
			<input type="checkbox" name="hb" value="Bermain">Bermain<br>
			<input type="checkbox" name="hb" value="Selancar">Selancar<br>
			<input type="checkbox" name="hb" value="Bersepeda">Bersepeda<br><br>
		Fakultas : 
		<select name="fk" required="">
			<option value="FIT">FIT</option>
			<option value="FKB">FKB</option>
			<option value="FEB">FEB</option>
			<option value="INFORMATIKA">INFORMATIKA</option>
			<option value="FIF">FIF</option>
			<option value="FIK">FIK</option>

		</select>
		<br><br>
		Alamat : <textarea name="alt"></textarea><br><br>
		<input type="submit" name="send" value="kirim">
</form>
</body>
</html>
<?php
if (isset($_POST['send'])) {
		$username=($_POST['un']);
		$password=($_POST['password']);
 		if (strlen($_POST['nm'])>35|| $_POST['nm']=="") {
			echo "NAMANYA TIDAK BOLEH LEBIH DARI 35 HURUF<br>";
		} else {
			$nama = $_POST['nm'];
		}
 		$nim=($_POST['nim']);
 		$kelas=($_POST['kls']);  
 		$jeniskelamin=($_POST['jk']);  
 		$hobbi=($_POST['hb']);  
 		$fakultas=($_POST['fk']);  
 		$alamat=($_POST['alt']);    
 		
		$konek = mysqli_connect('localhost', 'root','', 'datbes');
		$sql = "INSERT INTO ta6 VALUES ('$username','$password',$nama','$nim', '$kelas','$jeniskelamin','$hobbi','$fakultas','$alamat'";
		mysqli_query($konek,$sql);
		header("Location: login.php");
	}
?>