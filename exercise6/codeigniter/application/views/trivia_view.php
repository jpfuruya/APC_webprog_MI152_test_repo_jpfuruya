<html>
<head>
<title>My Site</title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
<style>


		
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
				}


			h2{
				vertical-align:baseline;
				text-align:left;
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




	</br>
</br>
</br>
</br>
<div id="eto">
<center>
<h1 style = "font-family:impact;">Trivia </h1>

<p id="works">Some Highlights:
<br>
*click the button to see the answer.</p>
	
        <div class="name-tag">
             <h1>Rafael Furuya is Half Filipino and half </h1> <br>
			 <h1> <button type="button" onclick="document.getElementById('first').innerHTML = 'Japanese'">Click Me!</button></h1>
            <p id="first"></p>
        </div>
        
		<div class="name-tag">
             <h1>Rafael Furuya is taking what course in college</h1>
			 <br>
			 <h1> <button type="button" onclick="document.getElementById('second').innerHTML = 'BS- IT'">Click Me!</button></h1>
            <p id="second"></p>
        </div>
		<div class="name-tag">
            <h1>Rafael Furuya was born and raised in the </h1><br>
				 <h1> <button type="button" onclick="document.getElementById('third').innerHTML = 'Philippines'">Click Me!</button></h1>
				<p id="third"></p>
        </div>
		<div class="name-tag">
            <h1>Rafael Furuya spends most of his free time in</h1><br>
            <h1> <button type="button" onclick="document.getElementById('fourth').innerHTML = 'Social Media'">Click Me!</button></h1>
				<p id="fourth"></p>
        </div>
		
		<div class="name-tag">
            <h1>Rafael Furuya is currently into</h1><br>
            <h1> <button type="button" onclick="document.getElementById('fifth').innerHTML = 'Photo Editing'">Click Me!</button></h1>
				<p id="fifth"></p>
        </div>
        	


	</center>
</div>
</body>
</html>

