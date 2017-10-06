<?php
include 'sql_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Help</title>
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
  <h1>Help File</h1>    
  <p>The explanation of each page in the website:</p>
  <dl>
    <dt>Home</dt>
    <dd>- This page is used to enter the daily sale based on the bill number, date and on sale or return.</dd>
  </dl>
  <h5><b>Product Menu</b></h5>
  <dl>
    <dt>Search a Product</dt>
    <dd>- This page is used to search any product listed in the database. After search user can add the Sell Quantity, Return Quantity and also 
      update the Product Details.</dd>
    <dt>Add Category</dt>
    <dd>- This page is used to add a new category for the listing of the products.</dd>  
    <dt>Add Sub Category</dt>
    <dd>- This page is used to add a new sub category for the listing of the product.</dd>
    <dt>Add a Product</dt>
    <dd>- This page is used to add a new product into the database. This is done first after selecting a category followed by a sub category 
      where the product will be added.</dd>
      <dt>Add Sold Details</dt>
    <dd>- This page is used to add the sell quantity of a product based on the category and sub-category incase the product name 
      is not available</dd>
      <dt>Return a Product</dt>
    <dd>- This page is used to add the returned quantity of a product based on the category and sub-category incase the product name 
      is not available</dd>
      <dt>Update Product Details</dt>
    <dd>- This page is used to update of a product details based on the category and sub-category incase the product name 
      is not available</dd>
  </dl>   
  <h5><b>Wholeseller Menu</b></h5>
  <dl>
  <dt>Add a Wholeseller</dt>
    <dd>- This page is used to add the wholeseller (mahajan) details.</dd> 
    <dt>Add Purchase Details</dt>
    <dd>- This page is used to add the purchase amount based on each wholeseller.</dd> 
    <dt>Add Payment Details</dt>
    <dd>- This page is used to add the payment amount based on each wholeseller.</dd> 
  </dl>
  <h5><b>Report Menu</b></h5>
  <dl>
    <dt>Wholeseller Details</dt>
    <dd>- This page displays all the transaction history of the selected wholeseller. The purchase history and the payment history</dd>
    <dt>Range Sale Report</dt>
    <dd>- Transaction history of the sold items based on two dates - start and end date.</dd>
    <dt>Daily Sale Report</dt>
    <dd>- Transaction history of the sold items based on the date entered.</dd>
  </dl>
</div>


</body>
</html>
