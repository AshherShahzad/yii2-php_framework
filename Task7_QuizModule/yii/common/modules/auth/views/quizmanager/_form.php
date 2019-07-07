<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Quizmanager */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quizmanager-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'QuizName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NoOfQuestions')->textInput() ?>

    <?= $form->field($model, 'Timeallowed')->textInput() ?>

    <?= $form->field($model, 'AssignedUser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdat')->textInput() ?>

    <?= $form->field($model, 'createdby')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
