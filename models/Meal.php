<?php

namespace app\models;

use Yii;
use voskobovich\behaviors\ManyToManyBehavior;

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
 * @property \data $created_at
 * @property \data $updated_at
 *
 * @property BakedType $bakedType
 * @property Bread $bread
 * @property BreadSize $breadSize
 * @property Extras $extras
 * @property Sauce $sauce
 * @property TasteSandwich $tasteSandwich
 * @property Vegetables $vegetables
 * @property Rate $rate
 */
class Meal extends \yii\db\ActiveRecord
{
    function behaviors()
    {
        return [
            'relations' => [
                'class' => ManyToManyBehavior::className(),
                'relations' => [
                    'bread_id' => 'bread',
                    'user_id' => 'user',
                    'rate_id' => 'rate',
                    'bread_size_id' => 'breadSize',
                    'baked_type_id' => 'bakedType',
                    'taste_sandwich_id' => 'tasteSandwich',
                    'extras_id' => 'extras',
                    'vegetables_id' => 'vegetables',
                    'sauce_id' => 'sauce',
                ],
            ],
        ];
    }
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
            [['name', 'bread_id', 'bread_size_id', 'baked_type_id', 'taste_sandwich_id', 'extras_id', 'sauce_id', 'user_id', 'rate_id'], 'required'],
            [['bread_id', 'bread_size_id', 'baked_type_id', 'taste_sandwich_id', 'extras_id', 'vegetables_id', 'sauce_id', 'user_id', 'rate_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['baked_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => BakedType::className(), 'targetAttribute' => ['baked_type_id' => 'id']],
            [['bread_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bread::className(), 'targetAttribute' => ['bread_id' => 'id']],
            [['bread_size_id'], 'exist', 'skipOnError' => true, 'targetClass' => BreadSize::className(), 'targetAttribute' => ['bread_size_id' => 'id']],
            [['extras_id'], 'exist', 'skipOnError' => true, 'targetClass' => Extras::className(), 'targetAttribute' => ['extras_id' => 'id']],
            [['sauce_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sauce::className(), 'targetAttribute' => ['sauce_id' => 'id']],
            [['taste_sandwich_id'], 'exist', 'skipOnError' => true, 'targetClass' => TasteSandwich::className(), 'targetAttribute' => ['taste_sandwich_id' => 'id']],
            [['vegetables_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vegetables::className(), 'targetAttribute' => ['vegetables_id' => 'id']],

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
            'extras_id' => 'Extras',
            'vegetables_id' => 'Vegetables',
            'sauce_id' => 'Sauce',
            'user_id' => 'User',
            'rate_id' => 'Rate',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBakedType()
    {
        return $this->hasOne(BakedType::className(), ['id' => 'baked_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBread()
    {
        return $this->hasOne(Bread::className(), ['id' => 'bread_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreadSize()
    {
        return $this->hasOne(BreadSize::className(), ['id' => 'bread_size_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExtras()
    {
        return $this->hasOne(Extras::className(), ['id' => 'extras_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSauce()
    {
        return $this->hasOne(Sauce::className(), ['id' => 'sauce_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasteSandwich()
    {
        return $this->hasOne(TasteSandwich::className(), ['id' => 'taste_sandwich_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVegetables()
    {
        return $this->hasOne(Vegetables::className(), ['id' => 'vegetables_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRate()
    {
        return $this->hasOne(Rate::className(), ['id' => 'rate_id']);
    }
}
