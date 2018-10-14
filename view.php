<a href="view.php"> Halaman Awal </a> *
<a href="posting.php"> Posting </a> *
<a href="daftarposting.php"> Daftar Posting</a>*
<a href="semuaposting.php">Semua Posting</a>*
<a href="edit.php">Edit</a>
<br>
<br>

<?php
	session_start();
	$konek = mysqli_connect('localhost','root','','datbes');
	$sql = "SELECT * FROM ta6";
	$query = mysqli_query($konek, $sql);
	$view = mysqli_fetch_array($query);

	echo "Nama :".$view['Nama']."<br><br>";
	echo "NIM :".$view['NIM']."<br><br>";
	echo "Kelas :".$view['Kelas']."<br><br>";
	echo "Jenis_Kelamin :".$view['Jenis_Kelamin']."<br><br>";
	echo "Hobbi :".$view['Hobbi']."<br><br>";
	echo "Fakultas :".$view['Fakultas']."<br><br>";
	echo "Alamat :".$view['Alamat']."<br><br>";

	
		session_destroy();

?>