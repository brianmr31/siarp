  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <?php echo CHtml::link('SIARP',array('/start/login')); ?>
      </div><!-- /.login-logo -->
      <div class="form login-box-body">
        <div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
         <p class="login-box-msg">Sign in to start your session</p>
	<div class="row form-group has-feedback">
		<?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'Username')); ?>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row form-group has-feedback">
		<?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Password')); ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary btn-block btn-flat')); ?>
            </div><!-- /.col -->
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
