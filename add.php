<center>
<html>

<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>No_hp</td>
                <td><input type="number" name="handphone"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        $nama = $_POST['name'];
        $handphone = $_POST['handphone'];
        $alamat = $_POST['alamat'];

        include_once("config_kantin.php");

        $result = mysqli_query($mysqli, "INSERT INTO tb_penjual(id_penjual,nama,no_handphone,alamat) VALUES(null,'$nama',$handphone,'$alamat')");

        echo "<script>alert('Penjual Berhasil Ditambahkan');</script> <a href='index.php'>View Penjual</a>";
    }
    ?>
</body>

</html>
</center>