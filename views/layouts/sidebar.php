<aside class="main-sidebar sidebar-dark-indigo elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="<?= $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Technical Task</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?= (Yii::$app->user->isGuest) ? '' : "<img src='$assetDir/img/user2-160x160.jpg' class='img-circle elevation-2' alt='User Image'>" ?>
            </div>
            <div class="info">
                <a href="#"
                   class="d-block"><?= (Yii::$app->user->isGuest) ? '' : \Yii::$app->user->identity->username; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Главная', 'icon' => 'tachometer-alt', 'badge' => '', 'url' => '/'],
                    ['label' => 'Уроки', 'icon' => 'list', 'badge' => '<span class="right badge badge-warning">' . Yii::$app->helpers->lessonCount(0) . '</span>', 'url' => '/lesson'],
                    ['label' => 'Пройденные уроки', 'icon' => 'check', 'badge' => '<span class="right badge badge-success">' . Yii::$app->helpers->lessonCount(1) . '</span>', 'url' => '/lesson/learned'],
                    ['label' => 'Выход', 'icon' => 'sign-out-alt', 'badge' => '', 'url' => '/site/logout'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>