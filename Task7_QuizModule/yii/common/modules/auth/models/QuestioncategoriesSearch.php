<?php

namespace common\modules\auth\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\auth\models\Questioncategories;

/**
 * QuestioncategoriesSearch represents the model behind the search form of `common\modules\auth\models\Questioncategories`.
 */
class QuestioncategoriesSearch extends Questioncategories
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Questioncount'], 'integer'],
            [['NAME', 'active'], 'safe'],
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
        $query = Questioncategories::find();

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
            'Questioncount' => $this->Questioncount,
        ]);

        $query->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'active', $this->active]);

        return $dataProvider;
    }
}
