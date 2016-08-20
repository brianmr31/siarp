<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nmuser'); ?>
		<?php echo $form->textField($model,'nmuser',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nmuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lsuser'); ?>
		<?php echo $form->textField($model,'lsuser',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lsuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_user'); ?>
		<?php echo $form->textField($model,'alamat_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alamat_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kontak_user'); ?>
		<?php echo $form->textField($model,'kontak_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'kontak_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_user'); ?>
		<?php echo $form->textField($model,'usr_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usr_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pss_user'); ?>
		<?php echo $form->textField($model,'pss_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pss_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_user'); ?>
		<?php echo $form->textField($model,'email_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin_idjenis_kelamin'); ?>
		<?php echo $form->textField($model,'jenis_kelamin_idjenis_kelamin'); ?>
		<?php echo $form->error($model,'jenis_kelamin_idjenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agama_idagama'); ?>
		<?php echo $form->textField($model,'agama_idagama'); ?>
		<?php echo $form->error($model,'agama_idagama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hak_access_idhak_access'); ?>
		<?php echo $form->textField($model,'hak_access_idhak_access'); ?>
		<?php echo $form->error($model,'hak_access_idhak_access'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_user'); ?>
		<?php echo $form->textField($model,'img_user',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'img_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->