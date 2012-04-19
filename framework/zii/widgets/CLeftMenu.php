<?php
class CLeftMenu extends CWidget {

    public $tagName = 'div';
    public $htmlOptions = array('class' => 'leftmenu');
    public $dataProvider = array();

    public function init() {
        //get top5categories
        $leftmenu = Yii::app()->db->createCommand()
            ->select('a.menuTitle, c.name, c.description, c.id as catid')
            ->from('agelevel a')
            ->join('category c', 'c.agelevelId=a.id')
            ->order('c.agelevelId')
            ->queryAll();
        $leftmenu = $this->gatherById('menuTitle', $leftmenu);
        
        Yii::app()->clientScript->registerCssFile('/css/leftmenu.css');
        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        echo '<h4>Kategorie gier</h4><hr />';
        foreach ($leftmenu as $agelevelTitle => $categories) {
            echo '<div class="agelevel"><span>Dzieci w wieku:</span><img src="/images/' . $agelevelTitle . '.png" /></div>';
            echo '<div class="category"><ul>';
            foreach ($categories as $category) {
                echo '<li><a href="' . Yii::app()->createUrl('category/view/', array('id' =>$category['catid'], 'name' => $category['name'])) . '">' . $category['name'] .'</a></li>';
            }
            echo '</ul><hr /></div>';
        }
        echo CHtml::closeTag($this->tagName);
    }

    public function gatherById($id, $inputTable) {
        if (is_array($inputTable)) {
            $outputTable = array();
            $currentId = null;
            foreach($inputTable as $row) {
                if($currentId != $row[$id]) {
                    $outputTable[$row[$id]][] = $row;
                } else {
                    $outputTable[$currentId][] = $row;                    
                }
            }
            return $outputTable;
        }
        return false;
    }
}
