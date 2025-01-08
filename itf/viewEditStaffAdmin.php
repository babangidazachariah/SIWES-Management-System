<?php
SESSION_START();
	$errorMessage ='';
	
	if((!empty($_SESSION['itfStaffID'])) && (strcmp($_SESSION['itfStaffRole'],"Admin") == 0))
	{
		
		
		if(!empty($_GET['action']) && !empty($_GET['id']))
		{
		
			//Update School Supervisor comment for a given student's activity
			require_once '../connection.php';
		
			if($_GET['action'] == "Deactivate")
			{
				$sql = "UPDATE tblStaff SET staffStatus = '0' WHERE staffNumber='". $_GET['id'] ."'";
				mysqli_query($con, $sql); // or die(mysqli_error($con));
				
				if( mysqli_affected_rows($con) > 0 )
				{
					$errorMessage = "Successfully Deactivated Account!!!";
					
				}else{
					$errorMessage = $sql ." : Deactivation Unsuccessful, Try Again!!!";
				}
			}elseif($_GET['action'] == "Activate"){
				
				$sql = "UPDATE tblStaff SET staffStatus = '1' WHERE staffNumber='". $_GET['id'] ."'";
				mysqli_query($con, $sql); // or die(mysqli_error($con));
				
				if( mysqli_affected_rows($con) > 0 )
				{
					$errorMessage = "Successfully Activated Account!!!";
					
				}else{
					$errorMessage = "Activation Unsuccessful, Try Again!!!";
				}
			}else{
			
				//Staff Details Present in the tblAdmin table, thus, we update only
				
				$sql = "UPDATE tblStaff SET  staffDesignation='". $_GET['action'] ."' WHERE staffNumber='". $_GET['id'] ."'";
				mysqli_query($con, $sql); // or die(mysqli_error($con));
				
				
				if( mysqli_affected_rows($con) > 0 )
				{
					$errorMessage = "Successfully Made ". $_GET['action'];
					
				}else{
					$errorMessage = "Operation Unsuccessful, Try Again";
				}
				
			}
			
		}
	}else{
		
		header("location:../siwesHome.php");
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="shortcut icon" href="../favicon.ico">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>.::ITF NIGERIA::.</title>

<script language="JavaScript1.2" type="text/javascript" src="../MenuAssets/mmcssmenu.js"></script>

<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script><script type="text/javascript" src="../js/stscode.js"></script>

<script src="../SpryAssets/SpryData.js" type="text/javascript"></script>

<link rel="stylesheet" href="../MenuAssets/style.css"/>

<style type="text/css">



/*Example CSS for the two demo scrollers*/



#pscroller1{

width: 200px;

height: 100px;

border: 0px solid black;

padding: 5px;

background-color: lightyellow;



}



#pscroller2{

width: 350px;

height: 120px;

border: 0px solid black;

padding: 3px;

vertical-align:middle;



}



#pscroller2 a{

text-decoration: none;

}



.someclass{ //class to apply to your scroller(s) if desired

	

}



</style>



<script type="text/javascript">



/*Example message arrays for the two demo scrollers*/





var pausecontent2=new Array()

pausecontent2[0]='<img src="../images/logo.png" width="40" height="40"><div style="margin-top:-30px;padding-left:45px; font-size:14px;"><a href="ftp/ITF_NEWSPAPER_ADVERT.pdf"><STRONG>INTRODUCING THE ITF ONLINE PAYPORTAL PLATFORM <br/>FOR PAYMENT OF TRAINING CONTRIBUTIONS<STRONG/></a></div><br><img src="../images/logo.png" width="40" height="40"><div style="margin-top:-30px;padding-left:45px; font-size:12px;"><a href="ftp/2015_financial_tender.pdf"><STRONG>INVITATION FOR FINANCIAL TENDER<STRONG/></a></div><br><hr style="border:1px solid #cccccc;width:300px;" align="left">'



pausecontent2[1]='<img src="../images/logo.png" width="40" height="40"><div style="margin-top:-30px;padding-left:45px; font-size:14px;"><a href="ftp/2015_Prequalification_List_Passed.pdf"><STRONG>2015 PREQUALIFICATION LIST OF COMPANIES <br>THAT PASSED <STRONG/></a></div><br><img src="../images/logo.png" width="40" height="40"><div style="margin-top:-30px;padding-left:45px; font-size:12px;"><a href="ftp/List_Companies_And_Disqualified.pdf"><STRONG>LIST OF COMPANIES THAT SUBMITTED MORE THAN <br>ONE APPLICATIONS AND WERE DISQUALIFIED <STRONG/></a></div><br><hr style="border:1px solid #cccccc;width:300px;" align="left">'





