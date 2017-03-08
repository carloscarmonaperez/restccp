<?php
$db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "qaqhjcozoo2za9si";
$db_user = "fibhku0onujcthev";
$db_password = "yk0o3iua2azdszzi";
    
     $connection = mysql_connect('am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'fibhku0onujcthev', 'yk0o3iua2azdszzi') or die("Connection Error: " . mysql_error());
    
mysql_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysql_error());
    @mysql_query("SET NAMES 'utf8'");

$sql_query = "SELECT * FROM contactos;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>