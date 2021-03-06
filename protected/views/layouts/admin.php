<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
    <div class="page-background">
        <div class="container" id="page">
            <div id="header">
                <div id="logo">
                    <div class="left">
                        <img src="/images/logo6.png" />
                        <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
                    </div>
                    <div class="right">
                        <img src="/images/inga.png" />
                        <img src="/images/piotrus.png" />
                        <img src="/images/nati.png" />
                        <img src="/images/mati.png" />
                    </div>
                </div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'encodeLabel'=>false,
                    'items' => array(
                        array('label' => 'Strona Główna', 'url' => array('/site/index')),
//                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => 'Kontakt', 'url' => array('/site/contact')),
//                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
//                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                ?>
                <?php $this->widget('zii.widgets.CMenuAges');?>
            </div><!-- mainmenu -->

            <?php echo $content; ?>

        </div><!-- page -->
    </div>
    </body>
</html>