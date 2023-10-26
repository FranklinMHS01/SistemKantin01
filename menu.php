<center>
    <?php
    include_once("config_kantin.php");

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM tb_menu WHERE id_penjual=$id");
    $quary = mysqli_query( $mysqli,"SELECT * FROM tb_penjual WHERE id_penjual=$id");
        ?>

    <html>

    <head>
        <title>List Menu</title>
        <style>
            table {
                box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.4);
            }

            table tr th {
                background-color: rgba(266, 125, 240);
            }

            .link {
                text-decoration: none;
                color: black;
                text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                word-spacing: 2px;
            }

            a {
                text-decoration: none;
            }

            .edit {
                text-decoration: none;
                background-color: blue;
                color: white;
                padding: 2px;
                border-radius: 5px;
                margin: 5px;
            }

            .delete {
                text-decoration: none;
                background-color: red;
                color: white;
                padding: 2px;
                border-radius: 5px;
                margin: 5px;
            }
        </style>
    </head>

    <body>
        <a class="link" href="index.php">Go To Home</a><br /><br>

        <a class="link" href="add_menu.php">Add Menu Baru</a><br /><br />

        <?php 
        $user_data = mysqli_fetch_array($quary)
        ?>

        <h3 class="nama">Nama | <?= $user_data['nama'] ?></h3>

        <table width="100%" border=2>
            <tr>
                <th>Nama Makanan</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Update</th>
            </tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td>
                        <?= $user_data['nama_menu'] ?>
                    </td>
                    <td>
                        <?= $user_data['jenis'] ?>
                    </td>
                    <td>Rp.
                        <?= number_format($user_data['harga'], 2, ',', '.') ?>
                    </td>

                    <td><a class="edit" href="edit_menu.php?id=<?= $user_data['id_menu'] ?>">Edit</a> | <a
                           class="delete" href="delete_menu.php?id=<?= $user_data['id_menu'] ?>">Delete</a></td>
                </tr>

            <?php } ?>
        </table>
    </body>

    </html>
</center>