<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Meal;

/**
 * MealSearch represents the model behind the search form of `app\models\Meal`.
 */
class MealSearch extends Meal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'bread_id', 'bread_size_id', 'baked_type_id', 'taste_sandwich_id', 'extras_id', 'vegetables_id', 'sauce_id', 'user_id', 'rate_id'], 'integer'],
            [['name', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Meal::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'bread_id' => $this->bread_id,
            'bread_size_id' => $this->bread_size_id,
            'baked_type_id' => $this->baked_type_id,
            'taste_sandwich_id' => $this->taste_sandwich_id,
            'extras_id' => $this->extras_id,
            'vegetables_id' => $this->vegetables_id,
            'sauce_id' => $this->sauce_id,
            'user_id' => $this->user_id,
            'rate_id' => $this->rate_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
