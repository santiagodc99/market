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
