<?php
$this->widget('zii.widgets.CLeftMenu');

echo '<div class="center-content">';
    if (isset($errorMessage)) {
        echo $errorMessage;
    } else {
        $this->breadcrumbs=array(
            'Kategorie dla ' . $top5boxes[0]['menuTitle'],
        );

        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
        ));


        foreach ($top5boxes as $top5box) {
            $this->widget('zii.widgets.CTop5box', array(
                'dataProvider' => $top5box));
        }
    }
echo '</div>';

$this->widget('zii.widgets.CRightMenu');