<?php

	$teacher_id = $_GET["tid"];

	$course_id = $_GET["cid"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE teacher SET course_id='$course_id' WHERE teacher_id = $teacher_id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Course $course_id Assign to Teacher $teacher_id<br>";



	echo "<p><a href=index.html>Back</a>";

?>