pausecontent2[2]='<img src="../images/logo.png" width="40" height="40" ><div style="margin-top:-30px;padding-left:45px; font-size:12px;"><a href="ftp/2015_Mandatory_requirements.pdf"><STRONG>LIST OF COMPANIES THAT FAILED UNDER <br>MANDATORY REQUIREMENT <STRONG/></a></div><br><img src="../images/logo.png" width="40" height="40" ><div style="margin-top:-30px;padding-left:45px; font-size:12px;"><a href="ftp/ITF_Anthem.pdf"><STRONG>ITF ANTHEM<STRONG/></a></div><br><hr style="border:1px solid #cccccc;width:300px;" align="left">'



















</script>



<script type="text/javascript">



/***********************************************

* Pausing up-down scroller- © Dynamic Drive (www.dynamicdrive.com)

* This notice MUST stay intact for legal use

* Visit http://www.dynamicdrive.com/ for this script and 100s more.

***********************************************/



function pausescroller(content, divId, divClass, delay){

this.content=content //message array content

this.tickerid=divId //ID of ticker div to display information

this.delay=delay //Delay between msg change, in miliseconds.

this.mouseoverBol=0 //Boolean to indicate whether mouse is currently over scroller (and pause it if it is)

this.hiddendivpointer=1 //index of message array for hidden div

document.write('<div id="'+divId+'" class="'+divClass+'" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="'+divId+'1">'+content[0]+'</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="'+divId+'2">'+content[1]+'</div></div>')

var scrollerinstance=this

if (window.addEventListener) //run onload in DOM2 browsers

window.addEventListener("load", function(){scrollerinstance.initialize()}, false)

else if (window.attachEvent) //run onload in IE5.5+

window.attachEvent("onload", function(){scrollerinstance.initialize()})

else if (document.getElementById) //if legacy DOM browsers, just start scroller after 0.5 sec

setTimeout(function(){scrollerinstance.initialize()}, 500)

}



// -------------------------------------------------------------------

// initialize()- Initialize scroller method.

// -Get div objects, set initial positions, start up down animation

// -------------------------------------------------------------------



pausescroller.prototype.initialize=function(){

this.tickerdiv=document.getElementById(this.tickerid)

this.visiblediv=document.getElementById(this.tickerid+"1")

this.hiddendiv=document.getElementById(this.tickerid+"2")

this.visibledivtop=parseInt(pausescroller.getCSSpadding(this.tickerdiv))

//set width of inner DIVs to outer DIV's width minus padding (padding assumed to be top padding x 2)

this.visiblediv.style.width=this.hiddendiv.style.width=this.tickerdiv.offsetWidth-(this.visibledivtop*2)+"px"

this.getinline(this.visiblediv, this.hiddendiv)

this.hiddendiv.style.visibility="visible"

var scrollerinstance=this

document.getElementById(this.tickerid).onmouseover=function(){scrollerinstance.mouseoverBol=1}

document.getElementById(this.tickerid).onmouseout=function(){scrollerinstance.mouseoverBol=0}

if (window.attachEvent) //Clean up loose references in IE

window.attachEvent("onunload", function(){scrollerinstance.tickerdiv.onmouseover=scrollerinstance.tickerdiv.onmouseout=null})

setTimeout(function(){scrollerinstance.animateup()}, this.delay)

}





// -------------------------------------------------------------------

// animateup()- Move the two inner divs of the scroller up and in sync

// -------------------------------------------------------------------



pausescroller.prototype.animateup=function(){

var scrollerinstance=this

if (parseInt(this.hiddendiv.style.top)>(this.visibledivtop+5)){

this.visiblediv.style.top=parseInt(this.visiblediv.style.top)-5+"px"

this.hiddendiv.style.top=parseInt(this.hiddendiv.style.top)-5+"px"

setTimeout(function(){scrollerinstance.animateup()}, 50)

}

else{

this.getinline(this.hiddendiv, this.visiblediv)

this.swapdivs()

setTimeout(function(){scrollerinstance.setmessage()}, this.delay)

}

}



// -------------------------------------------------------------------

// swapdivs()- Swap between which is the visible and which is the hidden div

// -------------------------------------------------------------------



pausescroller.prototype.swapdivs=function(){

var tempcontainer=this.visiblediv

this.visiblediv=this.hiddendiv

this.hiddendiv=tempcontainer

}



pausescroller.prototype.getinline=function(div1, div2){

div1.style.top=this.visibledivtop+"px"

div2.style.top=Math.max(div1.parentNode.offsetHeight, div1.offsetHeight)+"px"

}



// -------------------------------------------------------------------

// setmessage()- Populate the hidden div with the next message before it's visible

// -------------------------------------------------------------------



