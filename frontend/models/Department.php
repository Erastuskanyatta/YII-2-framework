<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string $buiding
 * @property float $budget
 * @property string $location
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['buiding', 'budget', 'location'], 'required'],
            [['budget'], 'number'],
            [['buiding', 'location'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'buiding' => 'Buiding',
            'budget' => 'Budget',
            'location' => 'Location',
        ];
    }
}
