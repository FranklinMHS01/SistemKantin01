<?php
include_once("config_kantin.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM tb_menu WHERE id_menu=$id");

echo "<script>alert('Menu Berhasil Dihapus'); window.location.href= 'menu.php'</script>";

?>