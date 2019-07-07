<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "questioncategories".
 *
 * @property int $id
 * @property string $NAME
 * @property int $Questioncount
 * @property string $active
 */
class Questioncategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'questioncategories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'Questioncount'], 'integer'],
            [['active'], 'string'],
            [['NAME'], 'string', 'max' => 25],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'NAME' => 'Name',
            'Questioncount' => 'Questioncount',
            'active' => 'Active',
        ];
    }
}
