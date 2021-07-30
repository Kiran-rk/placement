<?php
include("connection.php");
if(isset($_POST['save']))
{
    $companyName = $_POST['companyName'];
    $sql = " DELETE from placement  WHERE companyName='$companyName'";
}      
if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
echo ' alert("Company has been deleted")';  //not showing an alert box.
echo '</script>';
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
   }
$con->close();
        
?>

