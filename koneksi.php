<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM user");

while ($data = mysqli_fetch_assoc($query)) {
    echo $data['Admin'];
}
?>