<?php

namespace common\modules\auth\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\auth\models\Myquiz;

/**
 * MyquizSearch represents the model behind the search form of `common\modules\auth\models\Myquiz`.
 */
class MyquizSearch extends Myquiz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Quiz', 'User', 'Qualified', 'Result'], 'safe'],
            [['QuizQuestions', 'Correctanswers', 'incorrectanswers'], 'integer'],
            [['Percentages'], 'number'],
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
        $query = Myquiz::find();

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
            'QuizQuestions' => $this->QuizQuestions,
            'Correctanswers' => $this->Correctanswers,
            'incorrectanswers' => $this->incorrectanswers,
            'Percentages' => $this->Percentages,
        ]);

        $query->andFilterWhere(['like', 'Quiz', $this->Quiz])
            ->andFilterWhere(['like', 'User', $this->User])
            ->andFilterWhere(['like', 'Qualified', $this->Qualified])
            ->andFilterWhere(['like', 'Result', $this->Result]);

        return $dataProvider;
    }
}
