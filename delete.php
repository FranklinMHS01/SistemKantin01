<?php
include_once("config_kantin.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM tb_penjual WHERE id_penjual=$id");

echo "<script>alert('Penjual Berhasil Dihapus'); window.location.href='index.php'</script>";

?>