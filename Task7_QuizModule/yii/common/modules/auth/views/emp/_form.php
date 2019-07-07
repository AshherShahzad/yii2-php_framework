<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Emp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'empno')->textInput() ?>

    <?= $form->field($model, 'ename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mgr')->textInput() ?>

    <?= $form->field($model, 'hiredate')->textInput() ?>

    <?= $form->field($model, 'sal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deptno')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
