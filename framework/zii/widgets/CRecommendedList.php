<?php
class CRecommendedList extends CWidget {

    public $tagName = 'div';
    public $htmlOptions = array('class' => 'recommended-list');
    public $dataProvider = array();

    public function init() {
        //get top5categories
        $recommended = Yii::app()->db->createCommand()
            ->select('g.id, g.name, g.description')
            ->from('recommended r')
            ->join('game g', 'r.gameId=g.id')
            ->order('r.id')
            ->queryAll();
        
        Yii::app()->clientScript->registerCssFile('/css/recommended.css');
        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        echo '<h4>Polecane zabawy</h4>';
        echo '<ul>';
        foreach ($recommended as $game) {
            echo '<li><a href="' . Yii::app()->createUrl('game/view/', array('id' =>$game['id'], 'name' => $game['name'])) . '">' . $game['name'] . '</a></li>';
        }
        echo '</ul>';
        echo CHtml::closeTag($this->tagName);
    }

}
