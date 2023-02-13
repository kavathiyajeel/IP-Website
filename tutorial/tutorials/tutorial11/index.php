<?php
session_start();
$message = isset($_SESSION['message']) ? $_SESSION['message'] : "";
unset($_SESSION['message']);
require "connection/connection.php";
$query = "select
            id,
            full_name,
            email,
            password,
            city
            
        from
            registration
        where
            is_delete = 0";

$result = $db->query($query);
if ($result->num_rows > 0) {


}

?>

<html>
	<head>
		<title>User Data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script>
		$("document").ready(function() {
			$("a.delete").click(function() {
				$(this).parents("tr").fadeOut();
			});
			});
			</script>
		<style>
		body
		{
			height: 100%;
			display: flexbox;
			justify-content: center;
			align-items: center;
			padding: 10px;
			background-color:#0f0f0a;
		}
		.modal-content 
		{
			margin: 5% auto 15% auto; 
			width:80%;
			border:10px solid whitesmoke;
			border-color:#4491ea;
		}
		.font 
		{
			font-weight:bold;
		}
		.bg
		{
			background-color: while;
			
			color:#1d1a1a;
		}
			
				
		.sr 
		{
		          background-color:#0f0f0a;
                              text-align: center;
                              color: whitesmoke;
		}
                    
                    .tr
		{
			text-align: center;
		}
		table tr#ROW1  
		{
			background-color:black;
			
                              background-color: white;
		}

                            
				
		</style>
	</head>
	<div>

		<body>

			<table class="modal-content bg table table-condensed table-striped ">

				<h4 style="text-align: center; margin:top"><?=$message?></h4>
				
				<tr id="ROW1">
					<td colspan="4.5 ">
						<h3 style="font-weight: bold;">User Data</h3>
					</td>
					<td style="padding: 20px; text-align: center;">
						<a href="registration.php"><input type="submit" class="btn btn-primary w-26" value="Add Record">
					</td>

				</tr>
				<tr class="font sr">

					<td>Name</td>
					<td>Email</td>
					<td>Password</td>
					<td>City</td>
					<td>Action</td>
				</tr>
				<?php // LOOP TILL END OF DATA
				while ($rows = $result->fetch_assoc()) {
				?>
					<tr id="ROW1" class="tr">

						<td><?php echo $rows['full_name'];?></td>
						<td><?php echo $rows['email'];?></td>
						<td><?php echo $rows['password'];?></td>
						<td><?php echo $rows['city'];?></td>

						<td><a href="update-registration.php?id=<?=$rows['id']?>"><button type="button" class="btn btn-primary">Edit</button> </a>
							<a href="delete.php?id=<?= $rows['id'] ?>" class="delete"><button type="button" class="btn btn-danger">Delete</button></a>
						</td>
					</tr>
				<?php
				}
				?>
				</table>
			</div>
		</body>
		</html>
		