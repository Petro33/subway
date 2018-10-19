<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\Bread;
use app\models\BreadSize;
use app\models\BakedType;
use app\models\TasteSandwich;
use app\models\Extras;
use app\models\Vegetables;
use app\models\Sauce;
use app\models\Rate;
use app\models\User;
use app\models\MealStatus;

/* @var $this yii\web\View */
/* @var $model app\models\Meal */

$this->title = 'Update Meal: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Meals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="meals-form">

        <?php $form = ActiveForm::begin(); ?>

        <?php
        if(User::isAdmin()){
            echo $form->field($model, 'user_id')->dropDownList(ArrayHelper::map(User::find()->all(), 'id', 'username'), array('disabled' => 'disabled'));
        }
        ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'disabled' => 'disabled']) ?>

        <?= $form->field($model, 'bread_id')->dropDownList(ArrayHelper::map(Bread::find()->all(), 'id', 'name'), array('disabled' => 'disabled')) ?>

        <?= $form->field($model, 'bread_size_id')->dropDownList(ArrayHelper::map(BreadSize::find()->all(), 'id', 'name'), array('disabled' => 'disabled')) ?>

        <?= $form->field($model, 'baked_type_id')->dropDownList(ArrayHelper::map(BakedType::find()->all(), 'id', 'name'), array('disabled' => 'disabled')) ?>

        <?= $form->field($model, 'taste_sandwich_id')->dropDownList(ArrayHelper::map(TasteSandwich::find()->all(), 'id', 'name'), array('disabled' => 'disabled')) ?>

        <?= $form->field($model, 'extras_id')->dropDownList(ArrayHelper::map(Extras::find()->all(), 'id', 'name'), array('disabled' => 'disabled')) ?>

        <?= $form->field($model, 'vegetables_id')->dropDownList(ArrayHelper::map(Vegetables::find()->all(), 'id', 'name'), array('disabled' => 'disabled')) ?>

        <?= $form->field($model, 'sauce_id')->dropDownList(ArrayHelper::map(Sauce::find()->all(), 'id', 'name'), array('disabled' => 'disabled')) ?>

        <?= $form->field($model, 'rate_id')->dropDownList(ArrayHelper::map(Rate::find()->all(), 'id', 'name')) ?>

        <div class="form-group">
            <?php
                if(MealStatus::getMealStatus() == MealStatus::STATUS_CLOSE){
                    echo 'Time for order meal expired!';
                }else{
                    echo Html::submitButton('Save', ['class' => 'btn btn-success']);
                }
            ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>
