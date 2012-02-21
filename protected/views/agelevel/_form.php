<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agelevel-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'menuTitle'); ?>
		<?php echo $form->textField($model,'menuTitle',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'menuTitle'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->