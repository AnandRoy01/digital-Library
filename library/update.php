<?php
  include "connection.php";
?>
<html>
<head>
<title>Update</title>
<link rel="stylesheet" type="text/css" href="layout/styles/style.css">
<link rel="stylesheet" href="layout/styles/bootstrap.min.css">
</head>
<body style="background:url(images/pic1.jpg);">
    <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Online Library</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li class="active"><a href="update.php">Student Update</a></li>
          <li class="active"><a href="insertstudent.php">Insert Student</a></li>
          <li class="active"><a href="deletestudent.php">Delete Student</a></li>
          <li class="active"><a href="books.php">BOOKS</a></li>
          <li class="active"><a href="index.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div class="loginbox1">
        <h1>Update Form</h1>
        <form name="Registration" action="" method="post">
            <p>First Name</p>
            <input type="text" name="first" placeholder="Enter First name">
            <p>Last Name</p>
            <input type="text" name="last" placeholder="Enter Last name">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <p>USN</p>
            <input type="text" name="usn" placeholder="Enter USN">
             <p>Phone Number</p>
            <input type="text" name="phno" placeholder="Enter phone number">
            <p>Book ID</p>
            <input type="text" name="bid" placeholder="Enter Book ID">
            <p>Validity</p>
            <input type="text" name="val" placeholder="Enter No. of days">

            <input type="submit" name="submit" value="Update">
            
        </form>
        
    </div>

    <?php
        if(isset($_POST['submit']))
        {
          $sql = "UPDATE `student` SET `First_name`='$_POST[first]',`Last_name`='$_POST[last]',`Password`='$_POST[pass]',`USN`='$_POST[usn]',`phno`='$_POST[phno]',`Book_ID`='$_POST[bid]',`Validity`='$_POST[val]' WHERE `USN` = '$_POST[usn]' ";
          
          mysqli_query($db,$sql);
    ?>
    <script type="text/javascript">
      alert("UPDATE successful");
    </script>
    <?php
        
        }
    ?>

</body>
</html>