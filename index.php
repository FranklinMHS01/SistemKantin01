<center>
    <?php
    include_once("config_kantin.php");

    $result = mysqli_query($mysqli, "SELECT * FROM tb_penjual ORDER BY id_penjual DESC");
    ?>

    <head>
        <title>Homepage</title>

        <style>
            table {
                box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.5);
            }

            table tr th {
                background-color: rgba(266, 125, 4, 1);
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
        <a class="link" href="add.php">Add Penjual Baru</a><br /><br />

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
                echo "<td><a class='edit' href='edit.php?id=$user_data[id_penjual]'>Edit</a> | <a class='delete' href='delete.php?id=$user_data[id_penjual]'>Delete</a></td></tr>";
            }
            ?>
        </table>
    </body>

    </html>
</center>