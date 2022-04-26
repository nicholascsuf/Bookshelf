<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "web";
$password = "!7eez546ASaqex";
$db = "bookshelf";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from books where author_ln like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo  $row["book_name"]."   ".$row["author_fn"]."  ".$row["author_ln"]. "  " .$row["genre"]. " " .$row["price"]. " " .$row["quantity"] . "<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>
