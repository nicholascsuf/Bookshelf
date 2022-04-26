//Modified by NicholasCSUF 4-20-2022
// Author: NicholasCSUF
//CWID:  889345928
//Date Created: 04-20-2022
//Copyright © NicholasCSUF. All rights reserved.

<?php
session_start();
$host = "localhost"; 
$user = "web";
$password = "!7eez546ASaqex"; 
$dbname = "bookshelf"; 

$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
