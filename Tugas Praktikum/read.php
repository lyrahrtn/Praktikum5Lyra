<?php
    session_start();
    include("login.php");
    echo check_login();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
<title>Data yang Ditampilkan</title>
<meta charset="utf-8">
</head>
<body>
<header>
<div class="wrapper">
    <div id="logo">HELLO</div>
    </table>
    </div>
</header>
    <p>
        SELAMAT! ANDA BERHASIL LOGIN!
    </p>
    <h3><a href="logout.php">Logout!</a></h3>
</body>
</html>