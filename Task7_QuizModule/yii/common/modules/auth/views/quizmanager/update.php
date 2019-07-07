<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Quizmanager */

$this->title = 'Update Quizmanager: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Quizmanagers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quizmanager-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
