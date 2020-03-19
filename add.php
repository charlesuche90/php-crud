<?php
    	include('include/config.php');
     
    	$firstname=$_POST['firstname'];
    	$lastname=$_POST['lastname'];
    	$email=$_POST['email'];
     
    	mysqli_query($conn,"insert into `members` (firstname,lastname,email) values ('$firstname','$lastname','$email')");
    	header('location:index.php');
     
    ?>