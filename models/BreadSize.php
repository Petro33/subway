<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bread_size".
 *
 * @property int $id
 * @property string $name
 *
 * @property Meal[] $meals
 */
class BreadSize extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bread_size';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['id'], 'unique'],
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
        return $this->hasMany(Meal::className(), ['bread_size_id' => 'id']);
    }
}
