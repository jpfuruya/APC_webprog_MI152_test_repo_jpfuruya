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
	$nickname = $_POST['lastname'];
	$email = $_POST['email'];
	$hadd = $_POST['hadd'];
	$gender = $_POST['gender']; 
	$cpnum = $_POST['cpnum'];
	$comment = $_POST['comment']; 
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE users SET name='$name',nickname='$nickname',email='$email',hadd='$hadd',gender='$gender',cpnum='$cpnum',comment='$comment' WHERE user_id=".$_GET['edit_id'];
        mysql_query($sql_query));
 // sql query for update data into database 
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <form method="post"><
    <table align="center">
   <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $namErr;?></span>
			<br><br> </td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickkame" value="<?php echo $nickname;?>">
			<span class="error">* <?php echo $nicknamErr;?></span></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span></td>
    </tr>
	<tr>
    <td><textarea name="hadd" placeholder ="hadd" rows ="2" cols="30"><?php echo $hadd;?></textarea>></span></td>
    </tr>

	<tr>
    <td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">* <?php echo $genderErr;?></span>
    </tr>

	<tr>
    <td><input type="text" name="cpnum" placeholder="Cellphone Number" value="<?php echo $cpnum;?>">
			<span class="error">* <?php echo $cpnumErr;?></span></td>
    </tr>

	<tr>
    <td><textarea name="comment" placeholder="Comment" rows="5" cols="40"><?php echo $comment;?></textarea></span></td>
    </tr>
	 </table>
    </form>
    </div>
</div>

</center>
</body>
</html>