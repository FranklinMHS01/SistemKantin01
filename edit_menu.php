<center>
    <?php

    include_once("config_kantin.php");

    if (isset($_POST['update'])) {
        $id = $_POST['id_menu'];

        $nama = $_POST['nama_menu'];
        $harga = $_POST['harga'];
        $jenis = $_POST['jenis'];

        $result = mysqli_query($mysqli, "UPDATE tb_menu SET nama_menu='$nama', harga='$harga',jenis='$jenis' WHERE id_menu='$id'");

        header("Location: menu.php");
    }
    ?>
    <?php

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM tb_menu WHERE id_menu=$id");

    while ($user_data = mysqli_fetch_array($result)) {
        $nama = $user_data['nama_menu'];
        $harga = $user_data['harga'];
        $jenis = $user_data['jenis'];
    }
    ?>
    <html>

    <head>
        <title>Edit User Data</title>
    </head>

    <body>
        <a href="index.php">Home</a>
        <br /><br />

        <form name="update_user" method="post" action="edit_menu.php">
            <table border="0">
                <tr>
                    <td>Nama Makanan</td>
                    <td><input type="text" name="nama_menu" value=<?php echo $nama; ?>></td>
                </tr>
                <tr>
                    <td>Harga Makanan</td>
                    <td><input type="number" name="harga" value=<?php echo $harga; ?>></td>
                </tr>
                <tr>
                    <td>Jenis Makanan</td>
                    <td><select name="jenis" id="">
                            <option value=<?php echo $jenis; ?>><?php echo $jenis; ?></option>
                            <option value="Makanan Berat">Makanan</option>
                            <option value="Makanan Ringan">Minuman</option>
                        </select>
                </tr>
                <tr>
                    <td><input type="hidden" name="id_menu" value=<?php echo $_GET['id']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>

    </html>
</center>