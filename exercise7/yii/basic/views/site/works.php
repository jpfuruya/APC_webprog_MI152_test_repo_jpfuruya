<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Works';
$this->params['breadcrumbs'][] = $this->title;
?>

<html>
<head>
<body>
<style>




#works{
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
	font-size:25px;}


table, th, td {
    border: 5px ridge black;
	}

	</style>
	</head>
	<body>
	
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <table>
		
		<tr>
			<th>work</th>
			<th> image</th>
		</tr>
		
		<tr>
			<td>Unleash within</td>
			<td> <img src = "red.jpg" height = "300" width = "250"> </td>
		</tr>
		
		<tr>
			<td>Glitch</td>
			<td> <img src = "glitch.jpg" height = "300" width = "350"> </td>
		</tr>
		
		<tr>
			<td>Broken</td>
			<td> <img src = "broken.png" height = "300" width = "250"> </td>
		</tr>
		
		<tr>
			<td>When Light strikes</td>
				<td> <img src = "light.jpg" height = "300" width = "250"> </td>
		</tr>
		
		</table>

   
</div>
