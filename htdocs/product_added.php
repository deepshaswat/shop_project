<?php
include 'sql_connection.php';

$query=mysql_query("SELECT * FROM subcategory WHERE c_id = (SELECT cid FROM category WHERE cname = '".$_POST['list']."')");
$row = mysql_fetch_array($query);

$sql="INSERT INTO product (pid, pname, pquantity, psellprice, c_id, sc_id)
 VALUES (0,'$_POST[productname]', '$_POST[productquantity]', '$_POST[productprice]','$row[c_id]','$row[scid]')";
	if (!mysql_query($sql))
			{
				echo "Error: " . $sql . "<br>" . mysqli_error();
				die('Error: ' . mysql_error());
			}
echo("<script>location.href = 'add_product.php';</script>");
?>