pausescroller.prototype.setmessage=function(){

var scrollerinstance=this

if (this.mouseoverBol==1) //if mouse is currently over scoller, do nothing (pause it)

setTimeout(function(){scrollerinstance.setmessage()}, 100)

else{

var i=this.hiddendivpointer

var ceiling=this.content.length

this.hiddendivpointer=(i+1>ceiling-1)? 0 : i+1

this.hiddendiv.innerHTML=this.content[this.hiddendivpointer]

this.animateup()

}

}



pausescroller.getCSSpadding=function(tickerobj){ //get CSS padding value, if any

if (tickerobj.currentStyle)

return tickerobj.currentStyle["paddingTop"]

else if (window.getComputedStyle) //if DOM2

return window.getComputedStyle(tickerobj, "").getPropertyValue("padding-top")

else

return 0

}



</script>



<script src="newjs.js" type="text/javascript"> </script>

<style type="text/css">

@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



	@import url("images/bbbar.css");

@import url("MenuAssets/bar.css");

@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



	@import url("MenuAssets/bar.css");

@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



@import url("MenuAssets/bar.css");



body {

	font: 100% Verdana, Arial, Helvetica, sans-serif;

	margin: auto; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */

	padding: 0;

	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */

	color: #000000;

	left: auto;

	top: auto;

	right: auto;

	bottom: auto;

	clip: rect(auto,auto,auto,auto);

	background-color: #F1F1F1;

	background-repeat: repeat-x;

}

.oneColFixCtr #container {

	width: 970px;  /* using 20px less than a full 800px width allows for browser chrome and avoids a horizontal scroll bar */

	background: #FFFFFF; /* the auto margins (in conjunction with a width) center the page */

	border: medium solid #CCC;

	text-align: left; /* this overrides the text-align: center on the body element. */

	clip: rect(auto,auto,auto,auto);

	margin-top: 6px;

	margin-right: auto;

	margin-bottom: 20px;

	margin-left: auto;

}

.bannerbox {

	background-color: #666;

	height: 420px;

	width: 850px;

	margin-right: auto;

	margin-left: auto;

	margin-top: -50px;

}

.logo {

	margin-top: -80px;

}

.slogan {

	left: 825px;

	margin-top: 50px;

	height: 35px;

	width: 280px;

}

.top {

	background-image: url(images/TOP.png);

	background-repeat: repeat-x;

	height: 80px;

	width: 930px;

	margin-right: auto;

	margin-left: auto;

	margin-top: -60px;

}

.flash {

	height: 300px;

	width: 930px;

	margin-right: auto;

	margin-left: auto;

	margin-top: 120px;

}

.rss {

	height: 45px;

	width: 930px;

	background-color: #CCC;

}

.footer {

	background-image: url(images/BAR2.png);

	background-repeat: repeat-x;

}

.downfoot {

	background-image: url(images/bottom.png);

	background-repeat: repeat-x;

}

.footbar {

	color: #787878;

}

.menu {

	height: 36px;

	width: 920px;

	margin-right: auto;

	margin-left: auto;

}

.oneColFixCtr #mainContent {

	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */

}

#apDiv1 {

	position:absolute;

	width:970px;

	height:50px;

	z-index:1;

	left: 5px;

	top: 33px;

}

#apDiv2 {

	position:absolute;

	width:200px;

	height:115px;

	z-index:1;

}

#apDiv3 {

	position:absolute;

	width:120px;

	height:70px;

	z-index:1;

}

#apDiv4 {

	position:absolute;

	width:280px;

	height:45px;

	z-index:2;

}

#apDiv5 {

	position:absolute;

	width:280px;

	height:45px;

	z-index:2;

}

#apDiv6 {

	position:absolute;

	width:930px;

	height:40px;

	z-index:3;

	top: 531px;

	background-image: url(images/welcome.png);

}

#apDiv7 {

	position:absolute;

	width:200px;

	height:115px;

	z-index:4;

}

.boxes {

	background-color: #CCC;

	height: 170px;

	width: 930px;

}

#apDiv8 {

	position: absolute;

	width: 930px;

	height: 210px;

	z-index: 4;

	top: 540px;

	margin-left:20px;

}

#apDiv9 {

	position:absolute;

	width:180px;

	height:210px;

	z-index:1;

}

#apDiv10 {

	position:absolute;

	width:180px;

	height:210px;

	z-index:2;

	left: 187px;

}

#apDiv11 {

	position:absolute;

	width:180px;

	height:210px;

	z-index:3;

	left: 375px;

}

#apDiv12 {

	position:absolute;

	width:180px;

	height:210px;

	z-index:4;

	left: 563px;

}

#apDiv13 {

	position:absolute;

	width:180px;

	height:210px;

	z-index:5;

	left: 750px;

}

#apDiv14 {

	position: relative;

	width: 930px;

	height: 35px;

	z-index: 10;

	top: 80px;

	margin-right: auto;

	margin-left: auto;

}

#apDiv15 {

	position:absolute;

	width:930px;

	height:85px;

	z-index:8;

	top: 807px;

}

