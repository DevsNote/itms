<?php ?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar04.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php
if (!Yii::$app->user->isGuest) {
    echo Yii::$app->user->identity->username;
} else {
    echo "";
}
?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Main Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'url' => ['/site/index']],
                        //d
                        [
                            'label' => 'งานสารสนเทศ',
                            'icon' => 'fa fa-desktop',
                            'url' => '#',
                            'items' => [
                                ['label' => 'แจ้งซ่อม', 'icon' => 'fa fa-wrench', 'url' => ['/gii'],],
                                ['label' => 'เบิก-จ่ายอุปกรณ์', 'icon' => 'fa fa-cart-arrow-down', 'url' => ['/gii'],],
                                ['label' => 'ทะเบียนครุภัณฑ์คอมฯ', 'icon' => 'fa fa-barcode', 'url' => ['/gii'],],
                                ['label' => 'สต็อกอุปกรณ์', 'icon' => 'fa fa-cube', 'url' => ['/gii'],],
                                ['label' => 'Report', 'icon' => 'fa fa-pie-chart', 'url' => ['/gii'],],
                            ],
                        ],
                        [
                            'label' => 'งานซ่อมบำรุง',
                            'icon' => 'fa fa-wrench',
                            'url' => '#',
                            'items' => [
                                ['label' => 'แจ้งซ่อม', 'icon' => 'fa fa-wrench', 'url' => ['/gii'],],
                                ['label' => 'Report', 'icon' => 'fa fa-pie-chart', 'url' => ['/gii'],],
                            ],
                        ],
                        
                        [
                            'label' => 'Same tools',
                            'icon' => 'fa fa-share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'icon' => 'fa fa-circle-o',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'icon' => 'fa fa-circle-o',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                                ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
        )
        ?>

    </section>

</aside>
