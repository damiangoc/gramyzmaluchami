<?php 
$this->widget('zii.widgets.CLeftMenu');

echo '<div class="center-content">';
    $this->widget('zii.widgets.CRecommendedList', array(
            'dataProvider' => 'Miejce na Twoją reklamę'));

    $this->widget('zii.widgets.CAds300x250', array(
            'dataProvider' => 'Miejce na Twoją reklamę'));
    echo '<hr />';
    foreach ($top5boxes as $top5box) {
        $this->widget('zii.widgets.CTop5box', array(
            'dataProvider' => $top5box));
    }
echo '</div>';

$this->widget('zii.widgets.CRightMenu');
