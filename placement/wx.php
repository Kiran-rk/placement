<?php 
include("connection.php");
?>
<!DOCTYPE>
<html>
  <head>
    <title>Admin Panel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style5.css">
 
    </style>
  </head>
  <body>
  <div class="bg-div">
        <img class="pec" src="pec.png" width="50"  height="70">
         <img class="tnp" src="tnp.png" width="50"  height="70">
         <h2 style="color: white;">Training and Placement Center</h2>
    
    </div>
   
    <div id="mySidenav" class="sidenav">
    <a href="http://localhost/WTLab/placement/homepage.html" id="about">Home</a>
  <a href="http://localhost/WTLab/placement/admin.html" id="blog">Admin</a>
  <a href="http://localhost/WTLab/placement/place.php" id="projects">Placement</a>
  <a href="#" id="contact">About Us</a>
  </div>
   <button class='addbtn' onclick="openForm()"><i class="fa fa-create"></i>+ Add New</button>
  <button class='editbtn' onclick="editForm()"><i class="fa fa-edit"></i> Edit</button>
  <button class='cancelbtn' onclick="deleteForm()"><i class="fa fa-trash"></i> Delete</button>
  
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
<?php
    
?>
 
   <div class="form-popup" id="myForm">
  <form action="add.php" method="post" class=form-container>
    <h1>Add New Company</h1>
     <label>Company Name</label><br>
      <input type="text" name="companyName" id="companyName" required ><br>
      <label>Company Type</label><br>
      <input type="text" name="companyType" id="companyType" required><br>
      <label>Date of Arrival</label><br>
      <input type="date" name="DOA" id="DOA" required><br>
      
    <button type="submit" class="btn" id='save' name='save' >Save</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<div class='form-popup' id='editForm'>
  <form action='editpage.php' method="post" class="form-container">
    <h1>EditCompany</h1>
     <label>Company Name</label><br>
      <input type='text' name='companyName' id='companyName' required ><br>
      <label>Date of Arrival</label><br>
      <input type='date' name='DOA' id='DOA' required><br>      
    <button type='submit' class='btn' id='save' name='save' >Edit</button>
    <button type='button' class='btn cancel' onclick='closeForm1()'>Close</button>
  </form>
</div>
<div class="form-popup" id="deleteForm">
  <form action="delete.php" method="post" class=form-container>
    <h1>Delete Company</h1>
     <label>Company Name</label><br>
      <input type="text" name="companyName" id="companyName" required ><br>
      
    <button type="submit" class="btn" id='save' name='save' >Delete</button>
    <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
  </form>
</div>
    <script src="js1.js">

</script>
  </body>
</html>