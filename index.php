<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!--Google font-->
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <!--fontawesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--animate-->
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <!--owl carousel css-->
      <link rel="stylesheet"  href="css/owl.carousel.css">
      <link rel="stylesheet"  href="css/owl.theme.green.css">
      <title>title</title>
   </head>
   <body>
      <div class="container" style="margin-top:50px;">
         <div class="row">
            <div class="col-md-6">
               <a href="form.php" class="btn btn-primary active" role="button" aria-pressed="true">Add User</a>
            </div>
         </div>
         <table class="table table-bordered">
            <thead>
               <tr class="bg-primary text-light">
                  <th scope="col">Sr</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Added on</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
			 			  <?php
			 			  	// include database connection file
								require_once'database.php';
							$fetchdata = new DB_con();
							$sql = $fetchdata->fetchdata();
							$cnt = 1;
							while ($row = mysqli_fetch_array($sql)) {
							?>
					    <tr>
					    <td><?php echo htmlentities($cnt); ?></td>
					    <td><?php echo htmlentities($row['name']); ?></td>
					    
					    <td><?php echo htmlentities($row['email']); ?></td>
					    <td><?php echo htmlentities($row['mobile']); ?></td>
					    
						 <td><a href="update.php?id=<?php echo htmlentities($row['id']); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></td>

						 <td><a href="delete.php?del=<?php echo htmlentities($row['id']); ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                   
					    </tr>
							<?php
    					// for serial number increment
    					$cnt++;
							} ?>
            </tbody>
         </table>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </body>
</html>