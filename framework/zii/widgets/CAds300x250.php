<?php
class CAds300x250 extends CWidget {

    /**
     * @var string the tag name for the breadcrumbs container tag. Defaults to 'div'.
     */
    public $tagName = 'div';

    /**
     * @var array the HTML attributes for the breadcrumbs container tag.
     */
    public $htmlOptions = array('class' => 'ads300x250');

    /**
     * @var boolean whether to HTML encode the link labels. Defaults to true.
     */
    public $encodeLabel = true;

    /**
     * @var string the first hyperlink in the breadcrumbs (called home link).
     * If this property is not set, it defaults to a link pointing to {@link CWebApplication::homeUrl} with label 'Home'.
     * If this property is false, the home link will not be rendered.
     */
    public $homeLink;
    public $dataProvider = array();

    /**
     * Renders the content of the portlet.
     */
    public function run() {
        Yii::app()->clientScript->registerCssFile('/css/ads300x250.css');
        echo CHtml::openTag($this->tagName, $this->htmlOptions) . "\n";
        echo $this->dataProvider;
        echo CHtml::closeTag($this->tagName);
    }
}