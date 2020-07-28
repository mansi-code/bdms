
<!DOCTYPE html>
<html>
<head>
<div class="header">
<link rel="stylesheet" type="text/css" href="css/s1.css">
	<div class="nav">
		<div id="a"><a href="home.php">Home</a></div>
		<div id="b"><a href="about.php">About Us</a></div>
		<div id="c"><a href="contact.php">Contact Us</a></div>
		<div id="d"><a href="search.php">Search donor</a></div>
		<div id="e"><a href="form.php">Become Donor</a></div>
		<div id="f"><a href="why_became_donor.php">Why Became Donor</a></div>
		<div id="g"><a href="blood_and_you.php">Blood And You</a></div>
	</div>
</div>
<br>
<style>

body {
	background-color: #faf2e4;
	margin: 10px 10%;
	font-family: sans-serif;
	}
h1 {
	text-align: center;
	font-family: serif;
	font-weight: normal;
	text-transform: uppercase;
	border-bottom: 1px solid #57b1dc;
}
</style>
<img src="banner3.png"  style="width: 100%;height: 300px;"/>
	

</head>
<body>

<h1>SEARCH FOR BLOOD </h1>

				<form action="list.php" method="POST" >
				<table>
					<tr>
					
					<td width="200px" height="50px">Enter City</td>
					<td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City" required></td>
				</tr>
				<tr>
					
					<td width="200px" height="50px">Select Blood Group</td>
					<td width="200px" height="50px">
						<select name="bgroup" required>
							<option selected hidden value="">SELECT BGROUP</option>
							<option value="op">O+</option>
							<option value="on">O-</option>
							<option value="abp">AB+</option>
							<option value="abn">AB-</option>
							<option value="bp">B+</option>
							<option value="bn">B-</option>
							<option value="ap">A+</option>
							<option value="an">A-</option>


						</select>
					</td>
				</tr>
				
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>
<br><br><br><br><br><br>
<div class="footer"><br><h2 align="center">Copyright@</h2></div>
</body>
</html>