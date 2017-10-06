<html>
<body>
<?php
session_start();
session_destroy();
mysql_close($con);

echo("<script>location.href = 'index.php';</script>");
?>
</body>
</html>