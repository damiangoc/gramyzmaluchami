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
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-40017724-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
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

            <div id="footer">
                <div>
                    Na naszej stronie zgromadziliśmy całe mnóstwo zabaw i gier, w które możecie bawić się ze swoim dzieckiem. 
                    Znajdziecie tutaj również popularne bajki i wiersze, które wasze dziecko będzie słuchać z przyjemnością.
                    Abyście łatwo mogli wyszukać interesujące gry i zabawy, pogrupowaliśmy je w kategorie wiekowe oraz tematyczne.
                    Życzymy miłej zabawy i zachęcamy do częstych odwiedzin!
                </div>
                <hr></hr>
                <div>Copyright &copy; <?php echo date('Y'); ?> by dagoIT.<br/>
                All Rights Reserved.<br/>
                </div>
            </div><!-- footer -->

        </div><!-- page -->
    </div>
    </body>
</html>