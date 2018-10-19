<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meal_status".
 *
 * @property int $id
 * @property int $status
 */
class MealStatus extends \yii\db\ActiveRecord
{
    const STATUS_OPEN 		= 1;
    const STATUS_CLOSE 		= 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meal_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
        ];
    }

    public static function getMealStatus()
    {
        return static::findOne(['id' => 1])->status;
    }
}
