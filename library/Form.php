<?php
  include "connection.php";
?>
<html>
<head>
<title>Student Login</title>
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
          <li class="active"><a href="Login.php">Student Login</a></li>
          <li class="active"><a href="Admin.php">Admin Login</a></li>
          <li class="active"><a href="studentbook.php">BOOKS</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div class="loginbox1">
        <h1>Form</h1>
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

            <input type="submit" name="submit" value="Login">
            
        </form>
        
    </div>

    <?php
        if(isset($_POST['submit']))
        {
          $count = 0;
          $sql1= "SELECT usn FROM `STUDENT`";
          $res = mysqli_query($db,$sql1);
          while($row = mysqli_fetch_assoc($res)){
            if($row['usn'] == $_POST['usn']){
              $count = $count+1;
            }
          }
          if($count == 0){
          $sql = "INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[pass]', '$_POST[usn]', '$_POST[phno]', '$_POST[bid]', '$_POST[val]')"; 
          mysqli_query($db,$sql);
    ?>
    <script type="text/javascript">
      alert("insert successful");
    </script>
    <?php
        }
        else{
          ?>
    <script type="text/javascript">
      alert("The USN already Exist!");
    </script>
    <?php
        }
        }
    ?>

</body>
</html>