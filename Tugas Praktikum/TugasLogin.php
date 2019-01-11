<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("location:read.php");
    }
    include("login.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Tugas Praktikum/style.css">
    <title>Form Login</title>
</head>
<body>
    <?php
         if(isset($_GET["error"])){
            if($_GET["error"] == "wrong"){
                echo '<h3>Username dan Password salah!</h3>';
            }
        }
        if(isset($_GET["notif"])){
            if($_GET["notif"] == "logout"){
                echo '<h3>Berhasil logout!</h3>';
            }
        }
        if(isset($_POST['submit'])){
            echo do_login($_POST['username'], $_POST['password']);
        }
    ?>
    <div id="form">
    <h1>Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <p>
    <label for="username" id="username"> <b> Username : </b></label> <br> <br>
    <input type="text" name="username" id="user">
    </p>
    <p>
    <label for="password" id="pass"> <b> Password : </b> </label> <br> <br>
    <input type="password" name="password" id="password">
    </p>
    <p>
    <input type="submit" value="Simpan" name="submit" id="simpan">
    </p>
    </form>
    </div>
</body>
</html>