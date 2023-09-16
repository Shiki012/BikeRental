<?php 

include "config.php";

error_reporting(0);

session_start();

if (isset($_SESSION['fullname'])) {
    header("Location: Bike Rental System.php");
}

if (isset($_POST['submit'])) {
	$fullname = $_POST['fullname'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$modeofpayment = $_POST['modeofpayment'];
	$email = $_POST['email'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$pdate = $_POST['pdate'];
	$rdate = $_POST['rdate'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM table1 WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO table1 (fullname, contact, address, modeofpayment, email, size, color, pdate, rdate)
					VALUES ('$fullname', '$contact', '$address', '$modeofpayment', '$email', '$size', '$color', '$pdate', '$rdate')";
			$result = mysqli_query($conn, $sql);
        }
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/BookingForm.css">

	<title>Booking Form</title>
</head>
<body>
	<div class="container">
		<a href="Transaction.php" class="previous round">&#8249;</a>
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Booking Form</p>
			<div class="input-group">
				<input type="text" placeholder="Full name" name="fullname" value="<?php echo $fullname; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Contact Number" name="contact" value="<?php echo $contact; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
			</div>
			<div class="input-group">
				<label for="modeofpayment">Mode of Payment</label>
				<select name="modeofpayment" id="modeofpayment">
					<option value="cash">Cash</option>
					<option value="creditcard">Credit Card</option>
					<option value="debitcard">Debit Card</option>
				</select>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<label for="size">Size</label>
				<select name="size" id="size">
					<option value="kid">Kid</option>
					<option value="adult">Adult</option>
				</select>
			</div>
			<div class="input-group">
				<label for="color">Color</label>
				<select name="color" id="color">
					<option value="black">Black</option>
					<option value="white">White</option>
					<option value="green">Green</option>
					<option value="red">Red</option>
					<option value="orange">Orange</option>
				</select>
			</div>
			<div class="input-group">
				<input type="date" name="pdate" placeholder="dd-mm-yyyy" value="" min="01-01-1997" max="12-31-2030">
			</div>
			<div class="input-group">
				<input type="date" name="rdate" placeholder="dd-mm-yyyy" value="" min="01-01-1997" max="12-31-2030">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Confirm Booking</button>
			</div>
			
		</form>
	</div>
</body>
</html>