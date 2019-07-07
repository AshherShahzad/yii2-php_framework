<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "ques_level".
 *
 * @property string $Ques_Level_name
 *
 * @property Question[] $questions
 */
class QuesLevel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ques_level';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ques_Level_name'], 'required'],
            [['Ques_Level_name'], 'string', 'max' => 25],
            [['Ques_Level_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Ques_Level_name' => 'Ques Level Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestions()
    {
        return $this->hasMany(Question::className(), ['ques_level_name' => 'Ques_Level_name']);
    }
}
