<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM siswa WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php?pesan=success");
    } else {
        header("Location: index.php?pesan=error");
    }
}
