<?php

include_once 'connect.php';

if(isset($_POST['save']))
{
	$fn = $MySQLiconn->real_escape_string($_POST['fn']);
	$ln = $MySQLiconn->real_escape_string($_POST['ln']);
	$photo = $MySQLiconn->real_escape_string($_POST['photo']);
	$job = $MySQLiconn->real_escape_string($_POST['job']);
	$word = $MySQLiconn->real_escape_string($_POST['words']);
	$inspire = $MySQLiconn->real_escape_string($_POST['inspire']);
	$dislike = $MySQLiconn->real_escape_string($_POST['dislike']);


	$SQL = $MySQLiconn->query("INSERT INTO students(fn,ln,photo,job,words,inspire,dislike) VALUES('$fn', '$ln', '$photo','$job', '$word', '$inspire', '$dislike')");


	if(!$SQL)
	{
		echo $MYSQLiconn->error;
	}
}

if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM students WHERE id =".$_GET['del']);

	header("Location: index.php");
}


if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE students SET fn='".$_POST['fn']."',ln='".$_POST['ln']."', photo='".$_POST['photo']."', job='".$_POST['job']."', words='".$_POST['words']."', inspire='".$_POST['inspire']."', dislike='".$_POST['dislike']."'WHERE id=".$_GET['edit']);
	header("Location: index.php");
}

?>