.footer1 {

	font-size: 11px;

	font-style: normal;

	color: #FFF;

	font-family: Verdana, Geneva, sans-serif;

}

.text {font-size: 10px;

	color: #FFF;

}

#apDiv22 {position:absolute;

	width:64px;

	height:25px;

	z-index:13;

	left: 330px;

	top: 16px;

}

#apDiv22 {

	position:absolute;

	width:63px;

	height:21px;

	z-index:6;

	left: 218px;

	top: 15px;

}

#apDiv24 {

	position:absolute;

	width:251px;

	height:38px;

	z-index:11;

	top: 850px;

	left: 270px;

}

#apDiv25 {

	position:absolute;

	width:121px;

	height:25px;

	z-index:14;

	left: 366px;

	top: 15px;

}

#apDiv26 {

	position:absolute;

	width:99px;

	height:27px;

	z-index:15;

	left: 286px;

	top: 15px;

}

#apDiv27 {

	position:absolute;

	width:74px;

	height:28px;

	z-index:16;

	left: 471px;

	top: 15px;

}

#apDiv28 {

	position:absolute;

	width:34px;

	height:29px;

	z-index:17;

	left: 550px;

	top: 15px;

}

#apDiv {

	position:absolute;

	width:232px;

	height:17px;

	z-index:3;

	left: -65px;

	top: 16px;

}

.foottext {

	font-size: 10px;

	color: #666;

	font-weight: bold;

	font-family: "Times New Roman", Times, serif;

}

.fb {

	font-weight: 430;

	color: #333;

	font-size: 11px;

	font-family: Verdana;

}

#apDiv16 {

	position:absolute;

	width:930px;

	height:80px;

	z-index:7;

	top: 30px;

}

#apDiv17 {

	position: absolute;

	width: 90px;

	height: 90px;

	z-index: 1;

	left: 20px;

	top: 5px;

}

#apDiv18 {

	position:absolute;

	width:300px;

	height:45px;

	z-index:2;

	left: 617px;

	top: 49px;

}

#apDiv19 {

	position:absolute;

	width:930px;

	height:38px;

	z-index:12;

	top: 783px;

	background-image: none;

}

.news_bar {

	background-color: #D6D6D6;

	border-top-style: none;

	border-right-style: none;

	border-bottom-style: none;

	border-left-style: none;

	border-top-color: #C0C0C0;

	border-right-color: #C0C0C0;

	border-bottom-color: #C0C0C0;

	border-left-color: #C0C0C0;

	background-image: url(images/addbar.png);

}

.news {

	background-image: url(images/newsbar.png);

}

.hatch {

	background-image: none;

	background-repeat: no-repeat;

	font-family: Verdana;

	color: #FFF;

}

#apDiv20 {

	position:absolute;

	width:180px;

	height:35px;

	z-index:1;

}

#apDiv21 {

	position:absolute;

	width:120px;

	height:35px;

	z-index:2;

	left: 804px;

}

#apDiv23 {

	position:absolute;

	width:176px;

	height:20px;

	z-index:1;

	top: 12px;

	left: 9px;

}

.hatchtext {

	font-size: 12px;

	color: #FFF;

	font-family: Verdana;

	font-weight: bold;

}

#apDiv29 {

	position:absolute;

	width:20px;

	height:20px;

	z-index:1;

	left: 12px;

	top: 10px;

}

#apDiv30 {

	position:absolute;

	width:22px;

	height:22px;

	z-index:18;

	left: 600px;

	top: 10px;

}

#apDiv31 {

	position:absolute;

	width:60px;

	height:21px;

	z-index:19;

	left: 625px;

	top: 15px;

}

#apDiv32 {

	position:absolute;

	width:25px;

	height:25px;

	z-index:20;

	left: 700px;

	top: 8px;

}

#apDiv33 {

	position:absolute;

	width:45px;

	height:21px;

	z-index:21;

	left: 725px;

	top: 15px;

}

#apDiv34 {

	position:absolute;

	width:930px;

	height:60px;

	z-index:13;

	top: 520px;

}

#apDiv35 {

	position:absolute;

	width:930px;

	height:40px;

	z-index:14;

	top: 125px;

}

#apDiv36 {

	position: absolute;

	width: 930px;

	height: 350px;

	z-index: 9;

	top: 175px;

	border: medium none #999;

}

#apDiv37 {

	position:absolute;

	width:930px;

	height:30px;

	z-index:1;

	top: 7px;

}

#apDiv38 {

	position: absolute;

	width: 20px;

	height: 20px;

	z-index: 1;

	top: 2px;

	left: 7px;

}

#apDiv39 {

	position: absolute;

	width: 230px;

	height: 20px;

	z-index: 2;

	left: 29px;

	top: 3px;

}

