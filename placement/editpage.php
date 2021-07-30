<?php
include("connection.php");
if(isset($_POST['save']))
{
    $companyName = $_POST['companyName'];
    
    $DOA= $_POST['DOA']; 

    $sql = " UPDATE placement SET DOA='$DOA' WHERE companyName='$companyName'";
}      
if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
echo ' alert("Date of Arrival has been updated")';  //not showing an alert box.
echo '</script>';
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
   }
$con->close();
        
?>

