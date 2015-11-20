<?php
session_start();
include("dbconfig.php");
error_reporting(0);
if (isset($_POST['submit'])){
    processForm();
}else{
    displayForm();
}
function testUnique(){
	include("dbconfig.php");
    if (!isset($_SESSION['uid'])) return false;
    if (!isset($_POST['uid'])) return false;
    if (trim($_POST['uid']) !== $_SESSION['uid']) return false;
    return true;
}
function generateUID(){
	include("dbconfig.php");
    if (isset($_SESSION['uid'])){
        return $_SESSION['uid'];
    }else{
        $_SESSION['uid'] = uniqid("test_", true);
        return $_SESSION['uid'];
    }
}
function displayForm($msg=''){
	include("dbconfig.php");
    $msg = !empty($msg)?"<center><legend>$msg</legend></center>":'';
    $uid = generateUID();
    $field = isset($_POST['field']) ? $_POST['field'] : '';
	$field1 = isset($_POST['field1']) ? $_POST['field1'] : '';
echo <<<HTML
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Topics</title>
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
<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("rpc.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
		include("dbconfig.php");
		$('#inputString').val(thisValue);
		setTimeout("$('#suggestions').hide();", 200);
	}
</script>

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
height:1100px;
width:100%; 
left:0;
z-index:-1;
margin:0;
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
    
	body {
		font-family: Helvetica;
		font-size: 11px;
		color: #000;
	}
	
	h3 {
		margin: 0px;
		padding: 0px;	
	}

	.suggestionsBox {
		position: relative;
		left: 30px;
		margin: 10px 0px 0px 0px;
		width: 200px;
		background-color: #212427;
		-moz-border-radius: 7px;
		-webkit-border-radius: 7px;
		border: 2px solid #000;	
		color: #fff;
	}
	
	.suggestionList {
		margin: 0px;
		padding: 0px;
	}
	
	.suggestionList li {
		
		margin: 0px 0px 3px 0px;
		padding: 3px;
		cursor: pointer;
	}
	
	.suggestionList li:hover {
		background-color: #659CD8;
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
	include("dbconfig.php");
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
  				$connect1=mysql_connect($dbhost,$dbuser,$dbpass) or die("Couldn't connect");
				mysql_select_db($dbname) or die("Couldn't find db");
				
				$username = mysql_result(mysql_query('SELECT * FROM users WHERE `logged_in`=1'),0,'username');
				if($_SESSION{'loggedin'} == TRUE)
				{
				echo "<td><h3 align= 'center' style='color:green;'>Welcome ".$_SESSION{'username'}."<br/><a href='logout.php'>Log out</a></h3></td>";		
  				}
  				if($_SESSION{'loggedin'} != TRUE)
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
						<a rel="nofollow" href="contact-us.html" ><b style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px">Contact us</b></a></td>
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
<div id="backg">
HTML;

		set_time_limit(0);
		$connect = mysql_connect("dbserver.engr.scu.edu","iperli","") or die(mysql_error());
		mysql_select_db("sdb_iperli",$connect) or die(mysql_error());
		$query143 = 'select * from `users` where `logged_in` = 1';
		$result143 = mysql_query($query143, $connect);
		$user_name = mysql_result($result143, 0 , 'username'); 
if($_SESSION{'loggedin'} != TRUE)
	{
	echo'
	<h2 align="center">You must log in first<br/><a href="index.php"> log in</h2>
	</div>';



exit();
	
}
		
echo '
<center>

	<h1 align="center">Welcome to the Forum Creation Page</h1><br/><br/><br/>
	<div style="margin-left:0;margin-right:auto;"><table width="20%"><tr><td><h4 align="center">'.$msg.'</h4></td></tr></table></div>
';
echo <<<HTML
<div>

<form method="post" action="{$_SERVER['PHP_SELF']}" >
   	<div style="margin-left:auto;margin-right:auto;width:70%;">
   		

    	<fieldset style="width:40%;">
    			<input type="hidden" name="uid" value="$uid" />
		
				<p>Enter the Topic:</p>   
			
				<input type = "text" name = "topic_name" value="$field" id="inputString" onkeyup="lookup(this.value);" onblur="fill();" size ="40"/>		
		
				<div class="suggestionsBox" id="suggestions" style="display: none;">
				
					<img src="upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
					
						<div class="suggestionList" id="autoSuggestionsList">
							&nbsp;
						</div>
				</div>
	
				
				<input type = "hidden" name = "user_name" value="$username" size ="40"/>	
				
				<br/><br/>
	
				<input type="submit" name="submit" value="submit" />
		</fieldset>
    	
    	<br/><br/>
	
			
	
	</div>
</form>
	</div>
	<a href="forum.php?show"><input type="button" value="View Topics"/> </a>
		
    
</body>
</html>

HTML;
}

function processForm(){
	include("dbconfig.php");
    if (testUnique()){
    	set_time_limit(0);
		$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
		mysql_select_db($dbname,$connect) or die(mysql_error());
	
		$topic_name = $_POST['topic_name'];
		$user_name = $_POST['user_name'];
		if($topic_name != NULL)
		{
		$query = 'insert into topics (`user`,`topics`) values ("'.$user_name.'","'.$topic_name.'")';
		mysql_query($query) or die(mysql_error());
		$query1 = 'select `index` from topics where `topics` = "'.$topic_name.'" and `user` = "'.$user_name.'" order by date desc';
		$result1 = mysql_query($query1) or die(mysql_error());
		$index = mysql_result($result1,0);
		
        killVars();
        displayForm("Success, Your Topic '".$topic_name."' has been created	");
//<a href='forum.php?show'> View Topics? </a><br/>
 	}	
     else{
				displayForm("Enter the Topic Field");
        
 	 	}
     
        echo <<<HTML
 			 <center>
 			 <div> 
 			<a href='forum.php?posted=$index&user=$user_name'><input type="button" value="Post a Comment"/> </a>
 			</div>
 			</center>
HTML;
        
    } else {
        //you may want to do something else here
        killVars();
        displayForm("<center>You just refreshed your page</center>");
    }
    
}

function killVars(){
	include("dbconfig.php");
    unset($_SESSION['uid']);
    unset($_POST);
}
?>

	</body>
</html>