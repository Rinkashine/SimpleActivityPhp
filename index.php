<html>
 <head>
 <title>Activity 1</title>
 </head>
 <body>
 <?php
	$first = " Mark Joseph";
	$last = "Manalo";
	$middle = "Ocenar";
	$name = "Mark Joseph Manalo";
	$stu = "02000089884";
	$program = "BSCS";
	$age = 20;
	$gender = "male";
	$year = "2022";
	$section = "BS701";
 ?>
 <center>
	<h2>Activity 1</h2>
 </center>
 <p>
 <?php echo "<b>Full name:</b>$first  $middle  $last</br>"?>
 <?php echo "<b>Student Nunmber</b> : $stu" ;?>
 <?php echo "</br><b>Course:</b> $program ";?>
 <?php echo "</br><b>Age:</b>$age years old";?>
 <?php echo "</br><b>Gender:</b> $gender";?>
 <?php echo "</br><b>Year:</b> $year";?>
 <?php echo "</br><b>Section:</b> $section";?>
 </p>
 </body>
</html>