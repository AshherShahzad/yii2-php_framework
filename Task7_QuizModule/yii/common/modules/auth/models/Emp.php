<?php

namespace common\modules\auth\models;

use Yii;

/**
 * This is the model class for table "emp".
 *
 * @property int $empno
 * @property string $ename
 * @property string $job
 * @property int $mgr
 * @property string $hiredate
 * @property string $sal
 * @property string $comm
 * @property int $deptno
 *
 * @property Dept $deptno0
 */
class Emp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['empno'], 'required'],
            [['empno', 'mgr', 'deptno'], 'integer'],
            [['hiredate'], 'safe'],
            [['sal', 'comm'], 'number'],
            [['ename'], 'string', 'max' => 10],
            [['job'], 'string', 'max' => 9],
            [['empno'], 'unique'],
            [['deptno'], 'exist', 'skipOnError' => true, 'targetClass' => Dept::className(), 'targetAttribute' => ['deptno' => 'deptno']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'empno' => 'Empno',
            'ename' => 'Ename',
            'job' => 'Job',
            'mgr' => 'Mgr',
            'hiredate' => 'Hiredate',
            'sal' => 'Sal',
            'comm' => 'Comm',
            'deptno' => 'Deptno',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeptno0()
    {
        return $this->hasOne(Dept::className(), ['deptno' => 'deptno']);
    }
}