#apDiv40 {

	position:absolute;

	width:52px;

	height:20px;

	z-index:3;

	left: 314px;

	top: 3px;

}

#apDiv41 {

	position:absolute;

	width:115px;

	height:20px;

	z-index:4;

	left: 387px;

	top: 3px;

}

#apDiv42 {

	position:absolute;

	width:84px;

	height:20px;

	z-index:5;

	left: 524px;

	top: 3px;

}

#apDiv43 {

	position:absolute;

	width:67px;

	height:20px;

	z-index:6;

	left: 632px;

	top: 3px;

}

#apDiv44 {

	position:absolute;

	width:32px;

	height:20px;

	z-index:7;

	left: 676px;

	top: 3px;

}

#apDiv45 {

	position: absolute;

	width: 150px;

	height: 30px;

	z-index: 8;

	left: 785px;

	top: 1px;

}

#apDiv46 {

	position: absolute;

	width: 60px;

	height: 20px;

	z-index: 9;

	left: 730px;

	top: 3px;

}

#apDiv47 {

	position:absolute;

	width:20px;

	height:20px;

	z-index:10;

	left: 852px;

	top: 1px;

}

#apDiv48 {

	position:absolute;

	width:44px;

	height:20px;

	z-index:11;

	left: 875px;

	top: 4px;

}

#apDiv49 {

	position:absolute;

	width:845px;

	height:345px;

	z-index:15;

	left: 76px;

	top: 210px;

}

#apDiv50 {

	position:absolute;

	width:900px;

	height:327px;

	z-index:15;

	left: 15px;

	top: 16px;

}

#apDiv51 {

	position: absolute;

	width: 10px;

	height: 20px;

	z-index: 2;

	left: 372px;

	top: 8px;

}

#apDiv52 {

	position: absolute;

	width: 10px;

	height: 22px;

	z-index: 3;

	left: 508px;

	top: 8px;

}

#apDiv53 {

	position: absolute;

	width: 10px;

	height: 20px;

	z-index: 4;

	left: 616px;

	top: 8px;

}

#apDiv54 {

	position:absolute;

	width:10px;

	height:20px;

	z-index:5;

	left: 296px;

	top: 10px;

}

#apDiv55 {

	position:absolute;

	width:10px;

	height:20px;

	z-index:6;

	left: 707px;

	top: 10px;

}

#apDiv56 {

	position: absolute;

	width: 930px;

	height: 40px;

	z-index: 13;

	top: 135px;

}

a:link {

	color: #5E5E5E;

	text-decoration: none;

}

a:visited {

	text-decoration: none;

	color: #5E5E5E;

}

a:hover {

	text-decoration: none;

	color: #900;

	font-weight: bold;

}

a:active {

	text-decoration: none;

}

#apDiv57 {

	position: absolute;

	width: 617px;

	height: 35px;

	z-index: 14;

	left: 398px;

	top: 788px;

}

#apDiv58 {

	position: absolute;

	width: 200px;

	height: 50px;

	z-index: 1;

	left: 120px;

	top: -30px;

}

#apDiv59 {

	position: absolute;

	width: 617px;

	height: 35px;

	z-index: 2;

	top: 2px;

	left: 185px;

}

#apDiv60 {

	position: absolute;

	width: 300px;

	height: 80px;

	z-index: 3;

	left: 120px;

	top: 10px;

}

#apDiv61 {

	position: absolute;

	width: 200px;

	height: 115px;

	z-index: 1;

}

#apDiv62 {

	position: absolute;

	width: 200px;

	height: 115px;

	z-index: 1;

}

#apDiv63 {

	position: absolute;

	width: 600px;

	

	z-index: 1;

	background-color: #A1A1A1;

}

#apDiv64 {

	position: absolute;

	width: 200px;

	height: 41px;

	z-index: 4;

	left: 737px;

	top: 84px;

}

#apDiv65 {

	position: absolute;

	width: 325px;

	height: 350px;

	z-index: 2;

	left: 605px;

}

#apDiv66 {

	position: absolute;

	width: 315px;

	height: 139px;

	z-index: 1;

	left: 5px;

	top: 25px;

}

#apDiv67 {

	position: absolute;

	width: 314px;

	height: 205px;

	z-index: 2;

	top: 141px;

	left: 5px;

	background-color: #EEEEEE;

}

#apDiv68 {

	position: absolute;

	width: 315px;

	height: 46px;

	z-index: 1;

}

#apDiv69 {

	position: absolute;

	width: 315px;

	height: 46px;

	z-index: 2;

	top: 47px;

}

#apDiv70 {

	position: absolute;

	width: 315px;

	height: 46px;

	z-index: 3;

	top: 94px;

}

.backlink4 {

	font-family: Verdana, Geneva, sans-serif;

	font-size: 10px;

	color: #999;

}

