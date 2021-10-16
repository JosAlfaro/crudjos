<!--joselinne-->
<!DOCTYPE html> 
<html> 
<head>
    <meta charset="utf-8"> 
    <meta HTTP-EQUIV="REFRESH" CONTENT="10; URL=11alta_articulos.php"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alta de artículos</title> 
</head> 
<body bgcolor="white">
    <h1 align="center">Alta de artículos</h1> 
    <?php
        $mysql = new mysqli("localhost", "root", "", "base2"); 
        if ($mysql->connect_error)
            die("Problemas con la conexión a la base de datos");

        $mysql->query("insert into articulos(descripcion,precio,codigorubro)
            values ('$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigorubro])") or 
            die($mysql->error);

    echo '<center>El nuevo artículo se almacenó</center>';

    $mysql->close();
    ?>
    <br> 
    <table border="1" bgcolor="#F4D03F" align="Center">
        <tr>
            <td><a href="11alta_articulos.php">
            <input type="button" value="Regresar"></a></td> 
        </tr>
        </table> 
    </body> 
</html>