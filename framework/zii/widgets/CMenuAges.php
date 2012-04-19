<?php
class CMenuAges extends CWidget {

    /**
     * @var string the tag name for the breadcrumbs container tag. Defaults to 'div'.
     */
    public $tagName = 'div';

    /**
     * @var array the HTML attributes for the breadcrumbs container tag.
     */
    public $htmlOptions = array('class' => 'menu-ages');

    /**
     * @var boolean whether to HTML encode the link labels. Defaults to true.
     */
    public $encodeLabel = true;

    public $homeLink;
    public $links = array();

    /**
     * @var string the separator between links in the breadcrumbs. Defaults to ' &raquo; '.
     */
    public $separator = ' &raquo; ';
    public $dataProvider = array();

    /**
     * Renders the content of the portlet.
     */
    public function run() {
        $menuAges = Yii::app()->db->createCommand()
            ->select('a.id, a.menuTitle')
            ->from('agelevel a')
            ->queryAll();       

        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        echo '<span>Wybierz kategorię wiekową: </span>';
        foreach ($menuAges as $menuAge) {
            echo '<a href="' . Yii::app()->createUrl('agelevel/view/', array('id' =>$menuAge['id'], 'name' => $menuAge['menuTitle'])) . '"><img src="/images/' . $menuAge['menuTitle'] . '.png" /></a>';
        }
        echo CHtml::closeTag($this->tagName);
    }
}