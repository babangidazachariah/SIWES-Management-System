<?php

	require_once 'createDatabaseTable.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="shortcut icon" href="favicon.ico">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>.::ITF NIGERIA::.</title>

<script language="JavaScript1.2" type="text/javascript" src="MenuAssets/mmcssmenu.js"></script>

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script><script type="text/javascript" src="js/stscode.js"></script>

<script src="SpryAssets/SpryData.js" type="text/javascript"></script>

<link rel="stylesheet" href="MenuAssets/style.css"/>

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

pausecontent2[0]='<img src="images/logo.png" width="40" height="40"><div style="margin-top:-30px;padding-left:45px; font-size:14px;"><a href="ftp/ITF_NEWSPAPER_ADVERT.pdf"><STRONG>INTRODUCING THE ITF ONLINE PAYPORTAL PLATFORM <br/>FOR PAYMENT OF TRAINING CONTRIBUTIONS<STRONG/></a></div><br><img src="images/logo.png" width="40" height="40"><div style="margin-top:-30px;padding-left:45px; font-size:12px;"><a href="ftp/2015_financial_tender.pdf"><STRONG>INVITATION FOR FINANCIAL TENDER<STRONG/></a></div><br><hr style="border:1px solid #cccccc;width:300px;" align="left">'



pausecontent2[1]='<img src="images/logo.png" width="40" height="40"><div style="margin-top:-30px;padding-left:45px; font-size:14px;"><a href="ftp/2015_Prequalification_List_Passed.pdf"><STRONG>2015 PREQUALIFICATION LIST OF COMPANIES <br>THAT PASSED <STRONG/></a></div><br><img src="images/logo.png" width="40" height="40"><div style="margin-top:-30px;padding-left:45px; font-size:12px;"><a href="ftp/List_Companies_And_Disqualified.pdf"><STRONG>LIST OF COMPANIES THAT SUBMITTED MORE THAN <br>ONE APPLICATIONS AND WERE DISQUALIFIED <STRONG/></a></div><br><hr style="border:1px solid #cccccc;width:300px;" align="left">'





pausecontent2[2]='<img src="images/logo.png" width="40" height="40" ><div style="margin-top:-30px;padding-left:45px; font-size:12px;"><a href="ftp/2015_Mandatory_requirements.pdf"><STRONG>LIST OF COMPANIES THAT FAILED UNDER <br>MANDATORY REQUIREMENT <STRONG/></a></div><br><img src="images/logo.png" width="40" height="40" ><div style="margin-top:-30px;padding-left:45px; font-size:12px;"><a href="ftp/ITF_Anthem.pdf"><STRONG>ITF ANTHEM<STRONG/></a></div><br><hr style="border:1px solid #cccccc;width:300px;" align="left">'



















</script>



<script type="text/javascript">



