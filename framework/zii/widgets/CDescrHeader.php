<?php
class CDescrHeader extends CWidget {

    public $tagName = 'div';
    public $htmlOptions = array('class' => 'descr-header');
    public $dataProvider = array();
    public $H2Class = array('class' => 'green');
    
    public function init() {
        //get top5categories        
        Yii::app()->clientScript->registerCssFile('/css/headerbox.css');
        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        echo '<h2 class="' . $this->H2Class['class']. '">' . $this->dataProvider['header'] . '</h2>';
        if (isset($this->dataProvider['content']) && $this->dataProvider['content'] != '') {
            echo '<div class="descr-content">' . $this->dataProvider['content'] . '</div>';
        }
        echo CHtml::closeTag($this->tagName);
    }
}
