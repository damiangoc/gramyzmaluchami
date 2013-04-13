<?php

$this->widget('zii.widgets.CLeftMenu');
Yii::app()->clientScript->registerCssFile('/css/roundedbox.css');
Yii::app()->clientScript->registerCssFile('/css/searchpage.css');

echo '<div class="center-content">';
    $this->widget('zii.widgets.CAds728x90', array(
        'dataProvider' => 'Miejce na Twoją reklamę'));
    $this->widget('zii.widgets.CSearchForm', array(
        'htmlOptions' => array('class' => 'horizontal-form')));
    if (count($results)) {
        echo '<div class="resultsphrase">Rezultaty wyszukiwania dla "' . $phrase . '"</div>';
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
        echo '<div class="resultsphrase">Brak wyników wyszukiwania dla "' . $phrase . '"</div>';    
    }
echo '</div>';


