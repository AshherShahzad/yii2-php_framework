<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Myquiz */

$this->title = 'Create Myquiz';
$this->params['breadcrumbs'][] = ['label' => 'Myquizzes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="myquiz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
