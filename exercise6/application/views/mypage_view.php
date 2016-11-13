<head>
<title>My Site</title>
<style>






body{
background-image: url("css/uploads/bg.jpg");
background-size:cover;
background-repeat:no-repeat;
margin:20px 20px 20px 20px;
padding: 20px 30px 20px 20px;

border:dashed;
}


h1{
font-family:impact;
font-size:50px;
align:center;
}

p{
font-family:comic sans ms;
font-size:25px;
align:center;
}


.hello{
font-size:30px;
}

#prof{
	width: 450px;
	height: 560px;
	background: rgba(0,0,0,0.1);
	padding: 5px;
	color: black;
	margin: auto;
	margin-top: 5px;
	margin-bottom: 5px;
	text-align: center;
}

	ul{padding:1px;overflow:hidden;list-style-type:none;margin:0;background-color:"#151515";z-index:0;}
	li img{padding:0px;float:left;z-index:0;}
	li a{color:black;padding:10px;float:right;text-decoration:none;font-family: Impact;font-size:30px;z-index:0;}
	li a:hover{background-color:white;color:black;font-size:33px;}
	
	
<link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">

</style>

</head>
<div id ="head">


         

	<ul>
	<li> <img src="<?php echo base_url('css/uploads/log.png')?>" width ="150" height ="100" /></a></li>
<li><a href="form_view.php" target="self">Form</a></li>
<li><a href="trivia_view.php" target="_self">Trivia</a></li>
<li><a href="works_view.php" target="_self">Works</a></li>
<li><a href="sites_view.php" target="_self">Sites</a></li>
<li><a href="about_viewphp" target="_self">About Me</a></li>
<li><a href="mypage_view.php" target="_self"> Home </a></li>
</ul>

</div>

<div id="prof">

<h1 align="center">This is My Story.<h1>


<center>
<img src="<?php echo base_url('css/uploads/isa.png')?>" width ="280" height ="280" />


<p>
<strong>Hello my name is Rafael <strong> <br>
Welcome to my site.<br>
Explore more to know me better.<br>
<br>
</center>
</p>

</div>
</body>
</html>