<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\auth\models\Emp */

$this->title = 'Update Emp: ' . $model->empno;
$this->params['breadcrumbs'][] = ['label' => 'Emps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->empno, 'url' => ['view', 'id' => $model->empno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
