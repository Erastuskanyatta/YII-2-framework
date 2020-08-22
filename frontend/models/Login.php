<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Login".
 *
 * @property int $id
 * @property string $Username
 * @property string $Password
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Username', 'Password'], 'required'],
            [['Username', 'Password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Username' => 'Username',
            'Password' => 'Password',
        ];
    }
}
