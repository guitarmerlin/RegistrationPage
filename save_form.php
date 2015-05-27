<html>
 <head>
  <title>test PHP</title>
 </head>
 <body>
<?php

$link = mysql_connect( 'localhost' , 'guitarmerlin', '80177413')
    or die('cant connect ' . mysql_error());
echo 'data from table: ';
mysql_select_db('guitarmerlin') or die('i cant use BD');



// Выполняем SQL-запрос
$query = 'SELECT * FROM registration';
$result = mysql_query($query) or die('donw work ' . mysql_error());

// Выводим результаты в html
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";


 
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
mysql_query($query) or die(mysql_error());



$query1 = "INSERT INTO registration(RegistrationName, RegistrationPass) values('".$_POST['name']."','".$_POST["pass"]."')";

mysql_query($query1) or die(mysql_error());
?>
 </body>
</html>
