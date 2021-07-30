<?php
include("connection.php");
if(isset($_POST['save']))
{
    $companyName = $_POST['companyName'];
    $companyType= $_POST['companyType'];
    $DOA= $_POST['DOA']; 

    $sql = "INSERT INTO placement VALUES ('$companyName','$companyType','$DOA')";
}
if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
echo ' alert("New Company has been Added")';  //not showing an alert box.
echo '</script>';
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
   }
$con->close();
        
?>
