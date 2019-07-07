<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "dept".
 *
 * @property int $deptno
 * @property string $dname
 * @property string $loc
 *
 * @property Emp[] $emps
 */
class Dept extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dept';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deptno'], 'required'],
            [['deptno'], 'integer'],
            [['dname'], 'string', 'max' => 14],
            [['loc'], 'string', 'max' => 13],
            [['deptno'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'deptno' => 'Deptno',
            'dname' => 'Dname',
            'loc' => 'Loc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmps()
    {
        return $this->hasMany(Emp::className(), ['deptno' => 'deptno']);
    }
}
