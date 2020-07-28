<html>
<head>
<link rel="stylesheet" type="text/css" href="css/s1.css">
<style>

body {
	background-color: #faf2e4;
	margin: 10px 10%;
	font-family: sans-serif;
	}
</style>

<h1 style="text-align:center; 		font-family: Pussycat, Algerian, Broadway,fantasy;
	font-weight:bolder; 	font-size:40px;		color:#000000;			;
      } ">THE BLOOD ALLIANCE</h1>
<h3 style="text-align:center; 		color:#FA8072;			font-family:"Courier New",courier,monospace;
 	font-weight:lighter;	font-variant: small-caps; ">Be a HERO ,give blood </h3>
<img src="banner2.jpg"   style="width: 100%;height: 300px;"/>

</head>

<body><?php
				
					$name=$_POST['name'];
					$fname=$_POST['fname'];
					$address=$_POST['address'];
					$city=$_POST['city'];
					$age=$_POST['age'];
					 $bgroup=$_POST['bgroup'];
					$email=$_POST['email'];
					$mno=$_POST['mno'];
					if(!empty($name)||!empty($fname)||!empty($address)||!empty($city)||!empty($age)||!empty($bgroup)||!empty($email)||!empty($mno))
					{

						$host="localhost";
						$dbUsername="root";
						$dbPassword="";
						$dbname="bbms";
    //create connection


    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
echo "Failed to connect to database ". mysqli_connect_error();
exit();
     //die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email  From donors Where email = ?  Limit 1";
  $INSERT = "INSERT Into donors (name, fname,address,city,age,bgroup,email,mno) values(?, ?, ?, ?, ?, ?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);

     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("ssssissi", $name, $fname,$address,$city,$age,$bgroup,$email,$mno);
      $stmt->execute();

      echo "DONOR REGISTRATION SUCCESSFULL! CONGRATULATIONS U ARE NOW A HERO !!  , CLICK ON HOME LINK TO GO TO HOME PAGE ";
     } else {
      echo "WE HAVE A DONOR REGISTERED using this email  , PLEASE CLICK ON BECOME A DONOR LINK TO TRY AGAIN ";
	
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
<p style="font-size:20px">
	<a href ="form.php"><i> BECOME A DONOR </i></a><br>
<a href ="home.php"><i>HOME</i></a>
</p>
<br><br><br><br><br><br>
<div class="footer"><br><h2 align="center">Copyright@</h2></div>
</body>
</html>