.events1 {

	font-family: Tahoma, Geneva, sans-serif;

	font-size: 14px;

	color: #900;

	font-weight: bold;

}

a img {

    border: 0;

}

	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



	



-->

</style>

<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<link href="../SpryAssets/SpryStackedContainers.css" rel="stylesheet" type="text/css" />

<style type="text/css">



/*Example CSS for the two demo scrollers*/



#pscroller1{

width: 200px;

height: 100px;

border: 0px solid black;

padding: 5px;

background-color: lightyellow;

}



#pscroller2{

width: 350px;

height: 120px;

border: 0px solid black;

padding: 3px;

vertical-align:middle;



}



#pscroller2 a{

text-decoration: none;

}



.someclass{ //class to apply to your scroller(s) if desired

}



</style>



<style type="text/css">

#apDiv71 {

	position: absolute;

	width: 315px;

	height: 19px;

	z-index: 3;

	left: 5px;

	top: 11px;

}

#apDiv72 {

	position: absolute;

	width: 30px;

	height: 20px;

	z-index: 10;

	left: 703px;

}

#apDiv73 {

	/* [disabled]position: absolute; */

	width: 311px;

	height: 135px;

	z-index: 1;

	grid-rows: none;

}

#apDiv74 {

	position: absolute;

	width: 200px;

	height: 115px;

	z-index: 14;

	margin-right: auto;

	margin-left: auto;

}

#fon { padding-top:12px;margin-left:7px;}



#pay {font-size:10px;padding-top:12px;}



</style>

<script type="text/javascript">

function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}

function MM_swapImgRestore() { //v3.0

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}

function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_swapImage() { //v3.0

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}

</script>
<script type='text/Javascript'>

	function ValidateSubmission()
	{
		var errorMessage = "";
		document.getElementById('error').innerHTML ="";
		var e = document.getElementById("soflow");
		var Selectedvalue = e.options[e.selectedIndex].value;
		
		if((Selectedvalue == '') ) {
			
			errorMessage = "Select Date!!!";
		}
		//alert(Selectedvalue);
		if((document.getElementById('txtActivity').value == '') ) {
			errorMessage = "Type Day's Activity!!!";
		}
		
		if((document.getElementById('uploadfile').value == '') ) {
			errorMessage = "Upload Picture of Day's Activity!!!";
		}
		
		if(errorMessage != ""){
			document.getElementById('error').innerHTML = errorMessage;
			return false;
		}else{
			
				
			return true;
		}
		
		
	}

</script>
<script type="text/xml">

<!--

<oa:widgets>

  <oa:widget wid="2567023" binding="#OAWidget" />

</oa:widgets>

-->

</script>

</head>

