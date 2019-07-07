<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "quizmanager".
 *
 * @property int $ID
 * @property string $QuizName
 * @property int $NoOfQuestions
 * @property int $Timeallowed
 * @property string $AssignedUser
 * @property string $createdat
 * @property double $createdby
 */
class Quizmanager extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quizmanager';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'QuizName', 'NoOfQuestions', 'Timeallowed', 'createdat', 'createdby'], 'required'],
            [['ID', 'NoOfQuestions', 'Timeallowed'], 'integer'],
            [['createdat'], 'safe'],
            [['createdby'], 'number'],
            [['QuizName'], 'string', 'max' => 25],
            [['AssignedUser'], 'string', 'max' => 255],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'QuizName' => 'Quiz Name',
            'NoOfQuestions' => 'No Of Questions',
            'Timeallowed' => 'Timeallowed',
            'AssignedUser' => 'Assigned User',
            'createdat' => 'Createdat',
            'createdby' => 'Createdby',
        ];
    }
}
