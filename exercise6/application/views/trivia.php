<html>
<head>
<title>My Site</title>
<style>

				body{
				background-image: url("t.jpg");
				z-index: -1;
				background-size:cover;
				margin:20px 20px 20px 20px;
				padding: 20px 30px 20px 20px;
				border:dashed;
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
				}


			h2{
				vertical-align:baseline;
				text-align:left;
			}

			.name-tag {
                border: 1px solid darkslategrey;
                border-radius: 6px;
                width: 355px;
                height: 200px;
                margin: 10px 10px 10px 100px;
                background: darkslategray;
                font-family: sans-serif;
				float:left;
				overflow:auto
            }
            
            .name-tag h1 {
                color: white;
                text-align: center;
                height: 25px;
                margin: 0px 0px 0px 0px;
                font-size: 20px;
            }
            .name-tag p {
                position: relative;
                left: 5px;
                padding: 10px;
                width: 295px;
                height: 70px;
                background: white;
                font-family: cursive;
                font-size: 20px;
                text-align: center;
                        
            
     
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
            <h1>Rafael Furuya is born and raised in the </h1><br>
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

