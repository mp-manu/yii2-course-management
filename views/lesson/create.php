<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Lesson $model */

$this->title = 'Добавить урок';
$this->params['breadcrumbs'][] = ['label' => 'Укроки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
