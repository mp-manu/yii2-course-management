<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\LessonSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="lesson-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-md-2">
            <?= $form->field($model, 'id') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'title') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'description') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'learned')->dropDownList(['' => 'Все', '1' => 'Да', '0' => 'Нет']) ?>
        </div>
        <div class="col-md-2">
            <div class="form-group" style="margin-top: 2rem">
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
                <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
