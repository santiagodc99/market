<?php
$codigo = $_GET['cod'];

 // 1. Database conection
 include("database.php");

 //2. Crear sql para eliminar

 $sql = "DELETE FROM productos WHERE codigo_prod = '$codigo'";

//3. Execute sql
$conn->query($sql);

//4. Confirm transaccion
echo "<script language='javascript'>alert('::: Producto eliminado con exito :::')</script>";
header ("refresh:0;url=index.php");

 ?>
