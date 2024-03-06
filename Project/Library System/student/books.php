<?php
  include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="bk_img"> </div>
<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
    body {
        height: 630px;
	margin-top: 0px;
  background-image: url("lib2.jpg");

}
</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
		
			<h1 style="color: white;font-family: Georgia; font-size: 35px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">LIBRARY MANAGEMENT SYSTEM</h1>
		</div>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
				</ul>
			</nav>

		</header>
		<section>
	
    <style>
    table, th, td {
       border: 1px solid white;
       border-collapse: collapse;
    }
        th, td {
     background-color: #96D4D4;
    }
        </style>
        </head>
        <body>

        <h1 style=" font-size: 45px;font-family: Garamomd; text-align: center;">List of Books</h1><br>
        
        <table style="width:100%">

        <?php



		$res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`BID` ASC;");

		
          ;
            
			echo "<tr style= width=100%; height=60px ; text-align: center; vertical-allign: middle;>";

            
				//Table header
                {
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";}
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{ 
				echo "<tr style= width=100%; height=60px ; text-align:center; vertical-allign: middle;>";
				echo "<td>"; echo $row['BID']; echo "</td>";
				echo "<td>"; echo $row['NAME']; echo "</td>";
				echo "<td>"; echo $row['AUTHORS']; echo "</td>";
				echo "<td>"; echo $row['EDITION']; echo "</td>";
				echo "<td>"; echo $row['STATUS']; echo "</td>";
				echo "<td>"; echo $row['QUANTITY']; echo "</td>";
				echo "<td>"; echo $row['DEPARTMENT']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>"
        
;	?>
</body>
</html>
