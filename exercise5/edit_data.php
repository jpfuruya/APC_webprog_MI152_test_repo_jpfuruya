<<html>
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
	height: 1000px;
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
<link rel="stylesheet" href="style.css" type="text/css" />
	
<center>
<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	$email = $_POST['email'];
	$hadd = $_POST['hadd'];
	$gender = $_POST['gender']; 
	$cpnum = $_POST['cpnum'];
	$comment = $_POST['comment']; 
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE users SET name='$name', nickname='$nickname',email='$email',hadd='$hadd',gender='$gender',cpnum='$cpnum',comment='$comment' WHERE user_id=".$_GET['edit_id'];   
 // sql query for update data into database 
 
// sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  window.location.href='index.php';
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>

</head>
</center>
<body>

	<img src = "log.png" width ="150" height "150"/>
	
	
	<a href="form.php" target="_self"  >
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


<center>
	</br>
</br>
</br>
</br>
<center>
<div id="eto">
<h1>Form</h1>

<div id="header">
 <div id="content">
    <label>Please fill out the form.</label>
    </div>
	<div id="body">		
	<div id="content">
    <form method="post">
    <table align="center">
   <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required/></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickkame" value="<?php echo $fetched_row['nickname'];?>"required/></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email'];?>" required></td>
    </tr>
	<tr>
    <td><textarea name="hadd" placeholder ="home address" rows ="3" cols="30"><?php echo $fetched_row['hadd'];?></textarea></td>
    </tr>
	<tr>
    <td><input type="radio" name="gender"  <?php if (isset($gender) && $gender=="female") echo $fetched_row['gender']; ?> value="female">Female
	<input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo $fetched_row['gender']; ?> value="male">Male
	</td>
    </tr>
	<tr>
    <td><input type="text" name="cpnum" placeholder="Cellphone Number" value="<?php echo $fetched_row['cpnum'];?>"required></td>
    </tr>
	<tr>
    <td><textarea name="comment" placeholder="Comment" rows="5" cols="40"><?php echo $fetched_row['comment'];?></textarea></td>
    </tr>
	<tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
	 </table>
    </form>
    </div>
</div>

</center>
</body>
</html>