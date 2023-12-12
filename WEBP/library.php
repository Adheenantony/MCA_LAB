 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connected succesfully";

if($_POST){
   $assertion_no=$_POST["assertion_no"];
   $title=$_POST["title"];
   $author=$_POST["author"];
   $edition=$_POST["edition"];
   $publisher=$_POST["publisher"];
   $book_title=$_POST["book_title"];
$sql = "INSERT INTO `book_info`(`assertion_no`, `title`,`author`,`edition`,`publisher`,`book_title`)VALUES('$assertion_no','$title','$author','$edition','$publisher'$book_title')";

if ($conn->query($sql) === TRUE) {
  echo "New book added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  echo"<h1>Library</h1>";

  echo"<p>Assertion_no:$assertion_no</p>";

  echo"<p>Title:$title</p>";

  echo"<p>Author:$author</p>";

  echo"<p>Edition:$edition</p>";

  echo"<p>Publisher:$publisher</p>";
  
  echo"<p>Book_Title:$book_title</p>";

$conn->close();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>
<body>

<table border=2 align=center>

<tr><td>

<table cellspacing=10>

<tr><td colspan=3><h1>Book Information</h1></td></tr>
<form action="library.php" method="post">

<label for="assertion_no"><tr><td>Assertion_no:</td><td colspan=2></label>
<input type="number" id="assertion_no" name="assertion_no" required>

<label for="title"><tr><td>Title:</td><td colspan=2></label>
<input type="text" id="title" name="title" required>

<label for="author"><tr><td>Author:</td><td colspan=2></label>
<input type="text" id="author" name="author" recquired>

<label for="edition"><tr><td>Edition:</td><td colspan=2></label>
<input type="number" id="edition" name="edition" required>

<label for="publisher"><tr><td>Publisher:</td><td colspan=2></label>
<input type="text" id="publisher" name="publisher" required>


<tr><td colspan=3 align=center><input type="submit" value="Book Now"></td></tr>

<label for="book_title"><tr><td>Book_Title:</td><td colspan=2></label>
<input type="text" id="book_title" name="book_title" required>

<tr><td colspan=3 align=center><input type="submit" value="search"></td></tr>

</form>
</table>

</td></tr>

</table>

</body>

</html>
