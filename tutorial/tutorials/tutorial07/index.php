<html>
<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}

?>

	<head>
		<title>User Data</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script>
	   $("document").ready(function(){
            	$("a.delete").click(function(){
            		$(this).parents("tr").fadeOut();
            	});
            });
		</script>
		
		<style>
				
				body{
                    height: 100%;
                    display: flexbox;
                    justify-content: center;
                    align-items: center;
                    padding: 10px;
                    background-color:#0f0f0a;
					}
				.modal-content {
					margin: 5% auto 15% auto; 
					width:80%;
					border:8px solid whitesmoke;
					}
				.font{
						font-weight:bold;
					}
				.bg{
					
                    background-color: while;
					color:#1d1a1a;
					}
			
				
				.sr{
					background-color:#0f0f0a;
                    text-align: center;
                    color: whitesmoke;
					}
                    
                .tr{
				
                    text-align: center;
					}
				.table tr#ROW1
				{
					background-color:black;
                    background-color: white;
				}

				.logout{
					align:right;
				}
		</style>
	</head>
	<div>
	<body>
		<table class="modal-content bg table table-condensed table-striped ">
		
			
			<tr  id="ROW1">
				<td colspan="8"><h3 style="font-weight: bold;">User Data</h3></td>
				
				<td>
				<a href="#"><button type="button" class="btn btn-primary">Add Record</button> </a>
                <a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a></td>	
			</tr>
			<tr class="font sr">
				<td>Sr. no</td>
				<td>Name</td>
				<td>Username</td>
				<td>Age</td>
                <td>Birth Date</td>
				<td>Country</td>
                <td>State</td>
                <td>City</td>
				<td>Action</td>
			</tr>
			<tr id="ROW1" class="tr">
				<td>1</td>
				<td>Jeel Kavathiya</td>
				<td>jkavathiya300@rku.ac.in</td>
				<td>20</td>
				<td>17/09/2002</td>
				<td>India</td>
                <td>Gujarat</td>
                <td>Keshod</td>
				<td>
				<a href="#"><button type="button" class="btn btn-info">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>
            <tr id="ROW2" class="tr">
				<td>2</td>
				<td>Jatin Solnki</td>
				<td>jsolnki145@rku.ac.in</td>
				<td>20</td>
				<td>08/12/2002</td>
				<td>India</td>
                <td>Gujarat</td>
                <td>Keshod</td>
				<td><a href="#"><button type="button" class="btn btn-info">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>
            <tr id="ROW3" class="tr">
				<td>3</td>
				<td>Nirav Patel</td>
				<td>npatel754@rku.ac.in</td>
				<td>19</td>
				<td>07/06/2002</td>
				<td>India</td>
                <td>Gujarat</td>
                <td>Daman</td>
				<td><a href="#"><button type="button" class="btn btn-info">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>
            <tr id="ROW4" class="tr">
				<td>4</td>
				<td>Darapan Hirapara</td>
				<td>dhirapara438@rku.ac.in</td>
				<td>20</td>
				<td>24/11/2003</td>
				<td>India</td>
                <td>Gujarat</td>
                <td>Rajkot</td>
				<td><a href="#"><button type="button" class="btn btn-info">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>
            <tr id="ROW5" class="tr">
				<td>5</td>
				<td>Sahil Gajera</td>
				<td>sgajera492@rku.ac.in</td>
				<td>20</td>
				<td>08/06/2002</td>
				<td>India</td>
                <td>Gujarat</td>
                <td>Gondal</td>
				<td><a href="#"><button type="button" class="btn btn-info">Edit</button> </a>
                <a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>
			
		</table>
        
           
    
		</div>
	</body>
</html>