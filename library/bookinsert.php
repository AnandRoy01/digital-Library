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
          <li class="active"><a href="updatebook.php">Update Books</a></li>
          <li class="active"><a href="bookinsert.php">Insert Books</a></li>
          <li class="active"><a href="bookdelete.php">Delete Books</a></li>
          <li class="active"><a href="adminpage.php">Back</a></li>
          <li class="active"><a href="index.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div class="loginbox1">
        <h1>Book Form</h1>
        <form name="Registration" action="" method="post">
            <p>Book_ID</p>
            <input type="text" name="bid" placeholder="Enter Book ID">
            <p>Book_name</p>
            <input type="text" name="bname" placeholder="Enter Book name">
            <p>Author_name</p>
            <input type="text" name="author" placeholder="Enter Author name">
            <p>Edition</p>
            <input type="text" name="Edition" placeholder="Enter Edition">
             <p>Quantity</p>
            <input type="text" name="Quantity" placeholder="Enter Quantity">
            <p>Department</p>
            <input type="text" name="Department" placeholder="Enter Department">
            <input type="submit" name="submit" value="INSERT">
            
        </form>
        
    </div>

    <?php
        if(isset($_POST['submit']))
        {
          $count = 0;
          $sql1= "SELECT Book_ID FROM `book`";
          $res = mysqli_query($db,$sql1);
          while($row = mysqli_fetch_assoc($res)){
            if($row['Book_ID'] == $_POST['bid']){
              $count = $count+1;
            }
          }
          if($count == 0){
          $sql = "INSERT INTO `book` VALUES ('$_POST[bid]','$_POST[bname]','$_POST[author]','$_POST[Edition]','$_POST[Quantity]','$_POST[Department]')";
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
      alert("The Book already Exist!");
    </script>
    <?php
        }
        }
    ?>

</body>
</html>