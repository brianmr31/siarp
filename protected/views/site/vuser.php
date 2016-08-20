<div class="row">
    <div class="box box-primary"> 
        <div class="box-header with-border">
          <h3 class="box-title">View Users</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'iduser',
		'nmuser',
		'lsuser',
		'alamat_user',
		'kontak_user',
		'usr_user',
		/*
		'pss_user',
		'email_user',
		'jenis_kelamin_idjenis_kelamin',
		'agama_idagama',
		'hak_access_idhak_access',
		*/
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}{ubah}{hapus}',
                        'buttons'=>array(
                            'hapus'=>array(
                                'imageUrl'=>'/SI-ARP/assets/6bef4f82/gridview/delete.png',
                                'url'=>'Yii::app()->createUrl("site/hapus", array("id" => $data->iduser))',
                            ),
                            'ubah'=>array(
                                'imageUrl'=>'/SI-ARP/assets/6bef4f82/gridview/update.png',
                                'url'=>'Yii::app()->createUrl("site/ubah", array("id" => $data->iduser))',
                            ),
                        ),
		),
	),
)); ?>
    </div>
</div>
