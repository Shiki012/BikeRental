<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: LogIn.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Bike & Scooter Rentals</title>
</head>
<body>
<div class="animation-area">
   <ul class="box-area">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
   <ul>
   <div class="header-text">
        <a stlye="active" href="home.php" class="logo">Bike & Scooter Rental</a>
      <nav>
        <ul>
          <div class="header-right"> 
            <a class="active" href="Transaction.php">Sale</a>
            <a href="Transaction.php">New</a>
            <a href="Transaction.php">Hot</a>
            <a href="AboutUs.php">About Us</a>
            <a href="logout.php">Log Out</a>
          </div>
        </ul>
      </nav>
   </div>
  <div id="div1">
        <h1>Bike & Scooter Rental System</h1>
        <div class style="padding: 50px">
          <a class="active" href="Transaction.php">Book Now</a>
        </div>
    </div>
    <div>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
    </div>
</div>
    
</body>
</html>