<body class="oneColFixCtr" onload="MM_preloadImages('../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c1.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c2.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c3.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c4.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c5.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c6.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c7.jpg')"><div id="container">

  <div id="mainContent">

    <div id="apDiv36">

      <div id="apDiv63">
		
		
		<h1 class="title">Edit Admin/Staff Roles</h1>
		
		<div class='container'>
			
			<form id="form" class="form" method="POST" onsubmit="return ValidateSubmission();" action="siwesDailyReport.php" enctype="multipart/form-data">
				<label id='error' class='error'><?php print($errorMessage); ?></label>
					
				<table border='1' width='100%' align='left'>
					<tr><th width='50%'> Names </th><th width='15%'> Designation </th><th width='35%'> Action </th></tr>
					<?php
				
							$adminSet ="";
							$staffSet ="";
							$deactivatedStaff ="";
							require_once '../connection.php';
						
							
							$sql = "SELECT staffFirstName, staffLastName, staffNumber, staffEmail, staffStatus, staffDesignation FROM tblStaff";
							$result = mysqli_query($con, $sql);//or die(mysqli_error($con));
							if( mysqli_num_rows($result) > 0 )
							{
								while($row = mysqli_fetch_assoc($result))
								{
									if(($row['staffDesignation'] == "Admin") && ($row['staffStatus'] == '1'))
									{
										$adminSet .= "<tr><td width='50%'>".$row['staffFirstName']." ".$row['staffLastName'] ."</td>".
											"<td width='15%'>".$row['staffDesignation'] ."</td>".
											"<td width='35%'><a href='viewEditStaffAdmin.php?id=".$row['staffNumber'] ."&action=Staff'>Make Staff</a>||
											<a href='viewEditStaffAdmin.php?id=".$row['staffNumber'] ."&action=Deactivate'>Deactivate</a></td></tr>";
									}elseif(($row['staffDesignation'] == "Staff") && ($row['staffStatus'] == '1'))
									{
										
										$staffSet .="<tr><td width='50%'>".$row['staffFirstName']." ".$row['staffLastName'] ."</td>".
											"<td width='15%'>".$row['staffDesignation'] ."</td>".
											"<td width='35%'><a href='viewEditStaffAdmin.php?id=".$row['staffNumber'] ."&action=Admin'>Make Admin</a>||
											<a href='viewEditStaffAdmin.php?id=".$row['staffNumber'] ."&action=Deactivate'>Deactivate</a></td></tr>";
									}else{
										
										$deactivatedStaff .="<tr><td width='50%'>".$row['staffFirstName']." ".$row['staffLastName'] ."</td>".
											"<td width='15%'>".$row['staffDesignation'] ."</td>".
											"<td width='35%'><a href='viewEditStaffAdmin.php?id=".$row['staffNumber'] ."&action=Activate'>Activate</a></td></tr>";
										
									}
								}
								
								if(!empty($adminSet))
								{
									print("<tr><td colspan='3'><a href='#'><div class='menuButton'>Admin List</div></a></td></tr>");
									print($adminSet);
								}else{
									print("<tr><td colspan='3'><a href='#'><div class='menuButton'>No Records Found For Admin</div></a></td></tr>");
									
								}
								if(!empty($staffSet))
								{
									print("<tr><td colspan='3'><a href='#'><div class='menuButton'>Staff List</div></a></td></tr>");
									print($staffSet);
								}else{
									
									print("<tr><td colspan='3'><a href='#'><div class='menuButton'>No Records Found For Staff</div></a></td></tr>");
								}
								if(!empty($deactivatedStaff))
								{
									print("<tr><td colspan='3'><a href='#'><div class='menuButton'>Deactivated Accounts</div></a></td></tr>");
									print($deactivatedStaff);
								}else{
									
									print("<tr><td colspan='3'><a href='#'><div class='menuButton'>No Records Found For Deactivated Accounts</div></a></td></tr>");
								}
								
							}
							
						
					?>
				</table>
				
				
			</form>
		 </div>
		<!--<button class='button' id="submit" name='btnSubmitButton'>Submit</button> <button class='button' id="cancel" name='btnCancelButton'>Cancel</button> -->
				
      </div>

      <div id="apDiv65"  style="border:1px #666666 solid;">
		<p>&nbsp;</p>
		
		<div class='container'>
			<div class="title">Admin. Dashboard</div>
			<div class='subTitle'>Welcome <?php print($_SESSION['itfStaffName']);  ?></div>
			<a href='../changePassword.php'><div class='menuButton'>Change Password</div></a>
			<a href='addNewAdminStaff.php'><div class='menuButton'>Add New Admin/Staff</div></a>
			<a href='viewEditStaffAdmin.php'><div class='menuButton'>View/Edit Admin/Staff</div></a>
			<a href='viewApproveApplications.php'><div class='menuButton'>View/Approve Applications</div></a>
			<a href='viewInsttionsApplication.php'><div class='menuButton'>View/Edit Institutions Institutions</div></a>
			
			<a href='viewEditIndustries.php'><div class='menuButton'>View/Edit Existing Industries</div></a>
			
			<a href='addNewBank.php'><div class='menuButton'>Add New Bank</div></a>
			<a href='viewEditBanks.php'><div class='menuButton'>View/Edit Banks Details</div></a>
			
			<a href='../siwesHome.php?action=logout'><div class='menuButton'>Logout</div></a>
			
		 </div>
	  </div>

    </div>

    <div id="apDiv16">

      <div id="apDiv17"><img src="../images/logo.png" width="90" height="90" /></div>

      <div id="apDiv18">

        <div id="apDiv58"><div id="help">

<!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->

<div><a href='http://www.itfpayportal.com' target='_blank' style="padding-top:3px;padding-bottom:13px; border:2px solid; border-radius:5px; background-color:#c26060; color:#fff; text-align:center; font-size:25px;margin-left:10px; ">ITF Pay Portal</a></div><br>

<span id="pay" style="margin-left:-10px;">click to make your ITF Contribution</span>

<!-- END ProvideSupport.com Graphics Chat Button Code -->

</div></div>

      </div>

      <div id="apDiv60"><img src="../images/company.fw.png" width="300" height="80" /></div>

      <div id="apDiv64"><div id="visitC"> 

      <span id="fon">call 07050560000</span>

<p><script>



/*

Counter script

By JavaScript Kit (http://javascriptkit.com)

Over 400+ free scripts here!

Above notice MUST stay entact for use

*/



function fakecounter(){



//decrease/increase counter value (depending on perceived popularity of your site!)

var decrease_increase=50000



var counterdate=new Date()

var currenthits=counterdate.getTime().toString()

currenthits=parseInt(currenthits.substring(2,currenthits.length-4))+decrease_increase



document.write("visitor # <b>"+currenthits+"</b>")

}

fakecounter()

</script>&nbsp;</p>

