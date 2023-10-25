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

            <form name="update_user" method="post" action="edit.php">
                <table border="0">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
                    </tr>
                    <tr>
                        <td>No_HP</td>
                        <td><input type="text" name="handphone" value=<?php echo $handphone; ?>></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                        <td><input class="submit" type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>

    </html>
</center>