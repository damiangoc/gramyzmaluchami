<?php
$ageLevel = 'Kategorie dla ' . $gameData['menuTitle'];
$ageLink = Yii::app()->createUrl('agelevel/view/', array('id' => $gameData['menuId'], 'name' => $gameData['menuTitle']));
$categoryLink = Yii::app()->createUrl('category/view/', array('id' => $gameData['catid'], 'name' => $gameData['catname']));

$this->breadcrumbs=array(
    $ageLevel => $ageLink,
    $gameData['catname'] => $categoryLink,
    $gameData['name'],
);

Yii::app()->clientScript->registerCssFile('/css/roundedbox.css');
Yii::app()->clientScript->registerCssFile('/css/gamebox.css');

$this->widget('zii.widgets.CLeftMenu');

echo '<div class="center-content">';

    $this->widget('zii.widgets.CBreadcrumbs', array(
        'links' => $this->breadcrumbs,
    ));

    $this->widget('zii.widgets.CDescrHeader', array(
        'htmlOptions' => array('class' => 'descr-header blue-bg'),
        'H2Class' => array('class' => 'blue'),
        'dataProvider' => array(
            'header' => $gameData['name'],
            'content' => ''
        ),
    ));

    echo '<div class="game-descr">' . $gameData['description'] . '</div>';
echo '</div>';

$this->widget('zii.widgets.CRightMenu');
