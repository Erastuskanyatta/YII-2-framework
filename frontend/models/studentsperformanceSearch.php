<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Studentsperformance;

/**
 * studentsperformanceSearch represents the model behind the search form of `frontend\models\Studentsperformance`.
 */
class studentsperformanceSearch extends Studentsperformance
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'unitcode'], 'integer'],
            [['firstname', 'lastname', 'unitname', 'unit_grade', 'total_grade', 'total_gradeincreased', 'sem'], 'safe'],
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
        $query = Studentsperformance::find();

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
            'unitcode' => $this->unitcode,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'unitname', $this->unitname])
            ->andFilterWhere(['like', 'unit_grade', $this->unit_grade])
            ->andFilterWhere(['like', 'total_grade', $this->total_grade])
            ->andFilterWhere(['like', 'total_gradeincreased', $this->total_gradeincreased])
            ->andFilterWhere(['like', 'sem', $this->sem]);

        return $dataProvider;
    }
}
