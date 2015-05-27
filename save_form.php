<html>
 <head>
  <title>test PHP</title>
 </head>
 <body>
<?php
$query1 = "INSERT INTO registration(name, pass) values('".$_POST['name']."','".$_POST["pass"]."')"

mysql_query($query1) or die(mysql_error());
?>
 </body>
</html>
