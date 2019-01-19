<?php
  include "connection.php";
?>
<html>
<head>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="layout/styles/style.css">
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
          <li class="active"><a href="Form.php">Insert Student</a></li>
          <li class="active"><a href="deletestudent.php">Delete Student</a></li>
          <li class="active"><a href="books.php">BOOKS</a></li>
          <li class="active"><a href="index.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>

  <h2 style="color: black;text-align: center;">User Details</h2>
  <?php
    $sql = "SELECT * FROM `STUDENT`";
    $res=mysqli_query($db,$sql);
    echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color:white; '>";
    //Table header
      echo "<th>"; echo"First_name"; echo "</th>";
      echo "<th>"; echo"Last_name"; echo "</th>";
      echo "<th>"; echo"Password"; echo "</th>";
      echo "<th>"; echo"USN"; echo "</th>";
      echo "<th>"; echo"phno"; echo "</th>";
      echo "<th>"; echo"Book_ID"; echo "</th>";
      echo "<th>"; echo"Validity"; echo "</th>";
      echo "</tr>";
      while($row=mysqli_fetch_assoc($res))
      {
        echo "<tr>";
        echo "<td>".$row['First_name']."</td>";
        echo "<td>"; echo $row['Last_name']; echo "</td>";
        echo "<td>"; echo $row['Password']; echo "</td>";
        echo "<td>"; echo $row['USN']; echo "</td>";
        echo "<td>"; echo $row['phno']; echo "</td>";
        echo "<td>"; echo $row['Book_ID']; echo "</td>";
        echo "<td>"; echo $row['Validity']; echo "</td>";
        echo "</tr>";

      }
    echo "</table";
  ?>
</body>
</html>