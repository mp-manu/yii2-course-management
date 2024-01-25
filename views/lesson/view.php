<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Lesson $model */

$this->title = 'Урок №'.$model->id.' | '.$model->title;
$this->params['breadcrumbs'][] = ['label' => 'Уроки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <div class="timeline">

                    <div>
                        <i class="fas fa-video bg-maroon"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> <?= date('m.d.Y H:i:s', strtotime($model->created_at)) ?></span>
                            <h3 class="timeline-header"><?= $model->title ?></h3>
                            <div class="timeline-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $model->video ?>" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="timeline-footer">
                                <p><?= $model->description ?></p>
                                <center><button class="btn btn-success" onclick="learned(this)" data-id="<?=$model->id?>">Урок просмотрен</button></center>
                            </div>
                        </div>
                    </div>

                    <div>
                        <i class="fas fa-clock bg-gray"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>