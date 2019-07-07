<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\QuestionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Ques_id') ?>

    <?= $form->field($model, 'ques_name') ?>

    <?= $form->field($model, 'ques_type_name') ?>

    <?= $form->field($model, 'ques_level_name') ?>

    <?= $form->field($model, 'ques_categories_name') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'quiz_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
