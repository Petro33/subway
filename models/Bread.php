<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bread".
 *
 * @property int $id
 * @property string $name
 *
 * @property Meal[] $meals
 */
class Bread extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bread';
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
        return $this->hasMany(Meal::className(), ['bread_id' => 'id']);
    }
}
