<center>
    <?php

    include_once("config_kantin.php");

    if (isset($_POST['update'])) {
        $id = $_POST['id_menu'];

        $nama = $_POST['nama_menu'];
        $harga = $_POST['harga'];
        $jenis = $_POST['jenis'];

        $result = mysqli_query($mysqli, "UPDATE tb_menu SET nama_menu='$nama', harga='$harga',jenis='$jenis' WHERE id_menu='$id'");

        echo "<script>alert('Menu Berhasil Ditambahkan'); window.location.href = 'menu.php'</script> ";
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
        <style>
            .body {
                width: 50%;
                border: 1px solid black;
                margin-top: 100px;
            }

            .link {
                background-color: white;
                border: 1px solid black;
                border-radius: 10px;
                margin: 10px 0 10px 0;
            }

            .link :hover {
                background-color: black;
                color: white;
                border-radius: 10px;
                transition: 0.6s;
            }

            .link a {
                text-decoration: none;
                color: black;
                font-size: 30px;
            }

            .button {
                background-color: black;
            }

            .submit {
                background-color: blue;
                color: white;
                border: none;
                border-radius: 10px;
                margin-top: 10px;
                padding: 5px;
            }
        </style>
    </head>

    <body>
        <div class="body">
            <div class="button">
                <button class="link"><a href="index.php">Home</a></button>
            </div>


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
                        <td><input class="submit" type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>

    </html>
</center>