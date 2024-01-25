<?php

use app\models\Lesson;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var app\models\LessonSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Уроки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <?php if (Yii::$app->user->identity->type == 'admin'): ?>
        <p>
            <?= Html::a('Добавить урок', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>


    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Уроки</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0" style="display: block;">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Урок
                        </th>
                        <th style="width: 30%">
                            Описание
                        </th>

                        <th style="width: 8%" class="text-center">
                            Пройден
                        </th>
                        <th style="width: 20%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemOptions' => ['class' => 'item'],
                        'itemView' => function ($model, $key, $index, $widget) {
                            return $this->render('_item', ['model' => $model]);
                        },
                    ]) ?>
                    </tbody>
                </table>
            </div>

        </div>

    </section>
</div>
