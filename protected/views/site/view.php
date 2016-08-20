<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->iduser,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->iduser)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iduser),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<div class="box box-info ">
    <div class="box-header with-border">
        <h3>View User <b><?php echo $model->nmuser." ".$model->lsuser; ?></b></h3>
    </div>
    <div class="box-body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                array(
                    'label'=>'Foto user',
                    'type'=>'raw',
                    'alt'=>'hi images',
                    'value'=> CHtml::image(Yii::app()->request->baseUrl.'/data/user/'.$model->iduser.$model->nmuser.".jpg",
                            'some thing here' ,
                            array("style"=>"width = 200px; height: 100px")),
                ),
		'nmuser',
		'lsuser',
		'alamat_user',
		'kontak_user',
		'usr_user',
		'email_user',
                array(
			'name'=>'Jenis Kelamin',
			'type'=>'raw',
			'value'=>JenisKelamin::model()->findByPk($model->jenis_kelamin_idjenis_kelamin)->nm_jenis_kelamin,
		),
                array(
			'name'=>'Agama',
			'type'=>'raw',
			'value'=>  Agama::model()->findByPk($model->agama_idagama)->nm_agama,
		),
                array(
			'name'=>'Hak Access',
			'type'=>'raw',
			'value'=>HakAccess::model()->findByPk($model->hak_access_idhak_access)->nm_hak_access,
		),
               
	),
)); ?>
        <div >
            <button class="btn btn-default"> 
                <?php echo CHtml::link('Delete',array('site/hapus',
                   'id'=>$model->iduser)); ?>
            </button>
            <button class="btn btn-default"> 
                <?php echo CHtml::link('Update',array('site/update',
                   'id'=>$model->iduser)); ?>
            </button>
        </div>
    </div>
</div>
