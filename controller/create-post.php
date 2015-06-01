<?php
	require_once(__DIR__ . "/../model/config.php");

	$first = filter_input(INPUT_POST, "first", FILTER_SANITIZE_STRING);
	//This post means it is receiving data called title and filtering it
	$last = filter_input(INPUT_POST, "last", FILTER_SANITIZE_STRING);
	//this post means it is receiving data called post and is filtering it
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	

	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles'); 
	
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET first = '$first', last = '$last', email = '$email', post = '$post'");
	//this connection goes into query and inserts into posts and sets the title and than posts it.

	if($query) {
		echo "<p>Successfully inserted post: $first</p>";
		echo "Posted on: " . $date->format("M/D/Y") . " at " . $time->format("g:i");
	}
	//if there is nothing wrong, it will say that the post went through.
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	//if the connection isn't going through, it will say it has an error.
	

