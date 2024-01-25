<?php

use app\models\Lesson;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var app\models\LessonSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Пройденные курсы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $this->title ?></h3>
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
                    </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($lessons)): ?>
                            <?php foreach ($lessons as $item): ?>
                                <tr>
                                    <td style="width: 1%">
                                        <?= $item['id'] ?>
                                    </td>
                                    <td style="width: 20%">
                                        <?= $item['title'] ?>
                                    </td>
                                    <td style="width: 30%">
                                        <?= substr($item['description'], 0, 300).'...' ?>
                                    </td>
                                    <td style="width: 8%" class="text-center">
                                        <span class="fas fa-check text-success"></span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>

    </section>
</div>
