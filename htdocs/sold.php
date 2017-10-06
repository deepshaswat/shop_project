<?php
include 'sql_connection.php';

$query=mysql_query("SELECT * FROM product WHERE pname = '".$_POST['productname']."'");
$row = mysql_fetch_array($query);

$quant = $row['pquantity'] - intval($_POST['productquantity']);
$sql="UPDATE product SET pquantity = '$quant' WHERE pid = '$row[pid]'";
if (!mysql_query($sql))
			{
				echo "Error: " . $sql . "<br>" . mysqli_error();
				die('Error: ' . mysql_error());
			}
echo("<script>location.href = 'search_product.php';</script>");
?>