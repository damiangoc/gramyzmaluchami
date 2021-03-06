<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'game-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'categoryId'); ?>
                <?php echo $form->dropDownList($model,'categoryId',$categories) ?>
		<?php // echo $form->textField($model,'categoryId'); ?>
		<?php echo $form->error($model,'categoryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

        <div class="tinymce">

                <?php echo $form->labelEx($model,'description'); ?><br />
<?php
Yii::import('ext.krichtexteditor.KRichTextEditor');
$this->widget('KRichTextEditor', array(
    'model' => $model,
    'value' => $model->isNewRecord ? '' : $model->description,
    'attribute' => 'description',
    'options' => array(
        'theme_advanced_resizing' => 'true',
        'theme_advanced_statusbar_location' => 'bottom',
    ),
));?>  
<?php echo $form->error($model,'description'); ?>
        </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->