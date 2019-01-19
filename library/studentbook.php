<?php
	include "connection.php";
?>
<!Doctype html>
<html>
<head>
	<title>BOOKS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="layout/styles/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="layout/styles/style.css" rel="stylesheet" type="text/css" media="all">
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



	<h2 style="color: black;text-align: center;">List Of Books</h2>
	<?php
		$sql = "SELECT * FROM `BOOK`";
		$res=mysqli_query($db,$sql);
		echo "<table class='table table-bordered table-hover' >";
		echo "<tr style='background-color:white; '>";
		//Table header
			echo "<th>"; echo"BOOK_ID"; echo "</th>";
			echo "<th>"; echo"BOOK_Name"; echo "</th>";
			echo "<th>"; echo"Author_Name"; echo "</th>";
			echo "<th>"; echo"Edition"; echo "</th>";
			echo "<th>"; echo"Quantity"; echo "</th>";
			echo "<th>"; echo"Department"; echo "</th>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>".$row['Book_ID']."</td>";
				echo "<td>"; echo $row['Book_name']; echo "</td>";
				echo "<td>"; echo $row['Author_name']; echo "</td>";
				echo "<td>"; echo $row['Edition']; echo "</td>";
				echo "<td>"; echo $row['Quantity']; echo "</td>";
				echo "<td>"; echo $row['Department']; echo "</td>";
				echo "</tr>";

			}
		echo "</table";
	?>
</body>
</html>
