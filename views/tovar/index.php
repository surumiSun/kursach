<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TovarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tovars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tovar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tovar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            'price',
            'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
