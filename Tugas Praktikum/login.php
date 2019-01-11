<?php
    function do_login($username, $password){
        if($username != "lyra" || $password != "hehehe")
{
    header("location:TugasLogin.php?error=wrong");
}

        if($username == "lyra" && $_POST["password"] == "hehehe")
{
    $_SESSION["user"] = $username;
    $_SESSION["pass"] = $password;

    header("location: read.php");
}
}
    function check_login(){
        if(!isset($_SESSION["user"])){
            header("location:TugasLogin.php");
        }
    }

?>