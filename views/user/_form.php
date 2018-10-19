<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'status')->dropDownList([
        User::STATUS_ACTIVE => 'Active',
        User::STATUS_NOT_ACTIVE =>'Inactive',
        User::STATUS_DELETED => 'Deleted'
    ]) ?>

    <?= $form->field($model, 'role')->dropDownList([
        User::ROLE_USER => 'User',
        User::ROLE_ADMIN => 'Admin'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
