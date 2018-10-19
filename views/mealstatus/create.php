<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MealStatus */

$this->title = 'Create Meal Status';
$this->params['breadcrumbs'][] = ['label' => 'Meal Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meal-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
