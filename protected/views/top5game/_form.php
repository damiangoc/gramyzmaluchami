<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'top5game-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'categoryId'); ?>
                <?php echo $form->dropDownList($model,'categoryId',$categories) ?>
		<?php //echo $form->textField($model,'categoryId'); ?>
		<?php echo $form->error($model,'categoryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gameId'); ?>
		<?php //echo $form->textField($model,'gameId',array('size'=>9,'maxlength'=>9)); ?>
                <?php echo $form->dropDownList($model,'gameId',$games) ?>
		<?php echo $form->error($model,'gameId'); ?>
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
<script>
(function($) {
    $.widget( "nmk.selectboxChanger", {
        _create: function() {
            this.element.bind('change', this.change);
            this.element.trigger('change');
        },
        change: function() {
            categoryId = $(this).attr('value');
            $.ajax({
                url: 'getGamesForCategory',
                data: {
                    categoryId: categoryId
                },
                success: function(data) {
                    var selectorElement = $('#Top5game_gameId');
                    selectorElement.html('');
                    $.each(data, function(key, value){
                        selectorElement.append('<option value="'+value.id+'">'+value.gameName+'</option>')
                    });
                }
            });
        }
    });
})(jQuery);
$('#Top5game_categoryId').selectboxChanger();
</script>