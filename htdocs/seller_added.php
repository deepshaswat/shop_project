<?php
include 'sql_connection.php';

$sql="INSERT INTO wholeseller (wid, name, address, balance)
 VALUES (0,'$_POST[sellername]','$_POST[address]', 0)";
	if (!mysql_query($sql))
			{
				echo $_POST['sellername'];
				echo "<br />".$_POST['address'];
				die('Error: ' . mysql_error());
			}
echo("<script>location.href = 'add_wholeseller.php';</script>");
?>