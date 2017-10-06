<?php
include 'sql_connection.php';

$query=mysql_query("SELECT * FROM wholeseller where name = '".$_POST['list']."'");
$row = mysql_fetch_array($query);

$balance = $row['balance'] - intval($_POST['amount']);

$sql="INSERT INTO payment (paymentid, billno, payment_date, debit_amount, w_id)
 VALUES (0,'$_POST[billno]','$_POST[paymentdate]','$_POST[amount]','$row[wid]')";
	if (!mysql_query($sql))
			{
				echo "Error: " . $sql . "<br>" . mysqli_error();
				die('Error: ' . mysql_error());
			}
$sql1="UPDATE wholeseller SET balance = '$balance' WHERE wid = '$row[wid]'";
if (!mysql_query($sql1))
			{
				echo "Error: " . $sql . "<br>" . mysqli_error();
				die('Error: ' . mysql_error());
			}
echo("<script>location.href = 'add_payment.php';</script>");
?>