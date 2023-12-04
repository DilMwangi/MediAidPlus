<?php
session_start();
?>

<html>

  <head>
    <title> Home | MediAid+ </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

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
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="mystore.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="medicalsupplieslist.php"><span class="glyphicon glyphicon-plus"></span> Medical Supplies Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> Customer Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li> -->

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> Customer Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
      <img src="images/MediAid+ Pic 3.jpg" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>

      <div class="item">
      <img src="images/MediAid+ Pic 6.jpg" style="width:100%;">
      <div class="carousel-caption">

      </div>
      </div>
      <div class="item">
      <img src="images/MediAid+ Pic 10.jpg" style="width:100%;">
      <div class="carousel-caption">
      
      </div>
      </div>

      <div class="item">
      <img src="images/MediAid+ Pic 2.jpg" style="width:100%;">
      <div class="carousel-caption">
      
      </div>
      </div>

      <div class="item">
      <img src="images/MediAid+ Pic 8.jpg" style="width:100%;">
      <div class="carousel-caption">
      
      </div>
      </div>
    
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
    <br>
    <!--<center><img src="images/orderimg.png" alt="image" height="50%"></center>-->
    <div class="orderblock">
    <h2>Need a Re-Supply?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Your Medical Supplies Now </a></center>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="wide2">
        <div class="col-xs-4 box">
          <img src="images/minimumx.png" height="200px">
        </div>
        <div class="col-xs-4 box">
          <img src="images/cardx.png">
        </div>
        <div class="col-xs-4 box">
          <img src="images/deliveryx.png">
        </div>

        <div class="col-xs-4 box">
          <h2><strong>NO MINIMUM<br> ORDER <br> </strong><hr> </h2>
          <h4>Order any amount<br> you want - no<br> restrictions</h4>
        </div>
        <div class="col-xs-4 box">
          <h2><strong>PAYMENT<br> OPTIONS <br> </strong><hr> </h2>
          <h4>Pay with credit/debit card <br> or pay on delivery</h4>
        </div>
        <div class="col-xs-4 box">
          <h2><strong>SUPERFAST<br> DELIVERY <br> </strong><hr> </h2>
          <h4>On-time delivery straight to<br> your dispensary</h4>
        </div>
    </div>

     <div class="col-xs-12 line"><hr></div>

     <div class="paragraph1">
     <h1>Welcome to MediAid+</h1>
    <!-- <p><br> 
      <h4>Remember last time when you had close guest from <font color="green"><strong>Mangalore</strong>, <strong>Kerala</strong>, <strong>Chennai</strong></font> announcing their surprise visit to your sweet home. Which is the follwed by sincere requests like let's have the <font color="green"><strong>famous biriyani of Chennai</strong>.</font> While someone is asking to eat Kallumakkaya Fry from <font color="green"><strong>Calicut in Kerala</strong>.</font> God they blurted as if the prime purpose was to taste the food than to see the well being of you. Well we know its not like they love to get pampered by you.
    </p>
    <p>
      Well whatever the shower love on us, we believe Athiti devo bhave... Right as always</h4>
    </p> -->
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
     <h1>MediAid+ - Fast Medical Supplies Delivery is a Lifesaver</h1>
    <p><br> 
      <h4>
      MediAid+ will help in making your quest for ordering medical supplies and getting them delivered to you a stress-free experience.
      </h4>
    </p>
    <p>
      <h4>
        <font color="green"><strong>Access our user-friendly website</strong></font>
      </h4>
    </p>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
          <h1>HOW TO ORDER MEDICAL SUPPLIES?</h1>
          <p>
            <h4>
              All it takes is 3 easy steps:
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>CREATE AN ACCOUNT</u>
            </h3>
          </p>
          <p>
            <h4>
              First, create an account with us by filling in your personal details.
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>SELECT THE MEDICAL SUPPLIES YOU NEED</u>
            </h3>
          </p>
          <p>
            <h4>
              Select as per your choice of medical supplies from the available products list and add them to your cart (you can always add or remove items from your cart).
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>CHOOSE YOUR ITEMS AND PAY ONLINE/OFFLINE</u>
            </h3>
          </p>
          <p>
            <h4>
              Once you are satisfied with the medical supplies you have selected, you can then click on your cart and proceed to checkout.
            </h4>
          </p>
          <p>
            <h4>
              That’s it! Once everything is in order, click the checkout, pay online or cash on delivery, it's your choice. We accept all major credit cards or you can pay cash on delivery.
            </h4>
          </p>
          <br>
          <p>
            <h4>
              We value our medical supplies, so let us value how they get to you.
            </h4>
          </p>
      </div>

        <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
</body>
</html>