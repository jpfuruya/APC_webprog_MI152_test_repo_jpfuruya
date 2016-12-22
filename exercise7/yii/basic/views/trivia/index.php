<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Trivia';
$this->params['breadcrumbs'][] = $this->title;

?>
<html>
<head>
<style>
body{


}</style>
</head>
<body>
<h1>Trivia</h1>
<ul>
<?php foreach ($trivia as $trivias): ?>
    <li>
        <?= Html::encode("{$trivias->trivia}") ?>:
        <h5>Answer: </h5>
        <strong><?= Html::encode("({$trivias->answer})") ?>: </strong>
    </li>
    <br>
<?php endforeach; ?>

<img src = "log.png" width="180" height="75" >
</ul>
</body>

