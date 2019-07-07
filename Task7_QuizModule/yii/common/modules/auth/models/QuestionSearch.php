<?php

namespace common\modules\auth\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\auth\models\Question;

/**
 * QuestionSearch represents the model behind the search form of `common\modules\auth\models\Question`.
 */
class QuestionSearch extends Question
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ques_id', 'quiz_id'], 'integer'],
            [['ques_name', 'ques_type_name', 'ques_level_name', 'ques_categories_name', 'status'], 'safe'],
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
        $query = Question::find();

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
            'Ques_id' => $this->Ques_id,
            'quiz_id' => $this->quiz_id,
        ]);

        $query->andFilterWhere(['like', 'ques_name', $this->ques_name])
            ->andFilterWhere(['like', 'ques_type_name', $this->ques_type_name])
            ->andFilterWhere(['like', 'ques_level_name', $this->ques_level_name])
            ->andFilterWhere(['like', 'ques_categories_name', $this->ques_categories_name])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
