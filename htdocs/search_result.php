<?php
include 'sql_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="static/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
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
  <h3>Search</h3> <br />
  <form class="form-horizontal" action="search_result.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="productname">Product Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="productname" placeholder="Enter Product Name" name="productname">
      </div>
    </div>
 
 <br/>
    
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<br />

<div class="container">
    <h3>Search Results:</h3>   <br />
   <form class="form-horizontal" id="columnarForm" method="post">  
    <div class="form-group">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Select</th>
        <th>Product Name</th>
        <th>Available Quantity</th>
        <th>Price</th>
        <th>Category</th>
        <th>Sub-Category</th>
      </tr>
    </thead>
    <tbody>
<?php
$q = $_POST['productname'];
$query=mysql_query("SELECT * FROM product WHERE pname LIKE '%".$q."%' ORDER BY pname ASC");
$count=mysql_num_rows($query);

if(!$count)
			{
				echo "No product listed!!!";
			}
else {
		while($row = mysql_fetch_array($query))
			{
        $q1=mysql_query("SELECT * FROM category WHERE cid = '$row[c_id]'");
        $q2=mysql_query("SELECT * FROM subcategory WHERE scid = '$row[sc_id]'");
        $c1=mysql_num_rows($q1);
        $c2=mysql_num_rows($q2);
echo "<tr><td><input type='radio' name='prodradio' value=" . $row['pid'] . "></td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['pquantity'] . "</td>";
echo "<td>" . $row['psellprice'] . "</td>";
if(!$c1)
{
  echo "<td>No Category</td>";
}
else {
  $r1 = mysql_fetch_array($q1);
  echo "<td>" . $r1['cname'] . "</td>";
}
if(!$c2)
{
  echo "<td>No Sub-Category</td>";
}
else {
  $r2 = mysql_fetch_array($q2);
  echo "<td>" . $r2['scname'] . "</td></tr>";
}
}
}
?>
</tbody>
</table>
</div>
<div class="form-group">        
      <div class="col-sm-offset-3 col-sm-10">
        <button type="submit" onclick="submitForm('sell_product1.php')" class="btn btn-default">Sell</button>
      &nbsp;      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" onclick="submitForm('return_product1.php')"class="btn btn-default">Return</button>
        &nbsp;      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" onclick="submitForm('update_product1.php')"class="btn btn-default">Update Details</button>
      </div>
    </div>

</form>

    </div>
    

</div>
</body>
</html>
