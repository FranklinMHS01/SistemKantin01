<center>
    <?php
    include_once("config_kantin.php");

    $result = mysqli_query($mysqli, "SELECT * FROM tb_penjual ORDER BY id_penjual DESC");
    ?>

    <head>
        <title>Homepage</title>
    </head>

    <body>
        <a href="add.php">Add Penjual Baru</a><br /><br />

        <table width='100%' border=1>

            <tr>
                <th>Name</th>
                <th>No_HP</th>
                <th>Alamat</th>
                <th>Lihat Menu</th>
                <th>Update</th>
            </tr>
            <?php

            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td>" . $user_data['no_handphone'] . "</td>";
                echo "<td>" . $user_data['alamat'] . "</td>";
                echo "<td> <a href='menu.php?$user_data[id_penjual]'> Menu </a>";
                echo "<td><a href='edit.php?id=$user_data[id_penjual]'>Edit</a> | <a href='delete.php?id=$user_data[id_penjual]'>Delete</a></td></tr>";
            }
            ?>
        </table>
    </body>

    </html>
</center>