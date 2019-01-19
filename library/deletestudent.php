<?php
  include "connection.php";
?>
<html>
<head>
<title>Delete</title>
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
  <div class="loginbox">
        <h1>Delete Form</h1>
        <form name="Registration" action="" method="post">
            <p>First Name</p>
            <input type="text" name="first" placeholder="Enter First name">
            <p>Last Name</p>
            <input type="text" name="last" placeholder="Enter Last name">
            <p>USN</p>
            <input type="text" name="usn" placeholder="Enter USN">
            <input type="submit" name="submit" value="Delete">
            
        </form>
        
    </div>

    <?php
        if(isset($_POST['submit']))
        {
          $sql = "DELETE FROM `student` WHERE `USN`='$_POST[usn]'";
          
          mysqli_query($db,$sql);
    ?>
    <script type="text/javascript">
      alert("DELETE successful");
    </script>
    <?php
        
        }
    ?>

</body>
</html>