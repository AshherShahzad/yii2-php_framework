<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "quizpublisher".
 *
 * @property string $Quiz
 * @property string $User
 * @property string $Status
 * @property string $ShowResult
 * @property int $id
 */
class Quizpublisher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'quizpublisher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Quiz', 'User', 'Status', 'ShowResult'], 'required'],
            [['Status', 'ShowResult'], 'string'],
            [['Quiz'], 'string', 'max' => 25],
            [['User'], 'string', 'max' => 255],
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
            'Status' => 'Status',
            'ShowResult' => 'Show Result',
            'id' => 'ID',
        ];
    }
}
