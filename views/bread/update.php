<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bread */

$this->title = 'Update Bread: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Breads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bread-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
