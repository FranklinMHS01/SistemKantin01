<center>
    <html>

    <head>
        <title>Add Users</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>


        <style>
            .body {
                width: 50%;
                border:  1px solid black;
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
                margin-top: 10px ;
                padding: 5px;
            }
        </style>
    </head>

    <body>
        <div class="body">
            <div class="button">
                <button class="link"><a href="index.php">Go to Home</a></button>
            </div>
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
                        <td><input class="submit" type="submit" name="Submit" value="Add"></td>
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

                echo "<script>alert('Penjual Berhasil Ditambahkan'); window.location.href = 'index.php'</script>";
            }
            ?>
        </div>
    </body>

    </html>
</center>