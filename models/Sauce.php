<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sauce".
 *
 * @property int $id
 * @property string $name
 *
 * @property Meal[] $meals
 */
class Sauce extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sauce';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeals()
    {
        return $this->hasMany(Meal::className(), ['sauce_id' => 'id']);
    }
}
