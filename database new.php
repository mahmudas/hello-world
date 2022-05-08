<?php 
	$db = mysqli_connect('localhost', 'root', '', 'todo'); 

	$task = "";
	$id = 0;
	$prio = 1;

	if (isset($_POST['submit'])) {
		$task = $_POST['task'];
		$prio = $_POST['prio'];
		mysqli_query($db, "INSERT INTO tasks (task,prio) VALUES ('$task','$prio')"); 
        header('location: index new.php');
	}

    $results = mysqli_query($db,"SELECT * FROM tasks");

    if(isset($_GET['del'])){
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM tasks where id=$id");
		header('location: index new.php');
    }