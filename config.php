//Modified by Nicholas Harney 4-20-2022
// Author: Nicholas J. Harney
//CWID:  889345928
//Date Created: 04-20-2022
//Copyright © Nicholas J. Harney. All rights reserved. */

<?php
session_start();
$host = "localhost"; /* Host name */
$user = "web"; /* User */
$password = "!7eez546ASaqex"; /* Password */
$dbname = "bookshelf"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
