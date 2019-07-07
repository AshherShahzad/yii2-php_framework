<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Quizpublisher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quizpublisher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Quiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'User')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ShowResult')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
