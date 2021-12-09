<?php include_once('header-link.php'); ?>  
<?php
// include database connection file
require_once'database.php';
// Object creation
$insertdata=new DB_con();
if(isset($_POST['insert']))
{
   // Posted Values
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   
   //Function Calling
   $sql=$insertdata->insert($name,$email,$mobile);
   if($sql)
   {
   // Message for successfull insertion
   echo "<script>alert('Record inserted successfully');</script>";
   echo "<script>window.location.href='index.php'</script>";
   }
   else
   {
   // Message for unsuccessfull insertion
   echo "<script>alert('Something went wrong. Please try again');</script>";
   echo "<script>window.location.href='index.php'</script>";
   }
}
?>
<div class="container">
   <div class="row" style="margin-top: 50px;">
      <div class="col-md-6">
         <div class="panel-group">
            <div class="panel panel-primary">
               <div class="panel-heading">Insert Data</div>
               <div class="panel-body">
                  <form name="insertrecord" method="post">
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required> 
                     </div>
                     <div class="form-group">
                        <label for=email>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                     </div>
                     <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name="mobile" maxlength="10" placeholder="Mobile" required>
                     </div>
                     <button class="btn btn-primary" type="submit" name="insert" value="Submit">Insert Data</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>        
<?php include_once('footer-link.php'); ?>        