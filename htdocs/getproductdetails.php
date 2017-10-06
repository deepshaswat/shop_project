<?php
include 'sql_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="static/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="form-group">
      <label class="control-label col-sm-2" for="productquantity">Quantity Available:</label>
      <div class="col-sm-3">
        
      
<?php
$q = ($_GET['q']);
$query=mysql_query("SELECT * FROM product WHERE pname = '".$q."'");
$count=mysql_num_rows($query);
if(!$count)
			{
				echo "No Products available!!!";
			}
else {
		while($row = mysql_fetch_array($query))
			{
echo "<label class='control-label col-sm-2' for='productquantity'>" . $row['pquantity'] . "</label>";
}
}
?>
</div>
    </div>
</body>
</html>
