<html>
<head>
<title>My Site</title>
<style>

body{
background-image: url("t.jpg");
background-size:cover;
background-repeat:no-repeat;
margin:20px 20px 20px 20px;
padding: 20px 30px 20px 20px;
border:dashed;
}

h1{
font-family:impact;
font-size:40px;
align:center;
}



#works{
font-family:comic sans ms;
font-size:28px;
text-align:center;
}

#eto{
	width: 1000px;
	height: 1300px;
	background: rgba(0,0,0,0.1);
	padding: 5px;
	color: black;
	margin: auto;
	margin-top: 5px;
	margin-bottom: 5px;
	font-family:comic sans ms;
	font-size:25px;}


h2{
vertical-align:baseline;
text-align:left;
}




</style>
	</head>
	<body>

	<img src = "log.png" width ="150" height "150"/>
	
	<a href="index.php" target="_self"  >
	<img src="form.png" width ="80" height ="40"align ="right"/>
	</a> 
	
	<a href="trivia.php" target="_self" align >
	<img src="trivia.png" width ="80" height ="40"align ="right"/>
	</a> 
	
	<a href="works.php" target="_self" align >
	<img src="works.png" width ="80" height ="40"align ="right"/>
	</a> 

	<a href="sites.php" target="_self" align >
	<img src="sites.png" width ="80" height ="40"align ="right"/>
	</a>

	<a href="about.php" target="_self" align >
	<img src="about.png" width ="80" height ="40"align ="right"/>
	</a>

	<a href="mypage.php" target="_self" align >
	<img src="home.png" width ="80" height ="40"align ="right"/>
	</a> 



	</br>
</br>
</br>
</br>
<div id="eto">
<center>
<h1>Trivia </h1>

<p id="works">Some Highlights:</p>
		



<h2>Rafael Furuya is Half Filipino and half ________</h2>
<button type="button" onclick="document.getElementById('first').innerHTML = 'Japanese'">Click Me!</button>
<p id="first"></p>

<h2>Rafael Furuya is taking __________ in college</h2>
<button type="button" onclick="document.getElementById('second').innerHTML = 'Information Technology'">Click Me!</button>
<p id="second"></p>

<h2>Rafael Furuya is born and raised in the ___________</h2>
<button type="button" onclick="document.getElementById('third').innerHTML = 'Philippines'">Click Me!</button>
<p id="third"></p>

<h2>If rafael furuya has a free time he spend it in ____</h2>
<button type="button" onclick="document.getElementById('fourth').innerHTML = 'Social Media'">Click Me!</button>
<p id="fourth"></p>


<h2>Rafael is currently into___________</h2>
<button type="button" onclick="document.getElementById('fifth').innerHTML = 'Photo Editing'">Click Me!</button>
<p id="fifth"></p>
	
	</center>
</div>
</body>
</html>
