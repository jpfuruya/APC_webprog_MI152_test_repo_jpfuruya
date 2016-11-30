<html>
<head>
<title>My Site</title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
<style>


h1{
font-family:impact;
font-size:40px;
align:center;
}



#some{
font-family:comic sans ms;
font-size:28px;
text-align:center;
}

#link{
font-family:comic sans ms;
font-size:25px;
}

#hey{
	width: 450px;
	height: 600px;
	background: rgba(0,0,0,0.1);
	padding: 5px;
	color: black;
	margin: auto;
	margin-top: 5px;
	margin-bottom: 5px;
	text-align: center;
}



 ul
 {
	padding:1px;
	overflow:hidden;
	list-style-type:none;
	margin:0;
	background-color:"#151515";
	z-index:0;
	}
	
	
   li img
   {
	   padding:0px;
	   float:left;
	   z-index:0;
	   }
	   
	   
   li a
   {
	color:black;
   padding:10px;
   float:right;
   text-decoration:none;
   font-family: Impact;
   font-size:30px;
   z-index:0;
   }
   
   
   li a:hover
   {
	   background-color:white;
	   color:black;
	   font-size:33px;}
   
   
   #s a{
	   
	   font-size:45px;
	   font-family: Impact;
	   color:blue;
   }

</style>
	</head>
	<body>

	
	
	<ul>
	<li> <img src="<?php echo base_url('css/uploads/log.png')?>" width ="150" height ="100" /></li>
<li><a href="<?php echo site_url('users'); ?>">Form</a></a></li>
<li><a href="<?php echo site_url('users/create'); ?>">Add User</a></li>
<li><a href="<?php echo base_url('index.php/user_controller/trivia')?>" target="_self">Trivia</a></li>
<li><a href="<?php echo base_url('index.php/user_controller/works')?>" target="_self">Works</a></li>
<li><a href="<?php echo base_url('index.php/user_controller/sites')?>" target="_self">Sites</a></li>
<li><a href="<?php echo base_url('index.php/user_controller/about')?>" target="_self">About Me</a></li>
<li><a href="<?php echo base_url('index.php/user_controller/mypage')?>" target="_self">Home</a></li>
</ul>
<a href="<?php echo site_url('users/create'); ?>">Add User</a>


	<br>
	
	<div id="hey">
	<h1 align="center">Rafael on Internet</h1>


	<center>
	 <img src="<?php echo base_url('css/uploads/icon.png')?>" width ="220" height ="200" />
	<p id ="some"> Some of his favorite Sites </p>
	</center>
	

	<center>
	<strong id="link">
	<a href="https://twitter.com/Furuyarafael" target="_blank">twitter.com/Furuyarafael</a> </br>
	<a href="https://www.instagram.com/rafaelfuruya/" target="_self">instagram.com/rafaelfuruya/</a>  </br>
	<a href="https://www.facebook.com/jpfuruya" target="_parent">facebook.com/jpfuruya</a> </br>
	<a href="https://www.tumblr.com/blog/huckleveryfinn" target="_top">huckleveryfinn.tumblr.com/</a> </br>
	<a href="http://9gag.com/" target="_top">http://9gag.com//</a> </br>
	</center>
	</strong>
	</div>
	
	</body>
</html>