<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $firstname
 * @property string $secondname
 * @property string $thirdname
 * @property int $regno
 * @property string $mobileno
 * @property string $gender
 * @property string $dateofbirth
 * @property string $city
 * @property string $email
 * @property string $address
 * @property string $student_fathersname
 * @property string $atudent_fathersmobileno
 * @property string $student_fathersid
 * @property string $student_mothersname
 * @property string $student_mothersmobile
 * @property string $student_mothersid
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'secondname', 'thirdname', 'regno', 'mobileno', 'gender', 'dateofbirth', 'city', 'email', 'address', 'student_fathersname', 'atudent_fathersmobileno', 'student_fathersid', 'student_mothersname', 'student_mothersmobile', 'student_mothersid'], 'required'],
            [['regno'], 'integer'],
            [['firstname', 'secondname', 'thirdname', 'mobileno', 'gender', 'dateofbirth', 'city', 'email', 'address', 'student_fathersname', 'atudent_fathersmobileno', 'student_fathersid', 'student_mothersname', 'student_mothersmobile', 'student_mothersid'], 'string', 'max' => 100],
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
            'secondname' => 'Secondname',
            'thirdname' => 'Thirdname',
            'regno' => 'Regno',
            'mobileno' => 'Mobileno',
            'gender' => 'Gender',
            'dateofbirth' => 'Dateofbirth',
            'city' => 'City',
            'email' => 'Email',
            'address' => 'Address',
            'student_fathersname' => 'Student Fathersname',
            'atudent_fathersmobileno' => 'Atudent Fathersmobileno',
            'student_fathersid' => 'Student Fathersid',
            'student_mothersname' => 'Student Mothersname',
            'student_mothersmobile' => 'Student Mothersmobile',
            'student_mothersid' => 'Student Mothersid',
        ];
    }
}
