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
        <h1>update Form</h1>
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
            <input type="submit" name="submit" value="Update">
            
        </form>
        
    </div>

    <?php
        if(isset($_POST['submit']))
        {
          $sql = "UPDATE `book` SET `Book_ID`='$_POST[bid]',`Book_name`='$_POST[bname]',`Author_name`='$_POST[author]',`Edition`='$_POST[Edition]',`Quantity`='$_POST[Quantity]',`Department`='$_POST[Department]' WHERE `Book_ID`='$_POST[bid]' ";
          
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