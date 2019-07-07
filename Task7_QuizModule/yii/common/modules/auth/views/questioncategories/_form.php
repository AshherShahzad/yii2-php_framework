<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Questioncategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questioncategories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Questioncount')->textInput() ?>

    <?= $form->field($model, 'active')->dropDownList([ 'active' => 'Active', 'in active' => 'In active', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
