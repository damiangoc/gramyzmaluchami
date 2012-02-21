<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'top5category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'agelevelId'); ?>
		<?php echo $form->textField($model,'agelevelId'); ?>
		<?php echo $form->error($model,'agelevelId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoryId'); ?>
		<?php echo $form->textField($model,'categoryId'); ?>
		<?php echo $form->error($model,'categoryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->