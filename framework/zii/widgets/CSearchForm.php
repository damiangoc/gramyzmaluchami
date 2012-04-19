<?php
class CSearchForm extends CWidget {

    public $tagName = 'div';
    public $htmlOptions = array('class' => 'vertical-form');
    public $dataProvider = array();

    public function init() {
        $agelevels = Yii::app()->db->createCommand()
            ->select('a.menuTitle, a.id')
            ->from('agelevel a')
            ->order('a.id')
            ->queryAll();
        
        Yii::app()->clientScript->registerCssFile('/css/searchform.css');
        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        echo '<h4>Znajdź grę</h4>';
        echo '<form action="' . Yii::app()->createUrl('search/index') . '" method="get">';
        echo '<input type="text" name="phrase" />';
        echo '<select name="agelevel">';
        echo '<option value="0">W każdym wieku</option>';
        foreach ($agelevels as $agelevel){
            echo '<option value="' . $agelevel['id'] . '">';
            echo $agelevel['menuTitle'];
            echo '</option>';
        };
        echo '</select>';
        echo '<input type="submit" value="Wyszukaj" />';
        echo '</form>';
        echo CHtml::closeTag($this->tagName);
    }
}
