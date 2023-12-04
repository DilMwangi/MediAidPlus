<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | MediAid+ </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/edit_medical_supply.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function display_alert()
    {
      alert("Data Updated Successfully!!!");
    }
  </script>

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">MediAid+</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>




<div class="container">
    <div class="jumbotron">
     <h1>Hello Manager! </h1>
     <p>Manage all your orders from here</p>

    </div>
    </div>

<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="mystore.php" class="list-group-item active">My Medical Supplies</a>
    		<a href="view_medicalsupplies.php" class="list-group-item ">View Medical Supplies</a>
    		<a href="add_medical_supply.php" class="list-group-item ">Add Medical Supplies</a>
    		<a href="edit_medical_supply.php" class="list-group-item ">Edit Medical Supplies</a>
    		<a href="delete_medical_supply.php" class="list-group-item ">Delete Medical Supplies</a>
        <a href="delete_customers.php" class="list-group-item ">Delete Customer</a>
        <a href="edit_orders.php" class="list-group-item ">Edit Orders</a>
        <a href="delete_orders.php" class="list-group-item ">Delete Orders</a>
        <a href="view_order_details.php" class="list-group-item ">View Orders Report</a>
        <a href="view_customer_report.php" class="list-group-item ">View Customer Report</a>
    	</div>
    </div>
    


    
    

<div class="col-xs-3">

  <div class="form-area" style="padding: 10px 10px 200px 10px; ">
  
    <div style="text-align: center;">
      <h3>Click On a Specific Order <br><br></h3>
    </div>
    <?php
   
 

    if (isset($_GET['submit'])) {
    $order_ID = $_GET['corderid'];
    $supplyname = $_GET['csupplyname'];
    $price = $_GET['cprice'];
    $quantity = $_GET['cquantity'];
    $status = $_GET['cstatus'];


    $query = mysqli_query($conn, "UPDATE orders set
    supplyname='$supplyname', price='$price', quantity='$quantity', status='$status' where order_ID='$order_ID'");
    }
    $query = mysqli_query($conn, "SELECT * FROM orders o WHERE o.order_ID ORDER BY order_ID");
    while ($row = mysqli_fetch_array($query)) {

      ?>

      <div class="list-group" style="text-align: center;">
        <?php
      echo "<b><a href='edit_orders.php?update= {$row['order_ID']}'>{$row['supplyname']}</a></b>";  
        ?>
      </div>


    <?php
    }
    ?>
    

    <?php
    if (isset($_GET['update'])) {
    $update = $_GET['update'];
    $query1 = mysqli_query($conn, "SELECT * FROM orders WHERE order_ID=$update");
    while ($row1 = mysqli_fetch_array($query1)) {

    ?>
</div>
</div>



<div class="container">
<div class="col-md-6">
 <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="edit_orders.php" method="GET">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> EDIT & CONFIRM CUSTOMER ORDERS HERE </h3>

          <div class="form-group">
            <input class='input' type='hidden' name="corderid" value=<?php echo $row1['order_ID'];  ?> />
          </div>

          <div class="form-group">
            <label for="username"><span class="bg-info" style="margin-right: 5px;">Username: <?php echo $row1['username'];  ?></span></label>
          </div> 

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Medical Supply Name: </label>
            <input type="text" class="form-control" id="dname" name="csupplyname" value=<?php echo $row1['supplyname'];  ?> placeholder="Your Medical Supply name" required="">
          </div>     

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Item Price: </label>
            <input type="text" class="form-control" id="dprice" name="cprice" value=<?php echo $row1['price'];  ?> placeholder="Price (KES)" required="">
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Item Quantity: </label>
            <input type="text" class="form-control" id="ddescription" name="cquantity" value=<?php echo $row1['quantity'];  ?> placeholder="Medical Supply Quantity" required="">
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Order Status: </label>
            <input type="text" class="form-control" id="ddescription" name="cstatus" value=<?php echo $row1['status'];  ?> placeholder="Status of Order" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box" > Confirm </button>    
      </div>
        </form>


    <?php
}
}


  ?>
      
  </div>




</div>


<?php
mysqli_close($conn);
?>
</div>
</div>

  </body>
<br>
  </footer>
</html>