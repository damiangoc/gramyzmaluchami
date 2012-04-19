<?php
class CAds728x90 extends CWidget {
    public $tagName = 'div';
    public $htmlOptions = array('class' => 'ads728x90');
    public $encodeLabel = true;
    public $homeLink;
    public $dataProvider = array();

    public function run() {
        Yii::app()->clientScript->registerCssFile('/css/ads728x90.css');
        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        echo $this->dataProvider;
        echo CHtml::closeTag($this->tagName);
    }
}