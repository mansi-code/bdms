<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css/s1.css">
<div class="header">
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
<img src="banner3.png"   style="width: 100%;height: 300px;"/>
<h1 >LIST OF DONORS </h1>



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
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>

<table>
<tr>
<th>NAME</th>
<th>PHONE NUM</th>
<th>EMAIL</th>
<th>ADDRESS</th>
<th>CITY</th>
<th>BLOOD GROUP</th>
</tr>
<?php

					$city=$_POST['city'];
					 $bgroup=$_POST['bgroup'];
if(!empty($city)||!empty($bgroup))
{
$conn = mysqli_connect("localhost", "root", "", "bbms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 $sql = "SELECT name,mno,email,address,city,bgroup From donors Where city='$city' and bgroup='$bgroup '";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td>	 <td>" . $row["mno"] . "</td>	  <td>"
. $row["email"]. "</td>	  <td>" . $row["address"] . "</td> 	 <td>" . $row["city"] . "</td>   	    <td>" . $row["bgroup"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
} else {
							 echo "Both field are required";
							 die();
					}
?>
</table>
<br><br><br><br><br><br>
<div class="footer"><br><h2 align="center">Copyright@priya_deepanshi_rohini_mansi</h2></div>
</body>
</html>