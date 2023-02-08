<?php

/* @var $this yii\web\View */

use yii\bootstrap4\Html;
use yii\widgets\ListView;

$this->title = Yii::$app->name;
?>
<?= Html::a('Добавить товар', ['/tovar/create'], ['class' => 'btn btn-success mb-4']) ?>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n{pager}",
    'options' => ['class' => 'row justify-content-center'],
    'itemOptions' => ['class' => 'col-3 mb-3'],
    'itemView' => '_list',
]) ?>