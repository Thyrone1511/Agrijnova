<?php

include 'conexion_be.php';

$nombre = $_POST ['nombre'];
$apellido =$_POST['apellido'];
$celular =$_POST['celular'];
$correo =$_POST['correo'];
$clave =$_POST['clave'];
$clave =hash('sha512', $clave);


$query = "INSERT INTO usuarios(nombre, apellido, celular, correo, clave) 
         VALUES ('$nombre', '$apellido', '$celular', '$correo', '$clave')";
//Verificar que el correo no se repita
$verificar_correo=mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

if(mysqli_num_rows($verificar_correo) > 0) {

    echo '
    <script>
        alert("Este correo ya se encuentra registrado, intenta con otro diferente");
        window.location= "../index.php";
    </script>
    ';
   exit(); 
}
//Verificar que el celular no se repita
$verificar_celular=mysqli_query($conexion, "SELECT * FROM usuarios WHERE celular='$celular'");

if(mysqli_num_rows($verificar_celular) > 0) {

    echo '
    <script>
        alert("Este numero de celular ya se encuentra registrado, intenta con otro diferente");
        window.location= "../index.php";
    </script>
    ';
   exit(); 
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Usuario almacenado correctamente");
        window.location = "../index.php";
    </script>  
    ';
}else{
    echo '
    <script>
        alert("Intentalo de nuevo");
        window.location = "../index.php";
    </script>  
    ';
}

mysqli_close($conexion);
?>