<html>
<head>
<title>Work with tables in mysql</title>
</head>
<body>



<form action="save_form.php" method="post" name="test_form">
<table border="1" cellpadding="0" cellspacing="0">
 <tr>
  <td colspan="2" align="center"><strong>Registration</strong></td>
 </tr>
 <tr>
  <td width="150">Name :</td>
  <td><input type="text" name="name" maxlength="30" /></td>
 </tr>
 <tr>
  <td width="150">Pass :</td>
  <td><input type="text" name="pass" maxlength="30" /></td>
 </tr>
 
 <tr>
  <td colspan="2" align="center">
   <input type="submit" class="buttons" value="Sent" />
   <input type="reset" class="buttons" value="Clean" />
  </td>
 </tr>
</table>
</form>
 
 
 
<form action="view_data.php" method="post" name="view_result">
<table>
 <tr>
  <td align="center"><input type="submit" class="buttons" value="Is it work?" /></td>
 </tr>
</table>
</form>
 
<form action="del_data.php" method="post" name="delete_data">
<table>
 <tr>
  <td align="center"><input type="submit" class="buttons" value="Delete from base" /></td>
 </tr>
</table>
</form>
 


<?php

/*
$db = "guitarmerlin";
$link = mysql_pconnect ();
if ( !$link )
   die ("i can't connect to MySQL");
var_dump($link);
if (!mysql_select_db ( $db, $link )) {
die('no db');
}
mysql_close ( $link );
*/

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




/* Таблица MySQL, в которой будут храниться данные */
$table = "registration";

/* Определяем текущую дату */
$cdate = date("Y-m-d");
 
// Составляем запрос для вставки информации в таблицу

$sql = "INSERT INTO $table (RegistrationName, RegistrationPass)
VALUES ('Genry', 'uio789')";

$query = "INSERT INTO $table RegistrationName ='".$_POST['name']."', RegistrationPass='".$_POST["pass"]."';
 
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
mysql_query($sql) or die(mysql_error());

// Освобождаем память от результата
mysql_free_result($result);




mysql_close( );




?>
</body>
</html>
