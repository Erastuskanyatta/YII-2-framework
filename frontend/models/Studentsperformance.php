<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "studentsperformance".
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string $unitname
 * @property int $unitcode
 * @property string|null $unit_grade
 * @property string|null $total_grade
 * @property string|null $total_gradeincreased
 * @property string|null $sem
 */
class Studentsperformance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentsperformance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unitname', 'unitcode'], 'required'],
            [['unitcode'], 'integer'],
            [['firstname', 'lastname', 'unitname', 'unit_grade', 'total_grade', 'total_gradeincreased', 'sem'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'unitname' => 'Unitname',
            'unitcode' => 'Unitcode',
            'unit_grade' => 'Unit Grade',
            'total_grade' => 'Total Grade',
            'total_gradeincreased' => 'Total Gradeincreased',
            'sem' => 'Sem',
        ];
    }
}
