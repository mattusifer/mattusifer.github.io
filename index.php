<!DOCTYPE html>
<html lang="en" class="hide-overflow">
 <head>
 <meta charset="utf-8">
 <meta name="author" content="Matt Usifer">
 <title>Matt Usifer</title>
 <meta name="description" content="An amalgam of works"/>

<link href="./styles/main.css" rel="stylesheet" type="text/css" media="screen" />
<link href="./styles/skydive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="./styles/projects.css" rel="stylesheet" type="text/css" media="screen" />
<link href="./styles/resume.css" rel="stylesheet" type="text/css" media="screen" />
<link href="./styles/contact-form.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet"
  media="screen and (min-width: 900px)"
  href="./styles/big.css"
  >
<link rel="stylesheet" 
  media="screen and (max-width: 700px)" 
  href="./styles/small.css" />  
<link rel="stylesheet" 
  media="screen and (max-width: 500px)" 
  href="./styles/mobile.css" />  



<!--[if lte IE 6]>
<![endif]-->
<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->

<link rel="shortcut icon" href="pictures/glasses.ico" >

<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="./scripts/jquery.scrollTo-1.4.3.1-min.js"></script>
<script type="text/javascript" src="./scripts/mattusifer.js"></script>
<script type="text/javascript" src="./scripts/img-map-resize.js"></script>
<script type="text/javascript" src="./soundmanager.js"></script>
		<script type="text/javascript">

		function C()
		{
		document.getElementById("piano").src="./piano/pictures/c.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function Csharp()
		{
		document.getElementById("piano").src="./piano/pictures/csharp.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function D()
		{
		document.getElementById("piano").src="./piano/pictures/d.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function Dsharp()
		{
		document.getElementById("piano").src="./piano/pictures/dsharp.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function E()
		{
		document.getElementById("piano").src="./piano/pictures/e.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function F()
		{
		document.getElementById("piano").src="./piano/pictures/f.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function Fsharp()
		{
		document.getElementById("piano").src="./piano/pictures/fsharp.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function G()
		{
		document.getElementById("piano").src="./piano/pictures/g.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function Gsharp()
		{
		document.getElementById("piano").src="./piano/pictures/gsharp.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function A()
		{
		document.getElementById("piano").src="./piano/pictures/a.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function Asharp()
		{
		document.getElementById("piano").src="./piano/pictures/asharp.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		function B()
		{
		document.getElementById("piano").src="./piano/pictures/b.jpg";
		setTimeout('document.getElementById("piano").src="./piano/pictures/piano.jpg"',200);
		}
		</script>
</head>

<body>
<div id="head">
	<a href="#" title="#zero" >Matt<br>Usifer</a>	
		
<!-- Nav Bar -->
	<ul id="nav" >
		<li><a href="#" title="#one" >Projects</a></li>
		<li><a href="#" title="#two" >Resume</a></li>
		<li><a href="#" title="#three" >Contact</a></li>
	</ul>
</div>
	
<div id="container">
<!-- home -->
	<div class="content" id="zero">

		<p style="opacity:0.8;">I'm Matt, I live in Burlington, VT. I'm a developer at Dealer.com. 
			<br><br><a href="#" title="#one" >Here</a> are a few things I do when I'm not at work.</p>
	</div>
	<div class="fill" id="zero-one"></div>

<!-- projects -->
	<div class="content" id="one">
		<ul id="project-tabs">
			<li>
				<a href="http://www.github.com/mattusifer/cursive-coffee-blog" target="_" name="project-cc">Cursive Coffee</a><br>
				<span>HTML, CSS, JavaScript, PHP, MySQL</span>
			</li>
			<li>
				<a href="https://github.com/mattusifer/hear-see" target="_" name="project-hearsee">HearSee</a><br>
				<span>Scala</span>
			</li>
			<li>
				<a href="http://friendsandfamilyvt.tumblr.com" target="_" name="project-ff">Friends + Family</a><br>
				<span>CSS</span>
			</li>
			<!--
			<li>
				<a href="#" title="project-bandgen">Random Band Generator</a><br>
				<span>Java</span>
			</li>
			-->
			<li>
				<a href="https://github.com/mattusifer/img-map-resize" target="_" name="project-map">Image Map Resize</a><br>
				<span>jQuery</span>
			</li>
		</ul>
		<div id="project-cc" class="project-content">
			A full-stack website and blog for a local coffee shop.
		</div>
		<div id="project-hearsee" class="project-content">
			A simple Mp3 player
		</div>
		<div id="project-ff" class="project-content">
			An exaggerated tumblr design for a local music collective.<br><br>
		</div>
		<div id="project-bandgen" class="project-content">
			This is a very simple application that I wrote for Friends + Family using Java in order to randomly generate 3-4 person bands given a list of names. 
			<br><br>
			The program will take a text file containing a name on each line as an input, and will output each band in an alert notification on the screen. 
			<br><br>
			Code here: <a href="#">*github link*</a>
		</div>
		<div id="project-map" class="project-content">
			A script to re-map HTML image maps when the window is resized.
			<br><br>
			Example: A poorly drawn, functional, and resizable piano.<br><br>

		<map id="pianoMap">
		<area shape="poly" alt="C" title="" href="#" coords="245,253,328,246,303,347,304,390,314,396,295,469,295,533,153,542,150,482,151,478" onmousedown="soundManager.play('C');C()" />
		<area shape="poly" alt="C#" title="" href="#" coords="346,221,368,216,380,248,338,386,310,399,302,386,305,341" onmousedown="soundManager.play('Csharp');Csharp()" />
		<area shape="poly" alt="D" title="" href="#" coords="383,248,445,241,451,246,425,351,430,393,449,392,435,465,433,532,292,537,295,475,318,395,341,387" onmousedown="soundManager.play('D');D()" />
		<area shape="poly" alt="D#" title="" href="#" coords="460,221,479,215,489,249,464,390,431,391,426,351" onmousedown="soundManager.play('Dsharp');Dsharp()" />
		<area shape="poly" alt="E" title="" href="#" coords="583,249,559,464,556,525,435,531,436,466,450,392,466,389,489,244" onmousedown="soundManager.play('E');E()" />
		<area shape="poly" alt="F" title="" href="#" coords="585,248,668,247,665,360,675,388,688,387,697,464,699,520,558,527,560,455" onmousedown="soundManager.play('F');F()" />
		<area shape="poly" alt="F#" title="" href="#" coords="675,218,691,215,698,221,714,366,702,386,674,384,667,356" onmousedown="soundManager.play('Fsharp');Fsharp()" />
		<area shape="poly" alt="G" title="" href="#" coords="809,243,831,394,838,385,853,460,852,523,700,526,701,463,691,393,711,365,705,243" onmousedown="soundManager.play('G');G()" />
		<area shape="poly" alt="G#" title="" href="#" coords="806,216,830,216,866,355,861,386,831,386,826,366" onmousedown="soundManager.play('Gsharp');Gsharp()" />
		<area shape="poly" alt="A" title="" href="#" coords="944,243,1025,460,1015,525,849,531,853,464,845,391,864,386,870,351,840,244" onmousedown="soundManager.play('A');A()" />
		<area shape="poly" alt="A#" title="" href="#" coords="948,214,969,215,974,216,1020,330,1019,350,1023,388,992,385,945,241" onmousedown="soundManager.play('Asharp');Asharp()" />
		<area shape="poly" alt="B" title="" href="#" coords="1100,241,1185,465,1180,524,1019,522,1027,466,1028,456,1002,394,1026,387,1022,328,983,238" onmousedown="soundManager.play('B');B()" />
		</map>

		<img src="./piano/pictures/piano.jpg" alt="play!" usemap="#pianoMap" id="piano" name="map-resize"/>
		</div>

	</div>
	
	<div class="fill" id="one-two"></div>
	
<!-- experience -->
	<div class="content" id="two">
	</div>
	
	<div class="fill" id="two-three"></div>
	
<!-- contact -->
	<div class="content" id="three">
		<div id="contact-info">
			<p>Email: mattusifer@gmail.com</p>
		</div>

		<table class="squares">
		    <tr>
		        <td id="a"></td>
		        <td id="b"></td>
		        <td id="c"></td>
		        <td id="d"></td>
		        <td id="e"></td>
		    </tr>
		    <tr>
		        <td id="f"></td>
		        <td id="g"></td>
		        <td id="h"></td>
		        <td id="i"></td>
		        <td id="j"></td>
		    </tr>
		    <tr>
		        <td id="k"></td>
		        <td id="l"></td>
		        <td id="m"></td>
		        <td id="n"></td>
		        <td id="o"></td>
		    </tr>
		    <tr>
		        <td id="p"></td>
		        <td id="q"></td>
		        <td id="r"></td>
		        <td id="s"></td>
		        <td id="t"></td>
		    </tr>
		    <tr>
		        <td id="u"></td>
		        <td id="v"></td>
		        <td id="w"></td>
		        <td id="x"></td>
		        <td id="y"></td>
		    </tr>
		</table>
	</div>
</div> <!-- container -->

<div id="mobile-home"><a href="#" title="#zero" >(home)</a>f</div>

<div></div>
<script>
soundManagerInit();
</script>
</body>
</html>
