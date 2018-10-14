<a href="view.php"> Halaman Awal </a> *
<a href="posting.php"> Posting </a> *
<a href="daftarposting.php"> Daftar Posting</a>*
<a href="semuaposting.php">Semua Posting</a>*
<a href="edit.php">Edit</a>
<br>
<br>
<?php
	session_start();
		$konek = mysqli_connect('localhost', 'root','', 'datbes');
		//$nim = $_SESSION['nim'];
		//$sql=mysqli_query($konek, "SELECT * FROM ta6 WHERE NIM='$nim'");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 6</title>
</head>
<body>
	<h4>Registrasi</h4>
	<form action="" method="POST">
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
		<input type="submit" name="edit" value="Edit">
</form>
</body>
</html>
<?php
if (isset($_POST['edit'])) {
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
		$sql = "UPDATE ta6 set nm='$nama', nim='$nim', kls='$kelas', jk='$jeniskelamin', hb='$hobbi', fk='$fakultas', alt='$alamat' WHERE nim='$nim''";
		echo "BERHASIL TEREDIT";
		header("Location: view.php");
	}


?>