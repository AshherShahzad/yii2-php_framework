<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\EmpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'empno') ?>

    <?= $form->field($model, 'ename') ?>

    <?= $form->field($model, 'job') ?>

    <?= $form->field($model, 'mgr') ?>

    <?= $form->field($model, 'hiredate') ?>

    <?php // echo $form->field($model, 'sal') ?>

    <?php // echo $form->field($model, 'comm') ?>

    <?php // echo $form->field($model, 'deptno') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
