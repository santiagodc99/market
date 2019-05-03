<html>
<head>
  <title>Market</title>

</head>
<body  >

<table border="0" align="center">
  <form name="frm1" action= "insert_prod.php" method= "post">

            <center><b><font face="Verdana" size="15" color="BLACK">MARKET</font></b></center><br>


          <tr>
                    <td><b><font face="Arial" color="BLACK">Codigo producto:</font></b><br></td>
                    <td><input type="text" name= "codprod" required><br><br></td>
                  </tr>
          <tr>
                    <td><b><font face="Arial" color="BLACK">Nombre producto:</font></b></td><br>
                    <td><input type="text" name= "nomprod" required><br><br></td>
                  </tr>

                    <td><b><font face="Arial" color="BLACK">Cantidad:</font></b></td><br>
                    <td><input type="text" name= "cantprod" required><br><br></td>
          <tr>
                                      <td><b><font face="Arial" color="BLACK">Estado:</font></b><br></td>
                                      <td>  <select name="estprod" >
                                          <option></option>
                                          <option value=1>Habilitado</option>
                                          <option value=0>Deshabilitado</option>
                                          </select></td>
                                    </tr>
          <tr>
                    <td align="center"><input type="submit" value="Registrar"><br></td></td>
          </tr>
</form>


</body>
</html>
<table border = 1 align = "center">
  <tr><th>CODIGO</th><th>NOMBRE</th><th>CANTIDAD</th><th>.</th><th>..</th></tr>



<?php
// 1. Coneccion base de datos
include("database.php");
// 2. Crear sql y guardar datos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
// 3. Mostrar informacion
if ($result->num_rows> 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["codigo_prod"]. "</td>";
    echo "<td>".$row["nombre_prod"]. "</td>";
    echo "<td>".$row["cantidad"]. "</td>";
    echo "<td><img src='icons/pen.png' width='20'></td>";
    echo "<td><a href = 'delete_product.php?cod=".$row["codigo_prod"]."'><img src='icons/trash.jpeg' width='20'></a></td>";
    echo "</tr>";
  }
}else {
  echo "::: No hay productos registrados :::";
}


?>
