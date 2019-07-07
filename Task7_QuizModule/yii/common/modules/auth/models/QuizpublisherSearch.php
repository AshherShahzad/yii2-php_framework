<?php

namespace common\modules\auth\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\auth\models\Quizpublisher;

/**
 * QuizpublisherSearch represents the model behind the search form of `common\modules\auth\models\Quizpublisher`.
 */
class QuizpublisherSearch extends Quizpublisher
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Quiz', 'User', 'Status', 'ShowResult'], 'safe'],
            [['id'], 'integer'],
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
        $query = Quizpublisher::find();

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
        ]);

        $query->andFilterWhere(['like', 'Quiz', $this->Quiz])
            ->andFilterWhere(['like', 'User', $this->User])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'ShowResult', $this->ShowResult]);

        return $dataProvider;
    }
}
