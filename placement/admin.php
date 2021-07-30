<?php      
    include('connection.php');  
    
		$email = $_POST['email'];
		$pwd= $_POST['pwd'];  
	  $sql = "Select *from adminn where Email='$email' and Password='$pwd'";
		$result = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
	
  
if($count==1)
{
  header("Location:http://localhost/WTLab/placement/wx.php");
}
else{
  echo "<script>alert('Login Failed.Inavlid email or password.')</script>";
}

$con->close();
        
?>  