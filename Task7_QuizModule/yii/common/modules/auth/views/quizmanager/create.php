<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Quizmanager */

$this->title = 'Create Quizmanager';
$this->params['breadcrumbs'][] = ['label' => 'Quizmanagers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quizmanager-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
