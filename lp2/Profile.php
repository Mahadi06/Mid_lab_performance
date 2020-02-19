<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="logcheck.php">
		<table align="center">
			<tr>
				<td colspan="2" align="center"><h1>Person Profile</h1></td>
			</tr>
			<tr>
				<td><label>Name</label></td>
				<td><input type="text" name="name"><br></td>

			</tr>

			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name="email"><br></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td ><input type="radio" name="gender" value="male">Male 
		<input type="radio" name="gender" value="female">Female 
		<input type="radio" name="gender" value="others">Others <br></td>
			</tr>

			<tr>
				<td>Date of Birth:</td>
				<td><input type="date" name="" value=""/></td>
			</tr>
			<tr>
				<td>Blood Group</td>
				<td><select name="blood">
			<option>A+</option>
			<option>B+</option>
			<option>A-</option>
			<option>B-</option>
			<option>O-</option>
			<option>O+</option>
		</select></td>
			</tr>
			<tr>
				<td>Degree</td>
				<td><input type="checkbox" name="degree">SSC
					<input type="checkbox" name="degree">HSC
					<input type="checkbox" name="degree">BSC</td>
			</tr>

			<tr>
				<td>Photo</td>
				<td><button>Browse</button></td>
			</tr>

			<tr>
				<td><input type="Submit" name="submit" value="submit"></td>
				<td><button>Reset</button></td>
			</tr>

		</table>
	</form>

</body>
</html>
