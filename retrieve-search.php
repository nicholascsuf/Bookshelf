// Author: NicholasCSUF
//Date Created: 04-20-2022
//Copyright © NicholasCSUF All rights reserved. */
//Last modified by NicholasCSUF 4-25-2022



<?php
include 'config.php';

$search = $_POST['search'];
$isbn = $_POST['isbn_in'];

echo $isbn;
echo $search;
if(empty($search) xor empty($isbn)){

if(empty($search)){
 $query="select * from books where isbn like '%$isbn%'"; 
}
if(empty($isbn))
{
 $query="select * from books where book_name like '%$search%'"; 

}

$result = mysqli_query($con,$query);



}
else
{
    echo 'You did not enter a valid book name';

}


?>
