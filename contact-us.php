<?php
session_start();
error_reporting(0);
include("dbconfig.php");
echo <<<HTML
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="jquery-1.6.2.min.js"></script>
<script src="jquery/ui/jquery.ui.core.js"></script>
<script src="jquery/ui/jquery.ui.widget.js"></script>
<script src="jquery/ui/jquery.ui.button.js"></script>
<link rel="stylesheet" href="jquery/development-bundle/demos/demos.css">
<link rel="stylesheet" href="jquery/development-bundle/themes/base/jquery.ui.all.css">
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	color: #7F5A00;
}


a:visited {
	color: #7F5A00;
}

a:hover {
	color: red;
}

a:active {
color: yellow;
}
#usernam{
color:white;
}
#passwor{
color:white;
}
.heading
{
	font-size:35px;
	}
	h1{
text-align: center;
}
th{
font-size: larger;
height:2em;
}
.tabla{

margin-left: auto;
margin-right: auto;
margin-top: 0px;

}
#table1{
border-collapse: collapse;
}
#buttons1{
margin-left:46%;
}
.heading
{
	font-size:35px;
	}
.text1{
color:black;
}
#table12
{
background:white;
margin-left: auto;
margin-right: auto;
width:300px;
}
#regis{
backgroud:black;
border-collapse:collapse;
border:1px solid green;
width:300px
}
#backg{
background:url(images/neon.gif);
background-repeat:both;
border:clear;
height:1400px;
width:100%; 
left:0;
z-index:-1;
margin-top:0;
}
td{
text-align:center;
}
#text34{
color:#E80C5A;
width:50%;
text-align:justify;
margin-right:30px;
margin-left:auto;
}
input{
background:#91FF00;
}
#submitbox { 
font-famil	y: verdana, arial, sans-serif; 
font-size: 75%; 
color: #000000; 
font-weight: light; 
border: #797979 1px solid; 
background-color: #ffffff; 
}
body{
background:url(images/greenback.png);
}
 .focusField{  
        border:solid 2px #73A6FF;  
        background:#black;  
        color:#000;  
    }  
    .idleField{  
        background:#EEE;  
        color: #6F6FFF;  
        border: solid 2px #DFDFDF;  
    }  
</style>
<SCRIPT LANGUAGE="JavaScript">
var zoom="";
var zoom=new Array();

function initImg(imageObj){if(!zoom[imageObj.name] || zoom[imageObj.name]==undefined){zoom[imageObj.name]="out";}toggleImage(imageObj);}

function toggleImage(imageObj){if(zoom[imageObj.name]=="in"){imageObj.height="400";
imageObj.width="400";
zoom[imageObj.name]="out";}
else{
imageObj.height="1100";
imageObj.width="1200";
zoom[imageObj.name]="in";
}
}
</script>
</head>

<body >
<div class="body1">
	<table cellspacing="0" cellpadding="0" height="80"  border="0" bordercolor="#FFFFFF" style="border-bottom-color:#FFFF00; border-bottom-style: dashed; border-bottom-	width:2px; width: 99%; float: none;">
		<tbody>
			<tr height="50">
				<td align="center" width="10%" rowspan=2>
					<img width="100" height="100" src="images/bike.jpg" alt=""/>
				</td>
			
				<td align="center" width="75%">
  				<p align="center" style="text-shadow:3.8px 3.8px 3.8px white	; font-style:sans-serif; color:green; font-size:70px; font-weight: bold;"><b id="heading">ECO	 CYCLE</b></p>
  				</td>
  			
  				
HTML;
  			/*	$connect1=mysql_connect($dbhost,$dbuser,$dbpass) or die("Couldn't connect");
				mysql_select_db($dbname) or die("Couldn't find db");
				
				$username = mysql_result(mysql_query('SELECT * FROM users WHERE `logged_in`=1'),0,'username');
			*/	if($_SESSION{'loggedin'} == TRUE)
				{
				echo "<td><h3 align= 'center' style='color:green;'>Welcome ".$_SESSION{'username'}."<br/><a href='logout.php'>Log out</a></h3></td>";		
  				}
  				if($_SESSION{'loggedin'} == FALSE)
				{

echo <<<HTML
			<td>
				<table cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td>
							&nbsp;&nbsp;<a href="index.php">Sign In</a>
						</td>
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php">Sign Up</a>
						</td>
					</tr>
				</table>
				
			<form method="get" action="http://www.google.com/search">
			<table cellspacing="0" cellpadding="0">
			  <tbody>
    			<tr>
    				<td>
        				<img class="search-gif" border="0" src="http://lib.store.yahoo.net/lib/yhst-17013773219467/searchgif.gif" alt=""/>
      				</td>
      				<td>
        				<input class="search-input" type="text" style="width: 114px" size="10" name="query"/>
      				</td>
      				<td>
     					<input class="search-go" type="image" src="http://lib.store.yahoo.net/lib/yhst-17013773219467/go.gif"/>
      				</td>
      			</tr>
			  </tbody>
			</table>
			</form>
			</td>
HTML;
}		
echo <<<HTML
  			</tr>
  			<tr>
  			<td>	
				<table border="0" bordercolor="#FFFFFF" width="500" align="center">
					<tbody>
					<tr>
						<td align="center"
>
							<a rel="nofollow" href="final.php" ><b style="color:green;text-shadow:0.5px 0.5px 0.5px ;font-size:24px">Home</b></a>
						</td>
						<td align="center"
>
							<a rel="nofollow" href="quantity.php"><b  style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px" > Products </b></a>
						</td>
						<td align="center"
>
							<a rel="nofollow" href="forum.php?show"><b  style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px">Forum</b></a>
						</td>
						<td align="center"
>
							<a rel="nofollow" href="contact-us.html" ><b style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px">Contact us</b></a></td>
						<td align="center"
>
							<a href="game.php" ><b style="color:green;text-shadow:0.8px 0.8px 0.8px #22A6B0 ;font-size:24px">Games</b></a>
						</td>
					</tr>
					</tbody>
				</table>	
			</td>
			</tr>
		</tbody>
	</table>
HTML;
echo <<<HTML
	
			
	
<div id="backg">
<center>
<h2>Contact us:</h2>
<h1>Bharat Institute of Engineering and Technology</h1>
<i>Mngalpally(V),<br/>Ibrahimpatnam(M),<br/>Ranga Reddy Dist-501 510.<br/></i>
<br/><b>For questions about recycling, policies and campus visits.</b><br/>
<i>Phone: (08414) 252313, 252399, 252647</i>
<br/><a href="http://www.biet.ac.in">http://www.biet.ac.in</a></i>
<br/><i>E-mail: <a href="mailto:contact@biet.ac.in">contact@biet.ac.in</a></i>

<h3></b>Eco Cycle SCU Events</b></h3>
<b>P.Elizabeth Sharon Rose</b></br>
<i>Phone: +91 9885647551</i>

<h3><b>Our Partners</b></h3>
<b>D.Cathy Nithesha</b></br>
<i>Phone: +91 8142888024</i>

<div>
<br/><br/><h3>In Campus Recycling Stations</h3>
<img src="images/campus.png" height="400" width="400"  onclick="initImg(this);" />


</div>
</div>
</body>
</html>

HTML;
?>
