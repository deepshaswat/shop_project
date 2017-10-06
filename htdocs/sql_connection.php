<?php
session_start();
	if(!isset($_SESSION['username']))
{
echo("<script>location.href = 'index.php';</script>");
exit;
}
$con = mysql_connect("localhost","root","root");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("shop");
?>