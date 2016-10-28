<?php

// Para obtener el id de la imagen pondremos en la barra del navegador 
// http://localhost:8888/GuardarVerImagePdfPhpMysql/ver.php?id=1

    $id = filter_input(INPUT_GET, 'id');
    if($id==''){
    die ("No tenemos el id");
    }
 
// Conectamos a mysql
$conn = mysqli_connect('localhost', 'root', 'root', 'Documentos') or die("Error al conectar al servidor");	

 
$sql="select archivo, tipo from archivos where id = $id"; 
 
// Ejecutar la sentencia sql
$resultado = mysqli_query($conn, $sql) or die("Error: no se pudo hacer la consulta.");
 
while($row = mysqli_fetch_array($resultado)){
  $archivo= $row[0]; // Obtener el archivo
  $tipo=$row[1];     // Obtener el tipo de archivo
}
 
mysqli_close($conn);
 
// Header para tranformar la salida en el tipo de archivo que hemos guardado
header("Content-type: $tipo"); 
 
// Imprimir el archivo
echo $archivo;


?>