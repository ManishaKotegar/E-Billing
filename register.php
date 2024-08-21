<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body style="background-image: url('images/login1.jpg');">

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">BOLT Sports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li class="active"><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>



    <div class="container" style="margin-top:7%">

<div class="container col-md-8 col-md-offset-2">
  <div class="jumbotron">
  <center><h2 style="margin-top:3%">Wellcome!</h2></center>

    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-6 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-6 columns">
              <input type="text" id="right-label" placeholder="hello" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-6 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-6 columns">
              <input type="text" id="right-label" placeholder="admin" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-6 columns">
              <label for="right-label" class="right inline">Address</label>
            </div>
            <div class="small-6 columns">
              <input type="text" id="right-label" placeholder="abc" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-6 columns">
              <label for="right-label" class="right inline">City</label>
            </div>
            <div class="small-6 columns">
              <input type="text" id="right-label" placeholder="Mangalore" name="city">
            </div>
          </div>
          <div class="row">
            <div class="small-6 columns">
              <label for="right-label" class="right inline">Pin Code</label>
            </div>
            <div class="small-6 columns">
              <input type="number" id="right-label" placeholder="123456" name="pin">
            </div>
          </div>
          <div class="row">
            <div class="small-6 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-6 columns">
              <input type="email" id="right-label" placeholder="hello@gmail.com" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-6 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-6 columns">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-4 columns">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
             </div>
          </div>
        </div>
      </div>
    </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        </div>
        </div>
        </div>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; All Rights Reserved.</p>
        </footer>

      </div>
    </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
