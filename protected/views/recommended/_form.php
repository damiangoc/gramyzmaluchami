<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recommended-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gameId'); ?>
		<?php echo $form->textField($model,'gameId'); ?>
		<?php echo $form->error($model,'gameId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->