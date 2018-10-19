<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meal".
 *
 * @property int $id
 * @property string $name
 * @property int $bread_id
 * @property int $bread_size_id
 * @property int $baked_type_id
 * @property int $taste_sandwich_id
 * @property int $extras_id
 * @property int $vegetables_id
 * @property int $sauce_id
 * @property int $user_id
 * @property int $rate_id
 * @property \data created_at
 */
class Meal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'bread_id', 'bread_size_id', 'baked_type_id', 'taste_sandwich_id', 'extras_id', 'vegetables_id', 'sauce_id', 'user_id', 'rate_id'], 'required'],
            [['bread_id', 'bread_size_id', 'baked_type_id', 'taste_sandwich_id', 'extras_id', 'vegetables_id', 'sauce_id', 'user_id', 'rate_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'bread_id' => 'Bread',
            'bread_size_id' => 'Bread Size',
            'baked_type_id' => 'Baked Type',
            'taste_sandwich_id' => 'Taste Sandwich',
            'extras_id' => 'Extras ID',
            'vegetables_id' => 'Vegetables',
            'sauce_id' => 'Sauce',
            'user_id' => 'User',
            'rate_id' => 'Rate',
        ];
    }


}
