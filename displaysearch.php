// Author: NicholasCSUF
//CWID:  889345928
//Date Created: 04-20-2022
//Copyright © NicholasCSUF. All rights reserved. */


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results in the Bookshelf</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Search Results in Bookshelf</h2>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">ISBN</th>
                  <th scope="col">Book Name</th>
                  <th scope="col">Author Last Name</th>
                  <th scope="col">Author First Name</th>
                  <th scope="col">Genre</th>
                  <th scope="col">Review</th>
                  <th scope="col">Price ($)</th>
                  <th scope="col">Quantity</th>

                </tr>
              </thead>
              <tbody>
                <?php include 'retrieve-search.php'; ?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
		     <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                    <td><?php echo $array[8];?></td>
                    <td><?php echo $array[9];?></td>
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
    </div>        
</div>

</body>
</html>

