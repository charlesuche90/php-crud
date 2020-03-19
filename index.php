<!DOCTYPE html>
    <html>
    <head>
    <title>Create Read Update Delete</title>
    </head>
    <body>
    	<div>
    		<form method="POST" action="add.php">
    			<label>Firstname:</label><input type="text" name="firstname">
    			<label>Lastname:</label><input type="text" name="lastname">
    			<label>Email:</label><input type="email" name="email">
    			<input type="submit" name="add">
    		</form>
    	</div>
    	<br>
    	<div>
    		<table border="1">
    			<thead>
    				<th>Firstname</th>
    				<th>Lastname</th>
    				<th>Email</th>
    				<th></th>
    			</thead>
    			<tbody>
    				<?php
    					include('include/config.php');
    					$query=mysqli_query($conn,"select * from `members`");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td><?php echo $row['firstname']; ?></td>
    							<td><?php echo $row['lastname']; ?></td>
    							<td><?php echo $row['email']; ?></td>
    							<td>
    								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
    								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    							</td>
    						</tr>
    						<?php
    					}
    				?>
    			</tbody>
    		</table>
    	</div>
    </body>
    </html>