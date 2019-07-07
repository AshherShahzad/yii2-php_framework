<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Quizpublisher */

$this->title = 'Create Quizpublisher';
$this->params['breadcrumbs'][] = ['label' => 'Quizpublishers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quizpublisher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
