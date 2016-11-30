<html>

<head>

<style>

 ul{
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
	   
	   
   li a{
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
	   </head>
        </style>
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
<center>
<a href="<?php echo site_url('users/create'); ?>">Add User</a>

</center>
</body>
</html>

