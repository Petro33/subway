<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TasteSandwich */

$this->title = 'Update Taste Sandwich: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Taste Sandwiches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taste-sandwich-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
