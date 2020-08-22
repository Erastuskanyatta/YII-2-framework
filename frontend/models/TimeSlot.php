<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "time_slot".
 *
 * @property int $time_slot_id
 * @property string $start_time
 * @property string $stop_time
 */
class TimeSlot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'time_slot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['start_time', 'stop_time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'time_slot_id' => 'Time Slot ID',
            'start_time' => 'Start Time',
            'stop_time' => 'Stop Time',
        ];
    }
}
