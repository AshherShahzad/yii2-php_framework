<?php

namespace common\modules\auth\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\auth\models\Emp;

/**
 * EmpSearch represents the model behind the search form of `common\modules\auth\models\Emp`.
 */
class EmpSearch extends Emp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['empno', 'mgr', 'deptno'], 'integer'],
            [['ename', 'job', 'hiredate'], 'safe'],
            [['sal', 'comm'], 'number'],
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
        $query = Emp::find();

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
            'empno' => $this->empno,
            'mgr' => $this->mgr,
            'hiredate' => $this->hiredate,
            'sal' => $this->sal,
            'comm' => $this->comm,
            'deptno' => $this->deptno,
        ]);

        $query->andFilterWhere(['like', 'ename', $this->ename])
            ->andFilterWhere(['like', 'job', $this->job]);

        return $dataProvider;
    }
}
