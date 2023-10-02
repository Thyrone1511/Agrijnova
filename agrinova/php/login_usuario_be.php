<?php
session_start();
include 'conexion_be.php';
$correo= $_POST['correo'];
$clave=$_POST['clave'];
$clave=hash('sha512', $clave);

$validar_login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE 
correo='$correo' AND clave='$clave'");

if(mysqli_num_rows($validar_login) >0 ){
    $_SESSION['correo']= $correo;
    header("location: ../bienvenida.php");
    exit;
}
else{
    echo '
    <script>
        alert("Usuario no existe, verifique los datos ingresados");
        window.location="../index.php";
    </script>
    ';
    exit;
}
?>