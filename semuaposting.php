<a href="view.php"> Halaman Awal </a> *
<a href="posting.php"> Posting </a> *
<a href="daftarposting.php"> Daftar Posting</a>*
<a href="semuaposting.php">Semua Posting</a>*
<a href="edit.php">Edit</a>
<br>
<br>
</table>
</header>
    <table width="70%" align="center" border=1 cellpadding="6" style="border-collapse: collapse;">
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
        </tr>
<?php 
    echo $i+1 . ".";
?>
            </td>
            <td><b><?php echo $row["judul"] ?></b></td>
            <td><?php echo implode(" ",array_slice(explode(" ",$row["isi"]), 0, 5)) . "..." ?></td>
            <td align="center"><img height="60px" width="100px" border="1" src="uploads/<?php echo $row['gambar'] ?>" alt=""></td>
        </tr>
        <tr>
            <td colspan="4" align="center">0 results.</td>
        </tr>
    
    </table>
</body>
</html>