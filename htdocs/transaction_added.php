<?php
include 'sql_connection.php';

$sql="INSERT INTO transaction (tid, billno, tdate, type, amount)
 VALUES (0,'$_POST[billno]','$_POST[transactiondate]','$_POST[list]','$_POST[amount]')";
  if (!mysql_query($sql))
      {
        echo $_POST['categoryname'];
        die('Error: ' . mysql_error());
      }
echo("<script>location.href = 'admin_home.php';</script>");
?>