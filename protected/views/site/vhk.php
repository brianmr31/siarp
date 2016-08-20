<div class="row">
    <div class="box box-primary"> 
        <div class="box-header with-border">
          <h3 class="box-title">View Hak Accesses</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hak-access-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'idhak_access',
		'nm_hak_access',
	),
)); ?>
    </div>
</div>
