<?php


include 'config.php';

$query="select * from books limit 50"; 

$result=mysqli_query($con,$query);

?>
