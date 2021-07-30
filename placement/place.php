<!DOCTYPE html>
<html lang="en">
<head>
<title>Training and Placement Center</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="bg-div">
        <img class="pec" src="pec.png" width="50"  height="70">
         <img class="tnp" src="tnp.png" width="50"  height="70">
         <h2 style="color: white;">Training and Placement Center</h2>
    <div class="navbar">
       
        <a href="#">About Us</a>
        <a href="http://localhost/WTLab/placementt/place.html">Placement</a>
        <a href="http://localhost/WTLab/placement/admin.html">Admin</a>
        <a href="http://localhost/WTLab/placement/homepage.html">Home</a>
      </div>
    </div>
      <div class="header">
      
  
<?php
 include('connection.php');
 $sql="SELECT * FROM placement";
 $result=mysqli_query($con,$sql) or die('error getting values');
 echo "<table>";
 echo"<tr><th>Company Name</th><th>Company Type</th><th>Date of Arrival</th></tr>";
 echo "</td></tr>";
   while($row = $result->fetch_assoc()) 
  {
    echo "<tr><td>";
    echo $row['companyName'];
    echo "<td>";
    echo $row['companyType'];
    echo "<td>";
    echo $row['DOA'];  
  }
    
  echo "</table>";
?>   
<h3><a href="http://localhost/WTLab/placement/companycon.html"class="glow">Click Here</a> to learn more about companies</h3>

</div>

</body>
</html>