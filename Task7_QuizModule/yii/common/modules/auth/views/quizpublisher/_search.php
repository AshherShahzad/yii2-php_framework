<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\QuizpublisherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quizpublisher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Quiz') ?>

    <?= $form->field($model, 'User') ?>

    <?= $form->field($model, 'Status') ?>

    <?= $form->field($model, 'ShowResult') ?>

    <?= $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
