<?php
include 'sql_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sell Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="static/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Shop Maintenance</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin_home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Product <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="search_product.php">Search a Product</a></li>
          <li><a href="add_Category.php">Add Category</a></li>
          <li><a href="add_subCategory.php">Add Sub-Category</a></li>
          <li><a href="add_product.php">Add a Product</a></li>
          <li><a href="sell_product.php">Add Sold Details</a></li>
          <li><a href="return_product.php">Return a Product</a></li>
          <li><a href="update_product.php">Update Product Details</a></li>
        </ul>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Wholeseller <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_wholeseller.php">Add a Wholeseller</a></li>
          <li><a href="add_purchase.php">Add Purchase Details</a></li>
          <li><a href="add_payment.php">Add Payment Details</a></li>
        </ul>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Report <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="wholeseller_details.php">Wholeseller Details</a></li>
          <li><a href="range_report.php">Range Sale Report</a></li>
          <li><a href="daily_sale.php">Daily Sale</a></li>
        </ul>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="help.php">Help</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Add Return Product Quantity</h3> <br />
  <form class="form-horizontal" action="returned.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="productname">Product Name:</label>
      <div class="col-sm-3">
        
      
<?php
$q = ($_POST['prodradio']);
$query=mysql_query("SELECT * FROM product WHERE pid = '".$q."'");
$count=mysql_num_rows($query);
if(!$count)
      {
        echo "No Products available!!!";
      }
else {
    while($row = mysql_fetch_array($query))
      {
echo "<label class='control-label col-sm-2' for='productname'>" . $row['pname'] . "</label>";
echo '<input type="hidden" id="productname" placeholder="Enter Product Name" name="productname" value=' . $row['pname'] . ' >';
echo '</div>
    </div>';
echo '<div class="form-group">
      <label class="control-label col-sm-2" for="productquantity">Quantity Available:</label>
      <div class="col-sm-3">';        
echo "<label class='control-label col-sm-2' for='productquantity'>" . $row['pquantity'] . "</label>";
}
}
?>
</div>
    </div>
   <br/>
 <div class="form-group">
      <label class="control-label col-sm-2" for="productquantity">Product Quantity Returned:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="productquantity" placeholder="Enter Product Quantity" name="productquantity"> 
      </div>
    </div>
 
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>
