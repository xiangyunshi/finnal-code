<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inventory</title>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/Cart.css">

</head>
<body>
  
 <div class="container">
  <h2>Inventory</h2>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <p>MAXOMUS AIS</p> 
    </div>
    <div class="col-md-6">
     Date: <span class="value"><?php echo date("M d Y"); ?></span>
    </div>
</div>
 <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Receiving Date</th>
        <th>Quantity in stock</th>
        <th>Check By</th>
        <th>Discontinued</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>123</td>
        <td>Game1</td>
        <td>1000</td>
        <td>10.10</td>
        <td>2000</td>
        <td>Employee1</td>
        <td>Yes</td>
      </tr>
      <tr>
         <td>1234</td>
        <td>Game2</td>
        <td>2000</td>
        <td>10.12</td>
        <td>3000</td>
        <td>Employee2</td>
        <td>NO</td>
      </tr>
      <tr>
         <td>6454</td>
        <td>Game3</td>
        <td>3000</td>
        <td>10.14</td>
        <td>6000</td>
        <td>Employee3</td>
        <td>Yes</td>
      </tr>
    </tbody>
  </table>
</div></body>
</html>