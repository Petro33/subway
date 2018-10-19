<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MealSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'bread_id') ?>

    <?= $form->field($model, 'bread_size_id') ?>

    <?= $form->field($model, 'baked_type_id') ?>

    <?php // echo $form->field($model, 'taste_sandwich_id') ?>

    <?php // echo $form->field($model, 'extras_id') ?>

    <?php // echo $form->field($model, 'vegetables_id') ?>

    <?php // echo $form->field($model, 'sauce_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'rate_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
