
// Author: Nicholas J. Harney
//CWID:  889345928
//Date Created: 04-20-2022
//Copyright © Nicholas J. Harney. All rights reserved. */

<?php

$b_name = $_POST['b_name'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$isbn = $_POST['isbn'];


$servername = "localhost";
$username = "web";
$password = "!7eez546ASaqex";
$db = "bookshelf";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO books (isbn,book_name,author_ln,author_fn,genre,review,price,quantity)
VALUES
(
'$isbn',
'$b_name',
'$l_name',
'$f_name',
'default',
'0','10','10')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
