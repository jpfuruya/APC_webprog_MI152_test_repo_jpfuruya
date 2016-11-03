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
	width: 1100px;
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


<link rel="stylesheet" href="style.css" type="text/css" />
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
<h1>Data</h1>
<label>enter data here!</label>
	
<?php
include_once 'dbconfig.php';

//delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
//delete condition
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>


<div id="body">
 <div id="content">
 
    <table align="center">
    <tr>
    <th colspan="9"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>Name</th>
    <th>Nick Name</th>
    <th>Email</th>
	<th>Home Address</th>
	<th>Gender</th>
	<th>Cell Phone</th>
	<th>comments:</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($link, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>