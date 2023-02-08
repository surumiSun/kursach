<?php

use yii\bootstrap4\Html;

?>

<div class="card w-100">
    <div class="card-header">
        <?= Html::encode($model->name) ?>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <?= Html::encode($model->description) ?>
            <?= Html::encode($model->image) ?>
        </div>
        <div>
            <?= Html::a('Заказать за ' . $model->price . ' ₽', ['/tovar/view', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>