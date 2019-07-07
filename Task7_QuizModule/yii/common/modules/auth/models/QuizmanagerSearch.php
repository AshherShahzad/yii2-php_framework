<?php

namespace common\modules\auth\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\auth\models\Quizmanager;

/**
 * QuizmanagerSearch represents the model behind the search form of `common\modules\auth\models\Quizmanager`.
 */
class QuizmanagerSearch extends Quizmanager
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'NoOfQuestions', 'Timeallowed'], 'integer'],
            [['QuizName', 'AssignedUser', 'createdat'], 'safe'],
            [['createdby'], 'number'],
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
        $query = Quizmanager::find();

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
            'ID' => $this->ID,
            'NoOfQuestions' => $this->NoOfQuestions,
            'Timeallowed' => $this->Timeallowed,
            'createdat' => $this->createdat,
            'createdby' => $this->createdby,
        ]);

        $query->andFilterWhere(['like', 'QuizName', $this->QuizName])
            ->andFilterWhere(['like', 'AssignedUser', $this->AssignedUser]);

        return $dataProvider;
    }
}
