<?php

class StartController extends Controller
{
        public function filters(){
		return array(
			'accessControl',
			'postOnly + delete',
		);
	}
	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
        public function accessRules()
	{
		return array(
			array('allow', 
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('deny', 
				'users'=>array('*'),
			),
		);
	}
        public function init()
        {
           Yii::app()->user->loginUrl= array('/start/index') ;
           Yii::app()->theme = 'startTheme';
           parent::init();
        }
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	public function actionIndex()
	{
		$model=new LoginForm;
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			if($model->validate() && $model->login())
				$this->redirect(array('/site/index'));
		}
		$this->render('index',array('model'=>$model));
	}
}