</div></div>

    </div>

    <div id="apDiv56">

   <div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>    Home   </span></a> </li>
   <li class='has-sub'><a href='#'><span> About Us </span></a>
      <ul><li><a href='about.php'><span> Profile </span></a></li>
        <li><a href='mgt_team.php'><span> Management Team</span></a></li>
 <li><a href='department.php'><span> Department </span></a></li>
<li><a href='ftp/organogram.pdf'><span> Organogram </span></a></li>  
             
<li><a href='collaboration.php'><span> Collaboration </span></a></li>        
         <li><a href='skill_center.php'><span> Skill Centers </span></a></li>  
         <li><a href='gallery/ITF Gallery/album/index.html'><span> Photo Gallery </span></a></li> 
                  <li><a href='staff_school.php'><span> ITF Staff School </span></a></li> 
         <li><a href='http://www.itfdatabank.com'><span> ITF Databank </span></a></li>              
      </ul>
   </li>
   
   <li><a href='services.php'><span> Services </span></a></li>
 <li class='has-sub'><a href='#'><span> Training </span></a>
      <ul>
        <li><a href='training_programmes.php'><span> Training Programmes</span></a>         
        <li><a href='coursereg.php'><span> Course Registration</span></a>
        <li><a href='#'><span> Training Brochure</span></a>
 </ul>
   </li>  	
 <li class='has-sub'><a href='#'><span> Branch Networks </span></a>
      <ul>
        <li><a href='headquaters.php'><span> Headquaters </span></a> </li>        
        <li><a href='area_offices.php'><span> Area Offices</span></a></li>
        <li><a href='centre.php'><span>ISTC Center </span></a></li>
                          				                    
      </ul>
   </li>  	
   <li><a href='http://www.itfjobportal.com.ng' target='_blank'><span>Job Portal</span></a></li>
   <li><a href='http://www.blog.itf.gov.ng' target='_blank'><span> Blog</span></a></li>
   <li><a href='Library.php'><span> e-Library</span></a></li>
   <li><a href='compliance.php' target='_blank'><span>ITF Compliance </span></a></li>
	 
   <li class='has-sub'><a href='#'><span>Contact Us</span></a>
   <ul>
	 	<li><a href='fedback.php'><span> Feedback </span></a>
	 	<li><a href='Testimonials.php'><span> Testimonials </span></a></li>
        <li><a href='faq.php'><span> FAQs </span></a> 
        <li><a href='#'><span> Career </span></a>
               
   </ul>
   
    </li>   
 
</ul>

</div>
  

    </div>

  </div>

    <h1 align="center">&nbsp; </h1>

    <div class="top"></div>

    <div>

      <div class="flash">

       
        <p>&nbsp;</p>

      </div>

    </div>

   
    <div class="news_bar" id="apDiv14">

      <div id="apDiv37">

        <div id="apDiv38"><img src="../images/c.png" width="20" height="20" /></div>

        <div class="foottext" id="apDiv39">

          <div>Industrial Training Fund 2016</div>

        </div>

        <div class="foottext" id="apDiv40"><a href="websit_sitemap.html">Sitemap</a></div>

        <div class="foottext" id="apDiv41"><a href="websit_terms.html">Terms &amp; Conditions</a></div>

        <div class="foottext" id="apDiv42"><a href="websit_privacy.html">Privacy Policy</a></div>

        <div class="foottext" id="apDiv43"><a href="http://www.itf.gov.ng:2095" class="backlink4">Webmail</a> </div>

        <div id="apDiv45"><a href="https://www.facebook.com/pages/Industrial-Training-Fund/350370218473388?ref=bookmarks"><img src="../images/fb.png" alt="" width="20" height="20" /></a> <a href="https://twitter.com/ITF__Nigeria"><img src="../images/tw.png" alt="" width="20" height="20" /></a> <a href="https://www.youtube.com/user/itfnigeria"><img src="../images/yt.png" alt="" width="20" height="20" /></a> <img src="../images/gp.jpg" alt="" width="20" height="20" /> </a>  <img src="../images/linkedinicongif.gif" alt="" width="20" height="20" /></div>

        <div class="foottext" id="apDiv46">Connect:</div>

        <div id="apDiv72"><a href="http://www.itf.gov.ng:2095"><img src="../images/webmaillogo.jpg" width="20" height="20" /></a></div>

      </div>

      <div class="footbar" id="apDiv53">l</div>

      <div class="footbar" id="apDiv52">l</div>

      <div class="footbar" id="apDiv51">l</div>

  </div>

    <p align="center">&nbsp;</p>

    <p align="center"&nbsp;</p>

    <p align="center">&nbsp;</p>

    <p align="center">&nbsp;</p>

    <p align="center">&nbsp;</p>

  </div>

  <!-- end #container -->

</div>

<script type="text/javascript">

var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");

</script>

</body>

</html>

