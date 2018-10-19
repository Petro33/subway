<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BreadSize */

$this->title = 'Update Bread Size: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bread Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bread-size-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
