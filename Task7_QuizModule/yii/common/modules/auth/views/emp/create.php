<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Emp */

$this->title = 'Create Emp';
$this->params['breadcrumbs'][] = ['label' => 'Emps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
