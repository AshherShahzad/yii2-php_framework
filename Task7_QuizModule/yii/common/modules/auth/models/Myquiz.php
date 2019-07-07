<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "myquiz".
 *
 * @property string $Quiz
 * @property string $User
 * @property int $QuizQuestions
 * @property int $Correctanswers
 * @property int $incorrectanswers
 * @property double $Percentages
 * @property string $Qualified
 * @property string $Result
 */
class Myquiz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'myquiz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Quiz', 'User', 'QuizQuestions', 'Correctanswers', 'incorrectanswers', 'Percentages', 'Qualified', 'Result'], 'required'],
            [['QuizQuestions', 'Correctanswers', 'incorrectanswers'], 'integer'],
            [['Percentages'], 'number'],
            [['Qualified', 'Result'], 'string'],
            [['Quiz'], 'string', 'max' => 25],
            [['User'], 'string', 'max' => 255],
            [['Quiz', 'User', 'QuizQuestions'], 'unique', 'targetAttribute' => ['Quiz', 'User', 'QuizQuestions']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Quiz' => 'Quiz',
            'User' => 'User',
            'QuizQuestions' => 'Quiz Questions',
            'Correctanswers' => 'Correctanswers',
            'incorrectanswers' => 'Incorrectanswers',
            'Percentages' => 'Percentages',
            'Qualified' => 'Qualified',
            'Result' => 'Result',
        ];
    }
}
