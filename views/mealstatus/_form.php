<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\MealStatus;

/* @var $this yii\web\View */
/* @var $model app\models\MealStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meal-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->dropDownList([
        MealStatus::STATUS_OPEN => 'Open',
        MealStatus::STATUS_CLOSE => 'Close'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
