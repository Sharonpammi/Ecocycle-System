<?php 
session_start();
error_reporting(0);
echo <<<HTML
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
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
	color: #C600FF;
}
#footercontainer
{
float:right;
/*	margin-left:74.99%;*/
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
color:black;
}
#passwor{
color:black;
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
#maindiv{
left:300px;
}
#backg1{
background:url(images/logo.jpg);
background-repeat:no-repeat;
height:56.7%;
width:100%
z-index:-1;

}
td{
text-align:right;
}
#text34{
color:#E80C5A;
width:50%;
text-align:justify;
margin-right:70px;
margin-left:auto;
}
input{
background:#4CFF65;
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
<!--
<script type="text/javascript" >
$(document).ready(function() {  
    $('input[type="text"]').addClass("idleField");  
    $('input[type="password"]').addClass("idleField");  
    $('input[type="text"]').focus(function() {  
        $(this).removeClass("idleField").addClass("focusField");  
        if (this.value == this.defaultValue){  
            this.value = '';  
        }  
        if(this.value != this.defaultValue){  
            this.select();  
        }  
    });
    $('input[type="password"]').focus(function() {  
        $(this).removeClass("idleField").addClass("focusField");  
        if (this.value == this.defaultValue){  
            this.value = '';  
        }  
        if(this.value != this.defaultValue){  
            this.select();  
        }  
    });  
$(function() {
		$( "input:submit, a, button", ".demo" ).button();
		$( "a", ".demo" ).click(function() { return false; });
	});    
    $('input[type="password"]').blur(function() {  
        $(this).removeClass("focusField").addClass("idleField");  
        if ($.trim(this.value == '')){  
            this.value = (this.defaultValue ? this.defaultValue : '');  
        }  
    });  
   
    $('input[type="text"]').blur(function() {  
        $(this).removeClass("focusField").addClass("idleField");  
        if ($.trim(this.value == '')){  
            this.value = (this.defaultValue ? this.defaultValue : '');  
        }  
    });  
});
</script>
-->
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
  				<p align="center" style="text-shadow:3.8px 3.8px 3.8px white	; font-style:sans-serif; color:green; font-size:70px; font-weight: bold;"><b id="heading">ECO CYCLE</b></p>
  				</td>
  			
  				
HTML;
  			//	$connect1=mysql_connect("dbserver.engr.scu.edu","iperli","") or die("Couldn't connect");
			//	mysql_select_db("sdb_iperli") or die("Couldn't find db");
				
			//	$username = mysql_result(mysql_query('SELECT * FROM users WHERE `logged_in`=1'),0,'username');
				if($_SESSION{'loggedin'} == TRUE)
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
<a href="register.php">Sign Up</a>&nbsp;&nbsp;
</td>
<td>
<div id="CollapsiblePanel2" class="CollapsiblePanel" style="width:142px">
  <div class="CollapsiblePanelTab" align="center" >Login</div>
  <div class="CollapsiblePanelContent">
        <form id="form1" name="form1" method="post" action="login.php">
          <p>
            <label for="username"><a id="usernam">USER NAME</a></label>
            <input type="text" name="username" id="username"  />
            <label for="password"><a id="passwor">PASSWORD</a></label>
            <input type="password" name="password"  id="password" />
         <a href="forgot.php">Forgot Password?</a>
            <input type="submit" name="submit"  id="submit" value="Log in" />
          </p>
        </form>
    </div>
</div>
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
    </tr>
  </tbody>
</table>
</form>
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
						<a rel="nofollow" href="contact-us.php" ><b style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px">Contact us</b></a></td>
					<td align="center"
>
						<a href="game.php" ><b style="color:green;text-shadow:0.8px 0.8px 0.8px #22A6B0 ;font-size:24px">Games</b></a>
					</td>
					<td>
					</td>
			
					</tr>
					</tbody>
				</table>	
			</td>
		
<td width="10%" rowspan=4>
HTML;

echo <<<HTML

</td>
</tr>
</tbody>
</table>
<div id="maindiv">
<center>
<div id="backg1">

<div id="text34">
<p>We are group of 
Green Products, Ewaste Products &amp; More.
Isn't this a time you Go Green &amp; Use Products that Help You Live Eco Friendly?

Browse our earth friendly store and see what we offer in the way of eco friendly products.  Going Green is getting easier everyday. In addition to buying Eco-Friendly Products you will also be able to learn about about living green . ECO Cycle brings the Best Green Products for customers, from recycled goods to disc chair to quality sneakers.  </p>
</div>
</div>
<div id="CollapsiblePanel1" class="CollapsiblePanel"  align="center" >
  <div class="CollapsiblePanelTab" ><h2 style="color:#9C3" align="left">Would you like to know different things that we can recycle? Click here</h2></div>
  <div class="CollapsiblePanelContent">
    <table>
    <tr>
    <td>
    <img src="images/aluminum-can.jpeg" width="150" height="150" />
    </td><td>
    <li align="left" style="color:#F00 ; size:40px;"><b >
    ALUMINIUM CANS: </b> </li>
    <p align="left">
    Recycling aluminum prevents the need to mine for ore to create new aluminum. It requires 4 tons of ore to create 1 ton of aluminum.
Recycling aluminum cans takes 95 percent less energy than creating new ones.The energy it takes to produce one can could produce 20 recycled cans.The energy saved from recycling one aluminum can, could power a 100-watt light bulb for four hours or a television for three hours.
According to the Can Manufacturers Institute, 53 million pounds of aluminum cans were recycled in 1972. In 2011, that number has grown to 1,612 million pounds, earning Americans one billion dollars. The cans are recycled and the money earned in several ways.
</p>
</td>
</tr>
<tr>
<td>
<img src="images/arrowbatteries.JPG" width="150" height="150" />
</td>
<td>
<li align="left" style="color:#F00 ; size:40px;"><b>
BATTERIES:</b></li>
    <p align="left">These are essential to recycle and contain dangerous heavy metals and chemicals like mercury, so that cannot be tossed into the rubbish. They also can't be sent curbside. When you initially purchase your batteries, don't buy them for the long term. They expire and drain down even when not in use. Consider rechargeable batteries to lower the amount of batteries you consume.  It's a fun lesson for them, and you'll be spreading the word about this eco friendly alternative.
      
 </p>
 </td>
 </tr>
 <tr>
 <td>
 <img src="images/E-Waste-Recycle.jpg" width="150" height="150" />
 </td>
 <td>
 <li align="left" style="color:#F00 ; size:40px;"><b>
COMPUTERS:</b></li>
    <p align="left">
    “E-waste” refers to any unwanted electronic device or Cathode Ray Tube (CRT) and is classified as universal waste. E-waste frequently contains hazardous materials, predominantly lead and mercury, and is produced by households, businesses, governments, and industries. A major reason many people do not recycle their computer is for security reasons. To tackle this hurdle, erase your hardrive. It's not as hard as it sounds, and it's easy for others to access your information even if you've deleted sensitive information from your computer. Erasing your hard drive isn't sending documents to the computer's recycling bin, so don't think that's all you have to do it again.</p>
 </td>
 </tr>
 <tr>
 <td>
 <img src="images/banner-image.jpg" width="150" height="150"/>
 </td>
 <td>
 <li align="left" style="color:#F00 ; size:40px;"><b>
MATTRESSES:</b></li>
    <p align="left">Even mattresses can be recycled. First, evaluate the condition of the mattress. If it's still perfectly usable, put the mattress on Craigslist or Earth911.org to find out what transfer station is closest to you that will accept the mattress. Call before you go to find out if they really do accept mattresses to save yourself the gas and the wasted trip.
    </p>
</td>
</tr>
</table>
  </div>
</div>


<div  align="right">
  <a class="bottompage" href="quantity.php">Products</a>
  <a class="bottompage" href="forum.php?show">Forum</a>
  <a class="bottompage" href="contact-us.html">Contact Us</a>
  <a class="bottompage" href="game.php">Games</a>
</div>
<div id="footercontainer">
	  <a href="http://validator.w3.org/check?uri=http://students.engr.scu.edu/~iperli/Assign3/forum page.html">
	  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0!" height="31" width="88" />
	  </a>&nbsp;
	
	  <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://students.engr.scu.edu/~iperli/Assign3/startpage.css">
	  <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" />
	  </a>  
	</div>

<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1",{ contentIsOpen: false });
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2",{ contentIsOpen: false });
</script>
</div>
</center>
</div>
</body>
</html>
HTML;
?>