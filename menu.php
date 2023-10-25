<center>
    <?php
    include_once("config_kantin.php");

    $result = mysqli_query($mysqli, "SELECT * FROM tb_menu a join tb_penjual b on b.id_penjual = a.id_penjual ORDER BY id_menu DESC")
        ?>

    <html>

    <head>
        <title>List Menu</title>
    </head>

    <body>
        <a href="index.php">Go To Home</a><br /><br>

        <a href="add_menu.php">Add Menu Baru</a><br /><br />

        <table width="100%" border=2>
            <tr>
                <th>Nama Penjual</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Update</th>
            </tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td>
                        <?= $user_data['nama'] ?>
                    </td>
                    <td>
                        <?= $user_data['nama_menu'] ?>
                    </td>
                    <td>
                        <?= $user_data['jenis'] ?>
                    </td>
                    <td>Rp.
                        <?= number_format($user_data['harga'], 2, ',', '.') ?>
                    </td>

                    <td><a href="edit_menu.php?id=<?= $user_data['id_menu'] ?>">Edit</a> | <a
                            href="delete_menu.php?id=<?= $user_data['id_menu'] ?>">Delete</a></td>
                </tr>

            <?php } ?>
        </table>
    </body>

    </html>
</center>