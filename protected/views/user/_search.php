<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iduser'); ?>
		<?php echo $form->textField($model,'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmuser'); ?>
		<?php echo $form->textField($model,'nmuser',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lsuser'); ?>
		<?php echo $form->textField($model,'lsuser',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_user'); ?>
		<?php echo $form->textField($model,'alamat_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kontak_user'); ?>
		<?php echo $form->textField($model,'kontak_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usr_user'); ?>
		<?php echo $form->textField($model,'usr_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pss_user'); ?>
		<?php echo $form->textField($model,'pss_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_user'); ?>
		<?php echo $form->textField($model,'email_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_kelamin_idjenis_kelamin'); ?>
		<?php echo $form->textField($model,'jenis_kelamin_idjenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agama_idagama'); ?>
		<?php echo $form->textField($model,'agama_idagama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hak_access_idhak_access'); ?>
		<?php echo $form->textField($model,'hak_access_idhak_access'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_user'); ?>
		<?php echo $form->textField($model,'img_user',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->