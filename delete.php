<?php
    	$id=$_GET['id'];
    	include('include/config.php');
    	mysqli_query($conn,"delete from `members` where id='$id'");
    	header('location:index.php');
    ?>