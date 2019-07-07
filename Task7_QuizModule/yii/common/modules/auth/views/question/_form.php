<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Question */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ques_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ques_type_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ques_level_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ques_categories_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'in active' => 'In active', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'quiz_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
