<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Myquiz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="myquiz-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Quiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'User')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QuizQuestions')->textInput() ?>

    <?= $form->field($model, 'Correctanswers')->textInput() ?>

    <?= $form->field($model, 'incorrectanswers')->textInput() ?>

    <?= $form->field($model, 'Percentages')->textInput() ?>

    <?= $form->field($model, 'Qualified')->dropDownList([ 'Qualified' => 'Qualified', 'Dequalified' => 'Dequalified', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Result')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
