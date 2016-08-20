<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iduser')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iduser), array('view', 'id'=>$data->iduser)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmuser')); ?>:</b>
	<?php echo CHtml::encode($data->nmuser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lsuser')); ?>:</b>
	<?php echo CHtml::encode($data->lsuser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_user')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kontak_user')); ?>:</b>
	<?php echo CHtml::encode($data->kontak_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_user')); ?>:</b>
	<?php echo CHtml::encode($data->usr_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pss_user')); ?>:</b>
	<?php echo CHtml::encode($data->pss_user); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email_user')); ?>:</b>
	<?php echo CHtml::encode($data->email_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin_idjenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin_idjenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama_idagama')); ?>:</b>
	<?php echo CHtml::encode($data->agama_idagama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hak_access_idhak_access')); ?>:</b>
	<?php echo CHtml::encode($data->hak_access_idhak_access); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_user')); ?>:</b>
	<?php echo CHtml::encode($data->img_user); ?>
	<br />

	*/ ?>

</div>