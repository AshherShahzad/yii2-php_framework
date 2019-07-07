<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "ques_categories".
 *
 * @property string $Ques_Categories_Name
 *
 * @property Question[] $questions
 */
class QuesCategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ques_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Ques_Categories_Name'], 'required'],
            [['Ques_Categories_Name'], 'string', 'max' => 25],
            [['Ques_Categories_Name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Ques_Categories_Name' => 'Ques Categories Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestions()
    {
        return $this->hasMany(Question::className(), ['ques_categories_name' => 'Ques_Categories_Name']);
    }
}
