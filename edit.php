<center>
    <?php
    include_once("config_kantin.php");

    if (isset($_POST['update'])) {
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $handphone = $_POST["handphone"];
        $alamat = $_POST["alamat"];

        $result = mysqli_query($mysqli, "UPDATE tb_penjual SET nama = '$nama', no_handphone = $handphone, alamat = '$alamat' WHERE id_penjual = '$id'");

        echo "<script>alert('Data Penjual Berhasil Diupdate'); window.location.href='index.php'</script>";
    }
    ?>

    <?php
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM tb_penjual WHERE id_penjual=$id");

    while ($user_data = mysqli_fetch_array($result)) {
        $nama = $user_data['nama'];
        $handphone = $user_data['no_handphone'];
        $alamat = $user_data['alamat'];
    }
    ?>

    <html>

    <head>
        <title>Edit User Data</title>
    </head>

    <body>
        <a href="index.php">Home</a>
        <br /><br />

        <form name="update_user" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
                </tr>
                <tr>
                    <td>No_HP</td>
                    <td><input type="text" name="handphone" value=<?php echo $handphone; ?>></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>

    </html>
</center>