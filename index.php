<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar Unison</title>
</head>
<body>
    <h1>Sistema Escolar</h1>
    <form action="validar.php" method="POST">
        <label for="user">Matrícula: </label>
        <input type="number" name= "user" value="222217414" required>
        <br>
        <label for="pswd">Contraseña: </label>
        <input type="password" name="pswd" value="astro" required>
        <br>
        <button type="submit" >Entrar</button>
        
    </form>
    <?php
    
    //validamos el warning
    if (!empty($_GET["error"]) && $_GET["error"]==100) {

        echo"Se ha detectado un acceso indebido, te vamos a nukear";
        
    }
    ?> 
</body>
</html>