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
          <li class="active"><a href="updatebook.php">Update Books</a></li>
          <li class="active"><a href="bookinsert.php">Insert Books</a></li>
          <li class="active"><a href="bookdelete.php">Delete Books</a></li>
          <li class="active"><a href="adminpage.php">Back</a></li>
          <li class="active"><a href="index.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div class="loginbox">
        <h1>Delete Form</h1>
        <form name="Registration" action="" method="post">
            <p>Book_ID</p>
            <input type="text" name="bid" placeholder="Enter Book ID">
            <p>Book_name</p>
            <input type="text" name="bname" placeholder="Enter Book name">
            <p>Edition</p>
            <input type="text" name="Edition" placeholder="Enter Edition">
            <input type="submit" name="submit" value="Delete">
            
        </form>
        
    </div>

    <?php
        if(isset($_POST['submit']))
        {
          $sql = "DELETE FROM `book` WHERE `Book_ID`='$_POST[bid]'";
          
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