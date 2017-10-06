<html>
<head>
	<meta http-equiv="Location" content="http://localhost.com/">
</head>
	<body>
<?php
		session_start();
			$con = mysql_connect("localhost","root","root");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("shop");

$password=($_POST['password']);



$query=mysql_query("SELECT * FROM user where username='$_POST[username]' AND password='$password'");

$row = mysql_fetch_array($query);
$count=mysql_num_rows($query);

if($count==1)
{
	$_SESSION['username']=$_POST['username'];
	if($row['role_id']==1)
	{
		echo("<script>location.href = 'admin_home.php';</script>");
	}
	else if($row['role_id']==2)
	{
	echo("<script>location.href = 'accountant_home.php';</script>");
	}
}

else
{
echo("<script>location.href = 'index.php';</script>");

}
?>
		

	</body>
</html>