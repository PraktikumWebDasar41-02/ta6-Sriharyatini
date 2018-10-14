<a href="view.php"> Halaman Awal </a> *
<a href="posting.php"> Posting </a> *
<a href="daftarposting.php"> Daftar Posting</a>*
<a href="semuaposting.php">Semua Posting</a>*
<a href="edit.php">Edit</a>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tulis Cerita</title>
</head>
<body>
    <h2>Tulis Cerita</h2>
    <form  method="post" enctype="multipart/form-data">
        <table cellpadding="8">
            <tr>
                <td><h3 style="margin: 0" >Cerita</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td><input type="file" name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td><cite>SILAHKAN ISI CERITA ANDA</cite></td>
            </tr>
            <tr>
                <td><textarea name="isi" id="" cols="80" rows="20"></textarea></td>
            </tr>
            <tr>
                <input type="hidden" name="nim" value="<?php echo $_SESSION["user_nim"] ?>">
                <td><input type="submit" name="send" value="Posting"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php 
 $konek = mysqli_connect('localhost', 'root','', 'datbes');
    if (isset($POST['send'])) {
        $story =md5($_POST['judul']);  
        $foto = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $dir_foto = "upload/";
        $target_foto = $dir_foto . $foto;
        $query = ("INSERT INTO story VALUES ('$story',  '$foto')");
        header("Location: daftarposting.php");
 
    }
?>