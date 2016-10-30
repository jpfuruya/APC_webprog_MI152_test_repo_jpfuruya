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



#form{
font-family:comic sans ms;
font-size:28px;
text-align:center;
}

#eto{
	width: 1000px;
	height: 1600px;
	background: rgba(0,0,0,0.1);
	padding: 5px;
	color: black;
	margin: auto;
	margin-top: 5px;
	margin-bottom: 5px;
	font-family:comic sans ms;
	font-size:25px;
	vertical-align:baseline;
	}

#hey {
	vertical-align:baseline;
	padding-left:80px;
	font-family:comic sans ms;
	font-size:25px;
	text-align:center;
	}


</style>
	</head>
	<body>

	<img src = "log.png" width ="150" height "150"/>
	
	
	<a href="form.php" target="_self"  >
	<img src="form.png" width ="80" height ="40"align ="right"/>
	</a> 
	
	<a href="trivia.html" target="_self" align >
	<img src="trivia.png" width ="80" height ="40"align ="right"/>
	</a> 

	<a href="works.html" target="_self" align >
	<img src="works.png" width ="80" height ="40"align ="right"/>
	</a> 

	<a href="sites.html" target="_self" align >
	<img src="sites.png" width ="80" height ="40"align ="right"/>
	</a>

	<a href="about.html" target="_self" align >
	<img src="about.png" width ="80" height ="40"align ="right"/>
	</a>

	<a href="mypage.html" target="_self" align >
	<img src="home.png" width ="80" height ="40"align ="right"/>
	</a> 



	</br>
</br>
</br>
</br>
<div id="eto">
<center>
<h1>Form</h1>

<p id="form">Please enter the following: </p>
	
<?php
		// define variables and set to empty values
		$nameErr = $nicknameErr = $emailErr = $genderErr =$cpnumErr = "";
		$name = $nickname = $email = $hadd = $gender = $cpnum = $comment = "";
		
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  	if (empty($_POST["name"])) {
				$nameErr = "Name is required";
		  	} else {
				$name = test_input($_POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and white space allowed";
					$name = "";
				}
		  	}

			
			
			if(empty($_POST["nickname"])){
		  		$nicknameErr = "Nickname is required";
			}else{
		  		$nickname = test_input($_POST["nickname"]);
		  		if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
				$nicknameErr = "Only letters and white space allowed";
				$nickname = "";
				}
			}
		  
		  
		  
			if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		  	} else {
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  	$emailErr = "Invalid email format";
			  	$email = "";
				}
		  	}

			
			
			if(empty($_POST["hadd"])){
			  	$hadd = "";
			}else{
			  	$hadd = test_input($_POST["hadd"]);
			}

			

		  	if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
		  	} else {
				$gender = test_input($_POST["gender"]);
		  	}
			
			

			if (empty($_POST["cpnum"])) {
				$cpnumErr = "Mobile number is required";
		  	} else {
				$cpnum = test_input($_POST["cpnum"]);
				if(!preg_match("/^[0-9]*$/",$cpnum)){
					$cpnumErr = "Only numbers are allowed";
					$cpnum = "";
				}
		  	}
			
			
			
			if (empty($_POST["comment"])) {
				$comment = "";
		  	} else {
				$comment = test_input($_POST["comment"]);
		  	}	
		}


	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
			}
			?>
	
	
			<p><span class="error">* required field.</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		<div id ="hey">

		Name: <input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>  
			Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
			<span class="error">* <?php echo $nicknameErr;?></span>
			 <br><br>
			E-mail: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>
			Home Address: <textarea name="hadd" rows ="2" cols="30"><?php echo $hadd;?></textarea>
			<br><br>
			Gender:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">* <?php echo $genderErr;?></span>
			<br><br>
			Cellphone Number: <input type="text" name="cpnum" value="<?php echo $cpnum;?>">
			<span class="error">* <?php echo $cpnumErr;?></span>
			<br><br>
			Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
			<br><br>
			<input type="submit" name="submit" value="Submit">  
</form>
</div>
	<?php
			
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $nickname;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $hadd;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $cpnum;
		echo "<br>";
		echo $comment;
		echo "<br>";
	
?>

</div>
</body>
</html>