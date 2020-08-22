<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lectures".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $unit
 * @property int $unit_code
 * @property int $mobile
 * @property string $gender
 */
class Lectures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lectures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'unit', 'unit_code', 'mobile', 'gender'], 'required'],
            [['unit_code', 'mobile'], 'integer'],
            [['firstname', 'lastname', 'unit', 'gender'], 'string', 'max' => 100],
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
            'unit' => 'Unit',
            'unit_code' => 'Unit Code',
            'mobile' => 'Mobile',
            'gender' => 'Gender',
        ];
    }
}
