<?php
$ageLevel = 'Kategorie dla ' . $categoryData['menuTitle'];
$ageLink = Yii::app()->createUrl('agelevel/view/', array('id' => $categoryData['menuId'], 'name' => $categoryData['menuTitle']));

$this->breadcrumbs=array(
    $ageLevel => $ageLink,
    $categoryData['categoryname']
);
Yii::app()->clientScript->registerCssFile('/css/roundedbox.css');
Yii::app()->clientScript->registerCssFile('/css/searchpage.css');

$this->widget('zii.widgets.CLeftMenu');

echo '<div class="center-content">';
    $this->widget('zii.widgets.CBreadcrumbs', array(
        'links' => $this->breadcrumbs,
    ));

    $this->widget('zii.widgets.CSearchForm', array(
        'htmlOptions' => array('class' => 'horizontal-form')));

    $this->widget('zii.widgets.CDescrHeader', array(
        'htmlOptions' => array('class' => 'descr-header green-bg'),
        'H2Class' => array('class' => 'green'),
        'dataProvider' => array(
            'header' => $categoryData['categoryname'],
            'content' => $categoryData['catdescr']
        ),
    ));

    if (count($results)) {
        $this->widget('CLinkPager', array(
                'currentPage'=>$pages->getCurrentPage(),
                'itemCount'=>$item_count,
                'maxButtonCount'=>6,
                'nextPageLabel'=>'My text &gt;',
                'header'=>'',
        ));
        foreach ($results as $result) {
            $this->widget('zii.widgets.CResultBox', array(
                'dataProvider' => $result));
        }
    } else {
        echo '<div class="resultsphrase">Brak gier w kategorii</div>';    
    }
echo '</div>';
