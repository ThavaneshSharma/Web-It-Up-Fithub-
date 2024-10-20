<html>
<head>
<title>PROJECT</title>
<style type="text/css">
h1.r{font-size:x-x-large;color:blue;font-family:Cooper Black;}
.t1{
	border-spacing:5px ;
	border: 2px;
	border-color: black;
	background-color: black;
	border-radius: 25px;
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.t1 td{
	border-radius: 20px;
	padding: 5px
}
.t1 td{
	background-color: greenyellow;
}
.t2{
	border-spacing:5px ;
	border: 2px;
	border-color: black;
	background-color: black;
	border-radius: 25px;
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.t2 td{
	border-radius: 20px;
	padding: 5px
}
.t2 td{
	background-color: greenyellow;
}
a{
	color: black;
}
a:link { 
  text-decoration: none;
} 
a:visited { 
  text-decoration: none; 
} 
a:hover { 
  text-decoration: none; 
} 
a:active { 
  text-decoration: none; 
}
</style>
</head>
<body bgcolor="grey">
<table class="t1" border="2px" width=100%>
<tr>
<td><font color="white" size="5"><A HREF="website.htm"><center>HOME</td>
<td><font color="white"size="5"><a href="products.htm"><center>PRODUCTS</td>
<td><font color="white" size="5"><A HREF="health.htm"><center>KNOW YOUR HEALTH</td>
</a></td>
</tr></table>

<table class="t2" width=100%  >
<tr>
	<td><font size="5"><A HREF="suggestions.html"><center>FEEDBACK</td>
<td><font  size="5"><A HREF="contact us - Copy.html"><center>CONTACT US</td>

<td><font  size="5"><a href="login.php"><center>
LOGOUT</a></td>

</tr>
</table>
<br><br>

<h1> Sell Your Products </h1>
<form method="post">
CUSTOMER NAME:(Required)<br>
<input type="text"name="na" required/>
<br>
<br>
ITEM NAME:(Required)<br>
<input type="text" name="add" required/>
<br>
<br>
ITEM DESCRIPTION:<br>
<textarea rows="8" cols="45" name="desc">
</textarea>
<br>
<br>
AMOUNT:<br>
<input type="number"
name="AMOUNT:"/>
<br>
<br>
EMAIL ID:<br>
<input type="text" name="id"/>
<br><br>
<input type="submit" value="Sell your item"/></form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tanisha";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(!empty($_POST["na"])||!empty($_POST["add"]))
	
	{
		 
		
	    $sqll="insert into sales values('".$_POST['na']."','".$_POST['add']."','".$_POST['desc']."','".$_POST['AMOUNT:']."','".$_POST['id']."')";	
		if ($conn->query($sqll) === TRUE)
	    {
		   echo "<center><font face = Verdana size =6 color = black >YOUR DATA HAS BEEN RECORDED</font></center>";
	    }
		
    }
  $conn->close();
}
?>
<form action="displaying_data.php">
<input type="submit" value="VIEW AVAILABLE ITEMS ON SALE"  >
</form>


</body>
</html>