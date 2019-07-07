<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            
           
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                       // ['label' => 'Dashboard', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard',  'options' => ['class' => 'header'],
                            ],// 'active' => $this->context->route == 'site/index'
                        
                       

                        [
                            'label' => 'Quiz Manager',
                            'icon' => 'glyphicon glyphicon-book',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'My Quizzes',
                                    'icon' => 'glyphicon glyphicon-chevron-right',
                                    'url' => ['/auth/myquiz/'],
                    'active' => $this->context->route == 'myquiz'
                                ],

                                [
                                    'label' => 'Quiz Manager',
                                    'icon' => 'glyphicon glyphicon-chevron-right',
                                    'url' => ['/auth/quizmanager/'],
                    'active' => $this->context->route == 'quizmanager'
                                ],

                                [
                                    'label' => 'Quiz Publisher',
                                    'icon' => 'glyphicon glyphicon-chevron-right',
                                    'url' => ['/auth/quizpublisher/'],
                    'active' => $this->context->route == 'quizpublisher'
                                ],

                                [
                                    'label' => 'Manage Questions',
                                    'icon' => 'glyphicon glyphicon-chevron-right',
                                    'url' => ['/auth/question/'],
                    'active' => $this->context->route == 'question'
                                ],

                                [
                                    'label' => 'Question Categories',
                                    'icon' => 'glyphicon glyphicon-chevron-right',
                                    'url' => ['/auth/questioncategories/'],
                    'active' => $this->context->route == 'questioncategories'
                                ]
                            ]
                        ],

                        [
                            'label' => 'Employee',
                            'icon' => 'fa fa-users',
                            'url' => ['/auth/emp/'],
                            'active' => $this->context->route == 'emp/',
                        ],
                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                        /*['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],*/
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
