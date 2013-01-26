<?php $this->beginContent('//layouts/admin'); ?>
<div class="db-container">
    <div class="db-content">
        <?php echo $content; ?>
    </div><!-- content -->
    <div class="db-operations">
        <div class="db-sidebar">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                    'title'=>'Operations',
            ));
            $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
        ?>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>