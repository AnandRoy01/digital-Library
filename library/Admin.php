<?php
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="layout/styles/style.css">
	<link rel="stylesheet" href="layout/styles/bootstrap.min.css">
</head>
<body style="background:url(images/pic1.jpg);">
    <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Online Library</a></h1>
      </div>
      <nav id="mainav" class="fl_right">&nbsp;
        <ul class="clear">
           <li class="active"><a href="index.php">Home</a></li>
          <li class="active"><a href="Login.php">Student Login</a></li>
          <li class="active"><a href="Admin.php">Admin Login</a></li>
          
        </ul>
      </nav>
    </header>
  </div>
  <div class="loginbox">
    <img src="images/avatar.png" class="avatar">
        <h1>Admin Login</h1>
        <form name="login" action="" method="post">
            <p>AdminID</p>
            <input type="text" name="Aid" placeholder="Enter Admin ID">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <!--<a href="#">Lost your password?</a><br>-->
        </form>
        
    </div>
<?php
    if(isset($_POST['submit']))
    {
      $count=0;
      $sql = "SELECT * FROM `admin` WHERE aid = '$_POST[Aid]' && password = '$_POST[pass]';";
      $res = mysqli_query($db,$sql);
      $count = mysqli_num_rows($res);
      if($count == 0){
        ?>
        
        <script type="text/javascript">
          alert("the username and password does not match");
        </script>
      <!--
      <div class="alert alert-warning" style="width: 700px;margin-left: 300px; background-color: #de1313;">
          <strong>The username and password dosen't match!</strong>
      </div>-->
            <?php
      }
      else{
            ?>
                 <script type="text/javascript">
                  window.location = "adminpage.php";
                </script>
               <?php
         }
    }
              ?>
</body>
</html>