<?php
session_start();
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quiz</title>
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
background:white;
background-repeat:both;
border:clear;
height:1100px;
width:100%; 
left:0;
z-index:-1;
margin-top:0;
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
<!-- Begin
var ans = new Array;
var done = new Array;
var yourAns = new Array;
var explainAnswer = new Array;

var score = 0;
ans[1] = "b";
ans[2] = "b";
ans[3] = "d";
ans[4] = "c";
ans[5] = "d";

explainAnswer[1]="Sand- The main ingredient in making glass is sand.";
explainAnswer[2]="Enough to heat 250,000 homes- The average American spends 8 months of their lives opening junk mail, so save your time and some trees and recycle that paper!";
explainAnswer[3]="Everyone- so sort through your garbage and head to the recycling center!";
explainAnswer[4]="November 15- Since 1997, communities across the country have come together on November 15 to celebrate America Recycles Day.";
explainAnswer[5]="All the above- Glass, Plastic and Paper are all recyclable materials";

function Engine(question, answer) {
yourAns[question]=answer;
}

function Score(){
var answerText = "How did you do?\n------------------------------------\n";
for(i=1;i<=5;i++){
   answerText=answerText+"\nQuestion :"+i+"\n";
  if(ans[i]!=yourAns[i]){
    answerText=answerText+"\nThe correct answer was "+ans[i]+"\n"+explainAnswer[i]+"\n";
  }
  else{
    answerText=answerText+" \nCorrect! \n";
    score++;
  }
}

answerText=answerText+"\n\nYour total score is : "+score+"\n";

//now score the user
answerText=answerText+"\nComment : ";
if(score<=0){
answerText=answerText+"You need to learn some more";
}
if(score>=1 && score <=2){
answerText=answerText+"bit more practice";
}
if(score>=3 && score <=3){
answerText=answerText+"doing ok";
}
if(score>4){
answerText=answerText+"Congratulations! You have good recycling knowledge!";
}

alert(answerText);

}
//  End -->
</script>


</head>

<body >
	<table cellspacing="0" cellpadding="0" height="80"  border="0" bordercolor="#FFFFFF" style="border-bottom-color:#FFFF00; border-bottom-style: dashed; border-bottom-	width:2px; width: 99%; float: none;">
		<tbody>
			<tr height="50">
				<td align="center" width="10%" rowspan=2>
					<img width="100" height="100" src="images/bike.jpg" alt=""/>
				</td>
			
				<td align="center" width="75%">
  				<p align="center" style="text-shadow:3.8px 3.8px 3.8px white	; font-style:sans-serif; color:green; font-size:70px; font-weight: bold;"><b id="heading">ECO	 CYCLE</b></p>
  				</td>
  			
  				
<?php
  			/*	$connect1=mysql_connect("dbserver.engr.scu.edu","iperli","") or die("Couldn't connect");
				mysql_select_db("sdb_iperli") or die("Couldn't find db");
				
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
?>	
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

	
			
	
<div id="backg">
        <DIV ALIGN="CENTER">
<h1>Recycling quiz</h1>
<b>How good is your recyling knowledge?</b>
<hr>
<FORM>
    <table>
        <tr>
            <td>
<b>1. The main ingredient in making glass is?</b><br>
<input type=radio name="q1" value="a" onClick="Engine(1, this.value)">a) Aluminium<br>
<input type=radio name="q1" value="b" onClick="Engine(1, this.value)">b) Sand<br>
<input type=radio name="q1" value="c" onClick="Engine(1, this.value)">c) Fiber<br>
<input type=radio name="q1" value="d" onClick="Engine(1, this.value)">d) Plastic<p>
    </td>
    </tr>
    <tr>
        <td>
<b>2. How much junk mail do Americans receive in one day?</b><br>
<input type=radio name="q2" value="a" onClick="Engine(2, this.value)">a) Enough to power a TV for one year<br>
<input type=radio name="q2" value="b" onClick="Engine(2, this.value)">b) Enough to heat 250,000 Homes<br>
<input type=radio name="q2" value="c" onClick="Engine(2, this.value)">c) 1000 trees worth<br>
<input type=radio name="q2" value="d" onClick="Engine(2, this.value)">d) Enough to power a TV for one year<p>
    </tr>
    </td>
    <tr>
        <td>
<b>3. Who can recycle?</b><br>
<input type=radio name="q3" value="a" onClick="Engine(3, this.value)">a) You<br>
<input type=radio name="q3" value="b" onClick="Engine(3, this.value)">b) Your Mom<br>
<input type=radio name="q3" value="c" onClick="Engine(3, this.value)">c) Your Teachers <br>
<input type=radio name="q3" value="d" onClick="Engine(3, this.value)">d) Everyone  <p>
    </tr>
    </td>
    <tr>
        <td>
<b>4. When is America Recycles Day?</b><br>
<input type=radio name="q4" value="a" onClick="Engine(4, this.value)"> February 14<br>
<input type=radio name="q4" value="b" onClick="Engine(4, this.value)"> December 25<br>
<input type=radio name="q4" value="c" onClick="Engine(4, this.value)"> November 15<br>
<input type=radio name="q4" value="d" onClick="Engine(4, this.value)"> July 4<p>
    </tr>
        </td>
    <tr>
        <td>
<b>5. Which of the following material comes under the category of "Recyclables"?</b><br>
<input type=radio name="q5" value="a" onClick="Engine(5, this.value)"> Glass<br>
<input type=radio name="q5" value="b" onClick="Engine(5, this.value)"> Paper<br>
<input type=radio name="q5" value="c" onClick="Engine(5, this.value)"> Plastic<br>
<input type=radio name="q5" value="d" onClick="Engine(5, this.value)"> All the Above<p>
    </tr>
    </td>
    <tr>
        <td>
    </table>
<CENTER>
<input type=button onClick="Score();" value="Submit and review">
</CENTER>
</FORM>
</DIV>


    </body>
</html>
