<?php
include 'sql_connection.php';

$query=mysql_query("SELECT * FROM product WHERE pname = '".$_POST['productname']."'");
$row = mysql_fetch_array($query);

$sql="UPDATE product SET pquantity = '".$_POST['productquantity']."', pname = '".$_POST['productnameupdate']."', 
psellprice = '".$_POST['productprice']."' WHERE pid = '$row[pid]'";
if (!mysql_query($sql))
			{
				echo "Error: " . $sql . "<br>" . mysqli_error();
				die('Error: ' . mysql_error());
			}
echo("<script>location.href = 'search_product.php';</script>");
?>