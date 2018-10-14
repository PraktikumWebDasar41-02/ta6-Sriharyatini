<?php
    session_start();
        $konek = mysqli_connect('localhost', 'root','', 'datbes');
?>

<a href="view.php"> Halaman Awal </a> *
<a href="posting.php"> Posting </a> *
<a href="daftarposting.php"> Daftar Posting</a>*
<a href="semuaposting.php">Semua Posting</a>*
<a href="edit.php">Edit</a>
<br>
<br>
<table  border=1 cellpadding="4">
        <tr>
            <td>Cerita</td>
            <td>Gambar</td>
            <td>Button</td>
        </tr>
    <?php 
    if (mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result)) {       
    ?>
        <tr>
            <td><b><?php echo $row["Cerita"] ?></b></td>
            <td align="center"><img height="60px" width="100px" border="1" src="uploads/<?php echo $row['gambar'] ?>" alt=""></td>
            <?php $id = $row["nim"] ?>
            <td>
                <a href="posting_update.php?post_id=<?php echo $id ?>">Edit</a> | 
                <a href="delete.php?post_id=<?php echo $id ?>">Delete</a>
            </td>
        </tr>
    <?php 
        }
    }
    ?>
    </table>
</body>
</html>