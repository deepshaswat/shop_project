<?php
include 'sql_connection.php';

$query=mysql_query("SELECT * FROM category where cname = '".$_POST['list']."'");
$row = mysql_fetch_array($query);

$sql="INSERT INTO subcategory (scid, scname, c_id)
 VALUES (0,'$_POST[subcategoryname]','$row[cid]')";
	if (!mysql_query($sql))
			{
				echo "Error: " . $sql . "<br>" . mysqli_error();
				die('Error: ' . mysql_error());
			}
echo("<script>location.href = 'add_subCategory.php';</script>");
?>