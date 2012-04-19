<?php
class CRightMenu extends CWidget {

    public $tagName = 'div';
    public $htmlOptions = array('class' => 'right-content');
    public $dataProvider = array();

    public function init() {
        Yii::app()->clientScript->registerCssFile('/css/rightside.css');
        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        $this->widget('zii.widgets.CSearchForm');
        echo CHtml::closeTag($this->tagName);
    }
}
