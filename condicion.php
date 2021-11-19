<?php
    include ("bd.php");
session_start();
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$condicion_login=mysqli_query($conexion, "SELECT * FROM login WHERE usuario='$usuario' AND password='$contrasena'");
if (mysqli_num_rows($condicion_login)>0) {
    $_SESSION["autentificado"]="1";
    $_SESSION["user"]=$_POST['usuario'];
    $_SESSION["pass"]=$_POST["contrasena"];
    
    header ("Location: home.php");
}else{
    header ("Location: index.php?errorusuario=si");
}
?>