<?php
$username = $_POST['username'];
$password = md5($_POST['password']);

if ($username == "admin" && $password == md5("1234")) {
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["status"] = 'login';
    echo "Anda Berhasil Login. Silahkan menuju <a href= 'homeSession.php'> Halaman Home </a>";
}
else {
    echo "Gagal Login. Silahkan login lagi <a href= 'sessionLoginForm.html'>Halaman Login</a>";
}
?>