<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $Ques_id
 * @property string $ques_name
 * @property string $ques_type_name
 * @property string $ques_level_name
 * @property string $ques_categories_name
 * @property string $status
 * @property int $quiz_id
 *
 * @property Option[] $options
 * @property QuesType $quesTypeName
 * @property QuesLevel $quesLevelName
 * @property QuesCategories $quesCategoriesName
 * @property Quiz $quiz
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ques_name', 'ques_type_name', 'ques_level_name', 'ques_categories_name', 'status', 'quiz_id'], 'required'],
            [['status'], 'string'],
            [['quiz_id'], 'integer'],
            [['ques_name', 'ques_type_name', 'ques_level_name', 'ques_categories_name'], 'string', 'max' => 25],
            [['ques_type_name'], 'exist', 'skipOnError' => true, 'targetClass' => QuesType::className(), 'targetAttribute' => ['ques_type_name' => 'Ques_type_name']],
            [['ques_level_name'], 'exist', 'skipOnError' => true, 'targetClass' => QuesLevel::className(), 'targetAttribute' => ['ques_level_name' => 'Ques_Level_name']],
            [['ques_categories_name'], 'exist', 'skipOnError' => true, 'targetClass' => QuesCategories::className(), 'targetAttribute' => ['ques_categories_name' => 'Ques_Categories_Name']],
            [['quiz_id'], 'exist', 'skipOnError' => true, 'targetClass' => Quiz::className(), 'targetAttribute' => ['quiz_id' => 'Quiz_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Ques_id' => 'Ques ID',
            'ques_name' => 'Ques Name',
            'ques_type_name' => 'Ques Type Name',
            'ques_level_name' => 'Ques Level Name',
            'ques_categories_name' => 'Ques Categories Name',
            'status' => 'Status',
            'quiz_id' => 'Quiz ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptions()
    {
        return $this->hasMany(Option::className(), ['Ques_id' => 'Ques_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuesTypeName()
    {
        return $this->hasOne(QuesType::className(), ['Ques_type_name' => 'ques_type_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuesLevelName()
    {
        return $this->hasOne(QuesLevel::className(), ['Ques_Level_name' => 'ques_level_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuesCategoriesName()
    {
        return $this->hasOne(QuesCategories::className(), ['Ques_Categories_Name' => 'ques_categories_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuiz()
    {
        return $this->hasOne(Quiz::className(), ['Quiz_id' => 'quiz_id']);
    }
}
