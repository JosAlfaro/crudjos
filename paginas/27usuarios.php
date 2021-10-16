<!--joselinne-->
<!DOCTYPE html> 
<html> 
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Listado</title> 
<style> 
    .tablalistado { 
    border-collapse: collapse; 
    box-shadow: Opx 6px 8px #000; 
    margin: 20px; 
    margin: auto;
    }
    .tablalistado th { 
    border: 1px solid #000;
    padding: 5px; 
    background-color: #F4D03F;
    }
    .tablalistado td { 
    border: 1px solid #000;
    padding: 5px; 
    background-color:#F4D03F ;
    }
    </style> 
</head> 
<body bgcolor="white">
    <h1 align="center">LISTADO</h1> 
    <?php 
    $mysql = new mysqli("localhost", "root", "", "base2"); 
    if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");

    $registros = $mysql->query("select id, usuario from usuarios") or
        die($mysql->error);

    echo '<table class="tablalistado" align="center">'; 
    echo '<tr><th>Código</th><th>Usuarios</th></tr>'; 
    while ($reg = $registros->fetch_array()) {
        echo '<tr>'; 
        echo '<td>';
        echo $reg['id']; 
        echo '</td>'; 
        echo '<td>'; 
        echo $reg['usuario']; 
        echo '</td>'; 
        echo '</tr>';
    }
        echo '</table>'; 
        $mysql->close();
        ?>
    </body> 
</html>