<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM teacher" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>Teacher id</th> <th>Teacher name</th> <th>Course id</th>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $teacher_id </td>";
		echo "<td> $name </td>";
	    if ($course_id == "")
		{
			
			echo "<td> No Course Added </td>";
		}
		else{
			echo "<td> $course_id </td>";
		}
		
		
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=index.html> Back </a>";
?>