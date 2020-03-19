<?php
    	include('include/config.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `members` where id='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Create Read Update Delete</title>
    </head>
    <body>
    	<h2>Edit</h2>
    	<form method="POST" action="update.php?id=<?php echo $id; ?>">
    		<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname">
    		<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname">
            <label>Email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
    		<input type="submit" name="submit">
    		<a href="index.php">Back</a>
    	</form>
    </body>
    </html>