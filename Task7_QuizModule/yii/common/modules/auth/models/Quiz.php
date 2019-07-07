<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "quiz".
 *
 * @property int $Quiz_id
 * @property string $Quiz_Name
 * @property int $No_of_Ques
 * @property int $Time_allowed
 * @property string $created_at
 * @property int $id
 *
 * @property Question[] $questions
 * @property Employee $id0
 * @property QuizUser[] $quizUsers
 */
class Quiz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quiz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Quiz_Name', 'No_of_Ques', 'Time_allowed', 'created_at', 'id'], 'required'],
            [['No_of_Ques', 'Time_allowed', 'id'], 'integer'],
            [['created_at'], 'safe'],
            [['Quiz_Name'], 'string', 'max' => 25],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Quiz_id' => 'Quiz ID',
            'Quiz_Name' => 'Quiz Name',
            'No_of_Ques' => 'No Of Ques',
            'Time_allowed' => 'Time Allowed',
            'created_at' => 'Created At',
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestions()
    {
        return $this->hasMany(Question::className(), ['quiz_id' => 'Quiz_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Employee::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuizUsers()
    {
        return $this->hasMany(QuizUser::className(), ['quiz_id' => 'Quiz_id']);
    }
}
