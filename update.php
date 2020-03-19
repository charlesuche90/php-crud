<?php
    	include('include/config.php');
    	$id=$_GET['id'];
     
    	$firstname=$_POST['firstname'];
    	$lastname=$_POST['lastname'];
     
    	mysqli_query($conn,"update `members` set firstname='$firstname', lastname='$lastname', email='$email' where id='$id'");
    	header('location:index.php');
    ?>