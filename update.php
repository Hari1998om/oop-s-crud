<?php include_once('header-link.php'); ?>  
<?php error_reporting(0);

// include database connection file
include_once("database.php");
//Object
$updatedata=new DB_con();
if(isset($_POST['update']))
{
   // Get the userid
   $userid=intval($_GET['id']);
   // Posted Values
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];

   //Function Calling
   $sql=$updatedata->update($name,$email,$mobile,$userid);
   
   // Mesage after updation
   echo "<script>alert('Record Updated successfully');</script>";
   // Code for redirection
   echo "<script>window.location.href='index.php'</script>";
      
}
?>
<div class="container">
   <div class="row" style="margin-top: 50px;">
      <div class="col-md-6">
         <div class="panel-group">
            <div class="panel panel-primary">
               <div class="panel-heading">Update Data</div>
               <div class="panel-body">
                  <form name="insertrecord" method="post">
                     <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value="<?php echo htmlentities($row['name']);?>" class="form-control" name="name" placeholder="Name" required> 
                     </div>
                     <div class="form-group">
                        <label for=email>Email</label>
                        <input type="email" value="<?php echo htmlentities($row['email']);?>" class="form-control" name="email" placeholder="Email" required>
                     </div>
                     <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" value="<?php echo htmlentities($row['mobile']);?>" class="form-control" name="mobile" maxlength="10" placeholder="Mobile" required>
                     </div>
                     <button class="btn btn-primary" type="submit" name="update" value="Update">Update Data</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>        
<?php include_once('footer-link.php'); ?>   