<?php include('header.php') ?>
<center>
<table>
	<tr>
		<td align="left">        
			<?php
	
				$sql = "SELECT * FROM btglogin WHERE userlevel < 3";
				$result = $conn->query($sql);
				// output data of each row
				while($row = $result->fetch_assoc())
				{
						$userid = $row['userid'];
						$newuser = $row['usernames'];
						$newpass = $row['passwords'];
						$district = $row['district'];
				}
			?>
 		
				
		 	<form method="get" action="admin4.php" name="button1">
				<input type="Hidden" name="userid" value="<?php echo $userid;?>" />
		    	<input type="submit" value="Edit Admin Info" name="b13" style="width:250px; height: 24px; background-color: silver;" size=35 />
			</form>	

			<?php            			
				echo $newuser . " District    " . " " . $district;
			?> 
			<hr />
		</td>
	</tr>
</table>
</center>
</body>
</html>