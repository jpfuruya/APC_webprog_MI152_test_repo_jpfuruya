<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Net';
$this->params['breadcrumbs'][] = $this->title;
?>
<html>
<head>
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


</style>
	</head>
	<body>


<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

<center>
	<img src = "icon.png" width="220" height="200" >
	<p id ="some"> Some of his favorite Sites </p>
	</center>

<center>
    <p>
        <strong id="link">
	<a href="https://twitter.com/Furuyarafael" target="_blank">twitter.com/Furuyarafael</a> </br>
	<a href="https://www.instagram.com/rafaelfuruya/" target="_self">instagram.com/rafaelfuruya/</a>  </br>
	<a href="https://www.facebook.com/jpfuruya" target="_parent">facebook.com/jpfuruya</a> </br>
	<a href="https://www.tumblr.com/blog/huckleveryfinn" target="_top">huckleveryfinn.tumblr.com/</a> </br>
	<a href="http://9gag.com/" target="_top">http://9gag.com//</a> </br>
	<img src = "log.png" width="200" height="90" >
    <br>
	</center>
	</strong>
    </p>

    
</div>
