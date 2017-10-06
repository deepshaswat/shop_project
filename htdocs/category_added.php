<?php
include 'sql_connection.php';

$sql="INSERT INTO category (cid, cname)
 VALUES (0,'$_POST[categoryname]')";
	if (!mysql_query($sql))
			{
				echo $_POST['categoryname'];
				die('Error: ' . mysql_error());
			}
echo("<script>location.href = 'add_category.php';</script>");
?>