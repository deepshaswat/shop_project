<?php
include 'sql_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Payment Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="static/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
function showPurchaseDate(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getpurchasedate.php?q="+str,true);
        xmlhttp.send();
    }
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
          <li><a href="add_product.php">Add a Product</a></li>
          <li><a href="sold.php">Add Sold Details</a></li>
          <li><a href="return.php">Return a Product</a></li>
        </ul>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Wholeseller <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_wholeseller.php">Add a Wholeseller</a></li>
          <li><a href="add_purchase.php">Add Purchase Details</a></li>
          <li><a href="update_purchase.php">Update Purchase Details</a></li>
          <li><a href="add_payment.php">Add Payment Details</a></li>
        </ul>
      <li class="active"><a href="report.php">Report</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Add Payment to a Seller</h3> <br />
  <form class="form-horizontal" action="payment_added.php" method="post">
    <div class="form-group">
    <label class="control-label col-sm-2"for="sellerlist">Select Seller:</label>
    <div class="col-sm-3"> 
  <select class="form-control" id="list" name="list" onchange="showPurchaseDate(this.value)">
    <option>Seller Name</option>
<?php
$query=mysql_query("SELECT * FROM wholeseller");
$count=mysql_num_rows($query);
if(!$count)
			{
				echo "No seller available!!!";
			}
else {
		while($row = mysql_fetch_array($query))
			{
echo "<option>" . $row['name'] . "</option>";
}
}
?>
</select>
</div>
    </div>
    <div id="txtHint"><b>Select Purchase date after selecting seller</b></div> <br />
    <div class="form-group">
      <label class="control-label col-sm-2" for="billno">Bill Number:</label>
      <div class="col-sm-3">          
        <input type="text" class="form-control" id="billno" placeholder="Enter Bill Number" name="billno">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="paymentdate">Payment Date:</label>
      <div class="col-sm-3">          
        <input type="text" class="form-control" id="paymentdate" placeholder="Enter Payment date" name="paymentdate"> 
      </div>
      <label> (yyyy-mm-dd) </label>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="amount">Payment Amount:</label>
      <div class="col-sm-3">          
        <input type="text" class="form-control" id="amount" placeholder="Enter Payment Amount" name="amount">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
