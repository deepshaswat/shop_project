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
      <label class="control-label col-sm-2" for="productname">Product Name:</label>
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
echo '<input class="form-control" type="text" id="productnameupdate" placeholder="Enter Product Name" name="productnameupdate" value=' . $row['pname'] . ' >';
echo '<input type="hidden" id="productname" placeholder="Enter Product Name" name="productname" value=' . $row['pname'] . ' >';
echo '</div>
    </div>';
echo '<div class="form-group">
      <label class="control-label col-sm-2" for="productprice">Product Price:</label>
      <div class="col-sm-3">';
echo '<input class="form-control" type="text" id="productprice" placeholder="Enter Product Price" name="productprice" value=' . $row['psellprice'] . ' >';
echo '</div>
    </div>';
echo '<div class="form-group">
      <label class="control-label col-sm-2" for="productquantity">Product Quantity:</label>
      <div class="col-sm-3">';
echo '<input class="form-control" type="text" id="productquantity" placeholder="Enter Product Quantity" name="productquantity" value=' . $row['pquantity'] . ' >';
}
}
?>
</div>
    </div>
</body>
</html>