/***********************************************

* Pausing up-down scroller- � Dynamic Drive (www.dynamicdrive.com)

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

	height: 350px;

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

	height: 350px;

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

<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<link href="SpryAssets/SpryStackedContainers.css" rel="stylesheet" type="text/css" />

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

<script type="text/xml">

<!--

<oa:widgets>

  <oa:widget wid="2567023" binding="#OAWidget" />

</oa:widgets>

-->

</script>

</head>

<body class="oneColFixCtr" onload="MM_preloadImages('../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c1.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c2.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c3.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c4.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c5.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c6.jpg','../../../../../MSTEVE/web projects/New folder (3)/nasco/images/bbar.fw_r1_c7.jpg')">
<div id="container">

  <div id="mainContent">

    <div id="apDiv36">

      <div id="apDiv63">

        <!-- Begin DWUser_EasyRotator -->

        <script type="text/javascript" src="js/easyRotator.min.js"></script>

        <div class="dwuserEasyRotator" style="width: 600px; height: 350px; position:relative; text-align: left;" data-erconfig="{autoplayEnabled:true, autoplayDelay:8000, lpp:'102-105-108-101-58-47-47-47-67-58-47-85-115-101-114-115-47-65-84-73-75-85-47-68-111-99-117-109-101-110-116-115-47-69-97-115-121-82-111-116-97-116-111-114-80-114-101-118-105-101-119-47-112-114-101-118-105-101-119-95-115-119-102-115-47', wv:1}" data-ername="itfscroll" data-ertid="{q1c5xqvdwt9259502270041}">

          <div data-ertype="content" style="display: none;"><ul data-erlabel="Main Category">

	<li>

		<img class="main" src="images/dgItf.jpg" /> <img class="thumb" src="images/one.jpg" /> <span class="desc"> dgItf, Dr (Mrs) Juliet Chukkas-Onaeko flanked by the Head of Public Affairs Unit, Mrs Ihezue and Lagos Area Managers after the presentation of the CIICAN award</span>

	</li>

	<li>

		<img class="main" src="images/lagosPresident.jpg" /> <img class="thumb" src="images/five.jpg" /> <span class="desc">lagosPresident Chamber of Commerce and Industry, Alhaji Remi Bello and the Chairman of CIICAN, Oloruntoba Agbola during the  presentation of  CIICAN award for Crystal Excellence to ITF DG, Dr (Mrs) Juliet Chukkas-Onaeko in Lagos </span>

	</li>

	<li>

		<img class="main" src="images/DG .jpg" /> <img class="thumb" src="images/four.jpg" /> <span class="desc">A group photograph of DG ITF Dr. (Mrs.) Juliet Chukkas-Onaeko with her management staff and the Dean of Lagos Business School Ajah, Lagos.</span>

	</li>

	<li>

		<img class="main" src="images/dg.jpg" /> <img class="thumb" src="images/img111.jpg" /> <span class="desc">The Executive Director of Mobil Producing Nigeria Unlimited Mr. Udom U. Inoyo with the DG  ITF, Dr. (Mrs.) Juliet Chukkas-Onaeko after a courtesy visit by the DG and management with respect to fostering good partnership with ITF. </span>

	</li>

	<li>

		<img class="main" src="images/students.jpg" /> <img class="thumb" src="images/two.jpg" /> <span class="desc">Cross-sections of Secondary School Students at the Speech and Prize giving day.</span>

	</li>

	<li>

		<img class="main" src="images/oneBest.jpg" /> <img class="thumb" src="images/three.jpg" /> <span class="desc"> Photograph of oneBest student and his family at the ITF Staff School Speech and Prize giving day. </span>

	</li>

</ul>

</div>

          <div data-ertype="layout" data-ertemplatename="NONE" style="">

            <div class="erimgMain" style="position: absolute; left:0;right:0;top:0;bottom:0;" data-erconfig="{___numTiles:3, scaleMode:'fillArea', duration:800, imgType:'main', alwaysPreviousButton:true, __loopNextButton:false, __arrowButtonMode:'rollover'}">

              <div class="erimgMain_slides" style="position: absolute; left:0; top:0; bottom:0; right:0;">

                <div class="erimgMain_slide">

                  <div class="erimgMain_img" style="position: absolute; left: 0; right: 0; top:0;bottom:0;"></div>

                </div>

              </div>

              <!-- <div class="erimgMain_arrowLeft" style="position:absolute; left: 10px; top: 50%; margin-top: -15px;" data-erConfig="{image:'circleSmall', image2:'circleSmall'}"></div>

				<div class="erimgMain_arrowRight" style="position:absolute; right: 10px; top: 50%; margin-top: -15px;"></div> -->

            </div>

            <div class="" style="position: absolute; left:0; right:0; bottom: 20px; padding: 7px 200px 7px 20px; background: #000; background:rgba(0,0,0,0.9); color: #FFF; font-family: Georgia, 'Times New Roman', Times, _serif; text-align: left;">

              <p class="erdynamicText" data-erfield="title" style="padding: 0; margin: 0 0 3px 0; font-weight: bold; font-size: 22px; color: #FFF;"></p>

              <p class="erdynamicText" data-erfield="desc" style="padding: 0; margin: 0; font: 12px/16px Arial,_sans; color: #FFF;"></p>

            </div>

            <div class="erdots" style="overflow: hidden; margin: 0; font-size: 10px; font-family: 'Lucida Grande', 'Lucida Sans', Arial, _sans; color: #FFF; position: absolute; right:6px; bottom:30px; width:200px;" data-erconfig="{showText:false}" align="center">

              <div class="erdots_wrap" style="wasbackground-color: #CFC; float: right;" align="left">

                <!-- modify the float on this element to make left/right/none=center aligned. -->

                <span class="erdots_btn_selected" style="padding-left: 0; width: 21px; height: 20px; display: inline-block; text-align: center; vertical-align: middle; line-height: 20px; margin: 0 2px 0 0; cursor: default; background: url(http://easyrotator.s3.amazonaws.com/1/i/rotator/dots/export/20_14_wite_65.png) top left no-repeat;"> &nbsp; </span> <span class="erdots_btn_normal" style="padding-left: 0; width: 21px; height: 20px; display: inline-block; text-align: center; vertical-align: middle; line-height: 20px; margin: 0 2px 0 0; cursor: pointer; background: url(http://easyrotator.s3.amazonaws.com/1/i/rotator/dots/export/20_14_wite_35.png) top left no-repeat;"> &nbsp; </span> <span class="erdots_btn_hover" style="padding-left: 0; width: 21px; height: 20px; display: inline-block; text-align: center; vertical-align: middle; line-height: 20px; margin: 0 2px 0 0; cursor: pointer; background: url(http://easyrotator.s3.amazonaws.com/1/i/rotator/dots/export/20_14_wite_65.png) top left no-repeat;"> &nbsp; </span></div>

            </div>

            <div class="erabout erFixCSS3" style="color: #FFF; text-align: left; background: #000; background:rgba(0,0,0,0.93); border: 2px solid #FFF; padding: 20px; font: normal 11px/14px Verdana,_sans; width: 300px; border-radius: 10px; display:none;"> This <a style="color:#FFF;" href="http://www.dwuser.com/easyrotator/" target="_blank">jQuery slider</a> was created with the free <a style="color:#FFF;" href="http://www.dwuser.com/easyrotator/" target="_blank">EasyRotator</a> software from DWUser.com. <br />

              <br />

              Use WordPress? The free <a style="color:#FFF;" href="http://www.dwuser.com/easyrotator/wordpress/" target="_blank">EasyRotator for WordPress</a> plugin lets you create beautiful <a style="color:#FFF;" href="http://www.dwuser.com/easyrotator/wordpress/" target="_blank">WordPress sliders</a> in seconds. <br />

              <br />

              <a style="color:#FFF;" href="#" class="erabout_ok">OK</a></div>

            <noscript>

              Rotator powered by <a href="http://www.dwuser.com/easyrotator/">EasyRotator</a>, a free and easy jQuery slider builder from DWUser.com.  Please enable JavaScript to view.

            </noscript>

            <script type="text/javascript">/*Avoid IE gzip bug*/(function(b,c,d){try{if(!b[d]){b[d]="temp";var a=c.createElement("script");a.type="text/javascript";a.src="js/nozip/easyRotator.min.js";c.getElementsByTagName("head")[0].appendChild(a)}}catch(e){alert("EasyRotator fail; contact support.")}})(window,document,"er_$144");</script>

          </div>

        </div>

        <!-- End DWUser_EasyRotator -->

      </div>

      <div id="apDiv65"  style="border:1px #666666 solid;">

        <div id="apDiv66">

          <script type="text/javascript">

