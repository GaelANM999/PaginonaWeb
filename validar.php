<?php
    #print_r($_POST);

    if (empty($_POST["user"]) || empty($_POST["pswd"]==100)) {
        header("Location: index.php?error=200");
    }

    echo "<br>";
    $SQL = "SELECT * FROM alumnos WHERE expediente = ".$_POST["user"]." 
    AND contrasena = MD5('".$_POST["pswd"]."');";
#echo $SQL;

$connection = mysqli_connect("localhost","root","","sistema_escolar") or die("valió, perriyo");


$result = mysqli_query($connection, $SQL) or die("petó");

#print_r($result);

if (mysqli_num_rows($result) == 1) {
    echo "Usuario correcto" ;
    header("Location: menu.php");
 }
else {
   header("Location: index.php?error=100");
}

mysqli_close($connection);