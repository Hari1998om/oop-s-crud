<?php //Deletion
// include database connection file
include_once("database.php");
if(isset($_GET['del']))
    {
// Geeting deletion row id
$userid=$_GET['del'];
$deletedata=new DB_con();
$sql=$deletedata->delete($userid);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
    }
?>