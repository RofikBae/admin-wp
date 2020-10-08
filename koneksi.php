<?php

$connect = mysqli_connect('localhost', 'root', '', 'admin_wp');

if (!$connect) {
    echo 'Gagal Konek Database';
}