// BeginOAWidget_Instance_2567023: #OAWidget



 

 var ds1 = new Spry.Data.XMLDataSet("http://finance.yahoo.com/rss/topstories", "rss/channel/item");

 ds1.setColumnType("description", "html");



	 

	

// EndOAWidget_Instance_2567023

          </script>

          <div id="apDiv73">

<script type="text/javascript">



//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)



new pausescroller(pausecontent2, "pscroller2", "someclass", 2000)



</script>

          </div>

        </div>

        <div id="apDiv67">

          <div id="TabbedPanels1" class="TabbedPanels">

            <ul class="TabbedPanelsTabGroup">

              <li class="TabbedPanelsTab" tabindex="0">Relevant Links</li>

              <li class="TabbedPanelsTab" tabindex="0">Employers Forms</li>

              <li class="TabbedPanelsTab" tabindex="0">Mobile App</li>

            </ul>

            <div class="TabbedPanelsContentGroup">

              <div class="backlink4">:: <a href="http://www.fmti.gov.ng" target="_blank">Federal Ministry of Trade and Investment</a> <br />

:: <a href="http://www.necang.org" target="_blank">National Employers Consultative Association.</a><br />

:: <a href="http://www.nbte.gov.ng" target="_blank">National Board for Technical Education.<br />

</a>:: <a href="http://www.ncceonline.org" target="_blank">National Commission for Colleges of Education.<br />

</a>:: <a href="http://www.nuc.edu.ng" target="_blank">National Universities Commission.<br />

</a>:: <a href="http://www.naccima.com" target="_blank">National Association of Chambers, Commerce,Industries,<br/>&nbsp; &nbsp;    Mines and Agriculture.<br />

</a>:: <a href="http://www.manufacturersnigeria.org" target="_blank">Manufacturers Association of Nigeria.<br />

</a>::<a href="#" target="_blank"> Staff Training Management Portal</a> <br />

:: <a href="https://www.customs.gov.ng/">Nigeria Customs Service</a><br />

:: <a href="https://www.ajaokutasteel.com/">Ajaokuta Steel Company Ltd</a><br />

:: <a href="siwesHome.php"> SIWES Portal</a><br />

:: <a href="#">ITF Contribution and Reimbursement Portal</a><br /></div>

              <div class="backlink4"><a href="ftp/ITF_Form_7A.pdf">:: New Employers Form 7</a><br />

              <a href="ftp/ITF_Form_5.pdf">:: Registered Employers Form 5</a><br />   

              <a href="ftp/ITF_TRFORM_1A.pdf">:: ITF TR FORM 1A</a><br />  

               <a href="ftp/ITF_TRFORM_2A.pdf">:: ITF TR FORM 2A</a><br />  

               <a href="ftp/ITF_FORM_3A.pdf">:: ITF  FORM 3A</a><br />  

               <a href="ftp/ITF_FORM_4A.pdf">:: ITF  FORM 4A</a><br /></div>

              <div class="backlink4"><a href="itf_app.html">:: Android</a><br />

                <a href="itf_app.html">:: Apple IOS</a><br />

                :: Blackberry<br />

              <a href="itf_app.html">:: Windows</a></div>

              <div class="backlink4"></div>

            </div>

          </div>

        </div>

        <div class="events1" id="apDiv71">News &amp; Events</div>

      </div>

    </div>

    </div>

    </div>

   

   

    <div>

      <div class="flash">

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

        <p>&nbsp;</p>

      </div>

    </div>

   
  </div>

  <!-- end #container -->

</div>

<script type="text/javascript">

var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");

</script>

</body>

</html>

