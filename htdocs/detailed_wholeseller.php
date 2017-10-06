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
    <label class="control-label col-sm-2"for="purchasedate">Seller Details:</label>    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Seller Name</th>
        <th>Address</th>
        <th>Balance</th>
      </tr>
    </thead>
    <tbody>
<?php
$q = ($_GET['q']);
$query=mysql_query("SELECT * FROM wholeseller WHERE name = '".$q."'");
$count=mysql_num_rows($query);
if(!$count)
			{
				echo "No seller available!!!";
			}
else {
		while($row = mysql_fetch_array($query))
			{
echo "<tr><td>" . $row['name'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['balance'] . "</td></tr>";
}
}
?>
</tbody>
</table>
</div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2"for="purchasedate">Purchase History:</label> 
    <table class="table table-striped">
    
<?php
$q = ($_GET['q']);
$query=mysql_query(" SELECT * FROM purchase WHERE w_id = (SELECT wid FROM wholeseller WHERE name = '".$q."') ORDER BY purchase_date DESC");
$count=mysql_num_rows($query);
if(!$count)
      {
        echo "<br /> <h6>No purchase made!!!</h6>";
      }
else {
  echo "<thead>
      <tr>
        <th>Bill Number</th>
        <th>Purchase Date</th>
        <th>Credit Amount</th>
      </tr>
    </thead>
    <tbody>";
    while($row = mysql_fetch_array($query))
      {
echo "<tr><td>" . $row['billno'] . "</td>";
echo "<td>" . $row['purchase_date'] . "</td>";
echo "<td>" . $row['credit_amount'] . "</td></tr>";
}
}
?>
</tbody>
</table>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"for="purchasedate">Payment History:</label> 
    <table class="table table-striped">
    
<?php
$q = ($_GET['q']);
$query=mysql_query(" SELECT * FROM payment WHERE w_id = (SELECT wid FROM wholeseller WHERE name = '".$q."') ORDER BY payment_date DESC");
$count=mysql_num_rows($query);
if(!$count)
      {
        echo "<br /> <h6>No purchase made!!!</h6>";
      }
else {
  echo "<thead>
      <tr>
        <th>Bill Number</th>
        <th>Payment Date</th>
        <th>Debit Amount</th>
      </tr>
    </thead>
    <tbody>";
    while($row = mysql_fetch_array($query))
      {
echo "<tr><td>" . $row['billno'] . "</td>";
echo "<td>" . $row['payment_date'] . "</td>";
echo "<td>" . $row['debit_amount'] . "</td></tr>";
}
}
?>
</tbody>
</table>
  </div>
</body>
</html>
