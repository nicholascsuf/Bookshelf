// Author: NicholasCSUF
//Date Created: 04-20-2022
//Copyright © NicholasCSUF All rights reserved.
//Last modified by NicholasCSUF 4-25-2022


<?php


include 'config.php';

$query="select * from books limit 50"; 

$result=mysqli_query($con,$query);

?>
