<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Student;

/**
 * studentsSearch represents the model behind the search form of `frontend\models\Student`.
 */
class studentsSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'regno'], 'integer'],
            [['firstname', 'secondname', 'thirdname', 'mobileno', 'gender', 'dateofbirth', 'city', 'email', 'address', 'student_fathersname', 'atudent_fathersmobileno', 'student_fathersid', 'student_mothersname', 'student_mothersmobile', 'student_mothersid'], 'safe'],
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
        $query = Student::find();

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
            'regno' => $this->regno,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'secondname', $this->secondname])
            ->andFilterWhere(['like', 'thirdname', $this->thirdname])
            ->andFilterWhere(['like', 'mobileno', $this->mobileno])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'dateofbirth', $this->dateofbirth])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'student_fathersname', $this->student_fathersname])
            ->andFilterWhere(['like', 'atudent_fathersmobileno', $this->atudent_fathersmobileno])
            ->andFilterWhere(['like', 'student_fathersid', $this->student_fathersid])
            ->andFilterWhere(['like', 'student_mothersname', $this->student_mothersname])
            ->andFilterWhere(['like', 'student_mothersmobile', $this->student_mothersmobile])
            ->andFilterWhere(['like', 'student_mothersid', $this->student_mothersid]);

        return $dataProvider;
    }
}
