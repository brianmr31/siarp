<div class="box box-info ">
    <div class="box-header with-border">
        <h3>Update User <b> <?php echo $model->nmuser." ".$model->lsuser; ?></b></h3>
    </div>
    <div class="box-body">
    <div class="form" role="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nmuser'); ?>
		<?php echo $form->textField($model,'nmuser',array('size'=>45,'maxlength'=>45,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'nmuser'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'lsuser'); ?>
		<?php echo $form->textField($model,'lsuser',array('size'=>45,'maxlength'=>45,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'lsuser'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'alamat_user'); ?>
		<?php echo $form->textField($model,'alamat_user',array('size'=>45,'maxlength'=>45,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'alamat_user'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'kontak_user'); ?>
		<?php echo $form->textField($model,'kontak_user',array('size'=>45,'maxlength'=>45,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'kontak_user'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'usr_user'); ?>
		<?php echo $form->textField($model,'usr_user',array('size'=>45,'maxlength'=>45,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'usr_user'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pss_user'); ?>
		<?php echo $form->textField($model,'pss_user',array('size'=>45,'maxlength'=>45,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'pss_user'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email_user'); ?>
		<?php echo $form->textField($model,'email_user',array('size'=>45,'maxlength'=>45,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'email_user'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jenis_kelamin_idjenis_kelamin'); ?>
                <?php $opts = CHtml::listData(JenisKelamin::model()->findAll(),'idjenis_kelamin','nm_jenis_kelamin'); ?>
                <?php echo $form->dropDownList($model,'jenis_kelamin_idjenis_kelamin',$opts,array('class'=>"form-control"));   ?>
		<?php echo $form->error($model,'jenis_kelamin_idjenis_kelamin'); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'agama_idagama'); ?>
                <?php $opts = CHtml::listData(Agama::model()->findAll(),'idagama','nm_agama'); ?>
                <?php echo $form->dropDownList($model,'agama_idagama',$opts,array('class'=>"form-control"));   ?>
		<?php echo $form->error($model,'agama_idagama'); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'hak_access_idhak_access'); ?>
                <?php $opts = CHtml::listData(HakAccess::model()->findAll(),'idhak_access','nm_hak_access'); ?>
                <?php echo $form->dropDownList($model,'hak_access_idhak_access',$opts,array('class'=>"form-control"));   ?>
		<?php echo $form->error($model,'hak_access_idhak_access'); ?>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'img_user'); ?>
		<?php echo $form->fileField($model,'img_user',array('size'=>45,'maxlength'=>45,'class'=>"form-control")); ?>
		<?php echo $form->error($model,'img_user'); ?>
	</div>
        <div class="form-group">
            <label for="exampleInputEmail1">Foto sebelum</label> <br>
            <img src=./data/user/<?php echo $model->iduser.$model->nmuser;?>.jpg width="100px" height="100px" >
	</div>
	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-default")); ?>
            <button class="btn btn-default"> 
                <?php echo CHtml::link('Delete',array('site/hapus',
                   'id'=>$model->iduser)); ?>
            </button>
	</div>
<?php $this->endWidget(); ?>
    </div><!-- form -->
    </div>
</div>