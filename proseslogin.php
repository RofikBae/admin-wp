<?php

include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$data = mysqli_query($connect, $query);

$count = mysqli_num_rows($data);

if ($count > 0) {
?>

    <script type="text/javascript">
        alert('anda berhasil login');
        window.location = "index.html";
    </script>

<?php
} else {
?>

    <script type="text/javascript">
        alert('akun tidak ditemukan');
        window.location = "login.php";
    </script>

<?php
}

?>