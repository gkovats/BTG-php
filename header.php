<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BTG Contact List</title>

<?php
require 'config.php';

// if(!isset($_SESSION['start']))
// {       
// 	  $_SESSION['start'] = time();
// }
// if (isset($_SESSION['start']) && (time() - $_SESSION['start'] >500))
// {
// session_unset();
// session_destroy();
// location("index.php");          
//   exit;

// } else {
//	$adminlevel = $_SESSION['adminlevel']; 
//	$district = $_SESSION['district']; 
// }
?>

</head>

<body>

	<center>
			<table cellpadding="0" cellspacing="0" border="0" align="center">
	<?php if ($adminlevel > 1) { ?>
			    <tr>
			    	<td valign="top">
						<form method="get" action="admin3.php"name="button21">
				        	<input type="submit" value="Add an Admin" name="b21" style="width:125px; height: 24px; background-color: lightgray;" size=35>
						</form>
			        </td>
			    	<td valign="top">
						<form method="get" action="admin4.php"name="button22">
				        	<input type="submit" value="Update an Admin" name="b22" style="width:125px; height: 24px; background-color: lightgray;" size=35>
						</form>
			        </td>
			    	<td valign="top">
						<form method="get" action="admin5.php"name="button23">
				        	<input type="submit" value="Delete an Admin" name="b23" style="width:125px; height: 24px; background-color: lightgray;" size=35>
						</form>
			        </td>
				</tr>
	<?php }  ?>
			    <tr>
			    	<td valign="baseline">
						<form method="get" action="add1.php" name="button11">
		    	        	<input type="submit" value="Add a Contact" name="b11" style="width:125px; height: 24px; background-color: whitesmoke;" size=35 />
			          	</form>
					</td>
			    	<td valign="baseline">
						<form method="get" action="update1.php"name="button12">
				        	<input type="submit" value="Update Contact Info" name="b12" style="width:125px; height: 24px; background-color: whitesmoke;" size=35>
						</form>
			        </td>
			    	<td valign="baseline">
						<form method="get" action="delete1.php" name="button13">
		    	        	<input type="submit" value="Delete a Contact" name="b13" style="width:125px; height: 24px; background-color: whitesmoke;" size=35 />
			          	</form>
					</td>
				</tr>
                <tr>
			    	<td valign="baseline" colspan="3" align="center">
						<form method="get" action="loginpost.php" name="button14">
							<input type="Hidden" name="sorter" value="city, zip" />
		    	        	<input type="submit" value="View all FROM btgcontacts" name="b13" style="width:250px; height: 24px; background-color: silver;" size=35 />
			          	</form>
					</td>
			</table>
        </center>
        <br /><br /><br />
        
