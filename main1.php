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
.t3{
	border-spacing:5px ;
	border: 5px;
	border-color: greenyellow;
}
.t3 td{
	border-radius: 10px;
	border-color: greenyellow;
	padding-left: 25px
}
.t4{
	border-spacing:5px ;
	border: 5px;
	border-color: greenyellow;
}
.t4 td{
	border-radius: 10px;
	border-color: greenyellow;
	padding-left: 25px
}
body{
	height: 100%;
}
</style>
</head>
<body bgcolor="black">
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
<table class="t3" width=60% border="5">
<tr>
<td><img src="pics\i1.jpg" height=150 
width=200"></td><td><img src="pics\i2.jpg" height=150 
width=200"></td><td><img src="pics\i3.jpg" height=150 
width=200"></td>
</tr></table><br>
<marquee width="60%"><font color="YELLOWGREEN" size="6">GO HARD OR GO HOME !
</font></marquee><br>
<table class="t4" width=60% border="5">
<tr>
<td><img src="pics\i4.jpg" height=150 
width=200"></td><td>
<img src="pics\i5.jpg" height=150 
width=200"></td><td>
<img src="pics\i6.jpg" height=150 
width=200"></td>
</tr></table>
<html><head>
<title>Live clock</title>
<style>
	.banner{
	height: 450px;
	width: 400px;
	position: relative;
	left: 800px;
	bottom: 480px;
	border: 5px;
	border-radius: 5px;
}
.d{
	width: 400px;
	position: relative;
	left: 110px;
	bottom: 50px;
}
body{
	padding-bottom: 0px;
	
}
</style>
</head>
<body>
	<br>
<font color="white" size="6">What Are You Waiting For ?</FONT>
<form name="Timer">
<input type="text" size="12" name="Clock">
</form>
<div class="banner">
	<img src="fit.jpeg" alt="" height="70%" width="100%">
	<img src="images.png" alt="" height="70px">
	<div class="d"><marquee width="60%" ><font color="YELLOWGREEN" size="6">HURRY!! OFFER ENDS SOON!!
	</font></marquee></div>
</div>
</body>
<script>
function showClock()
{
var CDate=new Date()
var hours=CDate.getHours()
var minutes=CDate.getMinutes()
var seconds=CDate.getSeconds()
var ampm="AM"

if (hours>12)
{
ampm="PM"
hours=hours-12
}
if(hours==0)
hours=12
if(minutes<=59)
minutes=0+minutes
if(seconds<=59)
seconds=0+seconds


document.Timer.Clock.value=hours+":"+minutes+":"+seconds+" "+ampm
setTimeout("showClock()",1000)
}
showClock()
</script>
</html>