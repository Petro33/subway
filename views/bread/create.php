<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bread */

$this->title = 'Create Bread';
$this->params['breadcrumbs'][] = ['label' => 'Breads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bread-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
