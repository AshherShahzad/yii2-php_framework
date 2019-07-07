<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\QuizmanagerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quizmanager-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'QuizName') ?>

    <?= $form->field($model, 'NoOfQuestions') ?>

    <?= $form->field($model, 'Timeallowed') ?>

    <?= $form->field($model, 'AssignedUser') ?>

    <?php // echo $form->field($model, 'createdat') ?>

    <?php // echo $form->field($model, 'createdby') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
