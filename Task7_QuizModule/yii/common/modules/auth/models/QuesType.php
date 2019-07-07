<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "ques_type".
 *
 * @property string $Ques_type_name
 *
 * @property Question[] $questions
 */
class QuesType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ques_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ques_type_name'], 'required'],
            [['Ques_type_name'], 'string', 'max' => 25],
            [['Ques_type_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Ques_type_name' => 'Ques Type Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestions()
    {
        return $this->hasMany(Question::className(), ['ques_type_name' => 'Ques_type_name']);
    }
}
