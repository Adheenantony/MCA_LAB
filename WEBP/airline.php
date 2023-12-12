 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tdss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connected succesfully";

if($_POST){
   $name=$_POST["name"];
   $destination=$_POST["destination"];
   $arrival=$_POST["arrival"];
   $departure_date=$_POST["departure_date"];
   $return_date=$_POST["return_date"];
$sql = "INSERT INTO `airline`(`name`, `destination`,`arrival`,`departure_date`,`return_date`)VALUES('$name','$destination','$arrival','$departure_date','$return_date')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  echo"<h1>Booking Information</h1>";

  echo"<p>Name:$name</p>";

  echo"<p>Destination:$destination</p>";

  echo"<p>Arrival:$arrival</p>";

  echo"<p>Departure Date:$departure_date</p>";

  echo"<p>Returning Date:$return_date</p>";


$conn->close();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking</title>
</head>
<body>

<table border=2 align=center>

<tr><td>

<table cellspacing=10>

<tr><td colspan=3><h1>Booking Information</h1></td></tr>
<form action="airline.php" method="post">

<label for="name"><tr><td>Name:</td><td colspan=2></label>
<input type="text" id="name" name="name" required>

<label for="destination"><tr><td>Destination:</td><td colspan=2></label>
<input type="text" id="destination" name="destination" required>

<label for="arrival"><tr><td>Arrival:</td><td colspan=2></label>
<input type="text" id="arrival" name="arrival" recquired>

<label for="departure_date"><tr><td>Departure Date:</td><td colspan=2></label>
<input type="date" id="departure_date" name="departure_date" required>

<label for="return_date"><tr><td>Returning Date:</td><td colspan=2></label>
<input type="date" id="return_date" name="return_date" required>


<tr><td colspan=3 align=center><input type="submit" value="Book Now"></td></tr>
</form>
</table>

</td></tr>

</table>

</body>

</html>
