<?php
    require_once('conexion.php');

    $usu = $_POST['usuario'];
    $pass = $_POST['pass'];

    $queryusuario = mysqli_query($Vinculacion, "SELECT * FROM capcha1 WHERE nombre = '$usu' AND pass = '$pass'");
    $noRegistro   = mysqli_num_rows($queryusuario);

    if($noRegistro == 1 )
    {
        echo "<script>
                alert ('usuario logeado'); 
                window.location = 'mari.html';
              </script>";
    }else
    {
        echo "<script>
                alert ('usuario o contraseña incorrecta'); 
                window.location = 'mari.html';
              </script>"; 
    }
    
    
?>