<center>
    <html>

    <head>
        <title>Add Menu</title>
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
                <button class="link"><a href="index.php">Go to Home</a></button>
            </div>

            <form action="add_menu.php" method="post" name="form1">
                <table width="50%" border="0">
                    <tr>
                        <td>Nama Makanan</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td><label for="Jenis">Jenis</label></td>
                        <td>
                            <select name="jenis" id="cars">
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Penjual</td>
                        <?php
                        include "config_kantin.php";
                        $query = "select * from tb_penjual";
                        $datapenjual = mysqli_query($mysqli, $query);

                        ?>
                        <td><select name="penjual" id="">
                                <?php
                                while ($row = mysqli_fetch_array($datapenjual)) {
                                    ?>
                                    <option value="<?= $row['id_penjual'] ?>">
                                        <?= $row['nama'] ?>
                                    </option>
                                <?php } ?>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="number" name="harga"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="submit" type="submit" name="Submit" value="Add"></td>
                    </tr>
                </table>
            </form>

            <?php
            if (isset($_POST['Submit'])) {
                $nama = $_POST['name'];
                $jenis = $_POST['jenis'];
                $harga = $_POST['harga'];
                $penjual = $_POST['penjual'];

                include_once("config_kantin.php");

                $result = mysqli_query($mysqli, "INSERT INTO tb_menu(id_menu,nama_menu,jenis,harga,id_penjual) VALUES(null,'$nama','$jenis','$harga','$penjual')");

                echo "<script>alert('Menu Berhasil Ditambahkan');</script> <a href='menu.php'>View Menu</a>";
            }
            ?>
        </div>
    </body>

    </html>
</center>