<?php

class SiteController extends Controller
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
				'actions'=>array('Profile','admin','delete','index','ubah','view','home','vag','vhk','hapus','vjk','vuser','auser','logout','error','update'),
				'expression'=>'Yii::app()->user->name == "admin"',
			),
			array('deny', 
				'users'=>array('*'),
			),
		);
	}
        public function init()
        {
           Yii::app()->user->loginUrl= array('/start/index') ;
           Yii::app()->theme = 'classic';
           parent::init();
        }
	public function actionIndex()
	{
            $files = scandir("/var/www/html/SI-ARP/data/TestTAFinal");
            if(isset($_POST['file'])){
                $dir = $_POST['file'];
                $this->render('index',array('files'=>$files,'dir'=>$dir));
            }else{
                $this->render('index',array('files'=>$files,'dir'=>''));
            }
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
        public function actionProfile($id){
            $this->render('view',array(
                    'model'=>User::model()->findByPk($id),
            ));
        }
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        public function actionVag(){
            $model=new Agama('search');
            $model->unsetAttributes();
            if(isset($_GET['Agama']))
                    $model->attributes=$_GET['Agama'];

            $this->render('vag',array(
                    'model'=>$model,
            ));
        }
        public function actionVjk(){
            $model=new JenisKelamin('search');
            $model->unsetAttributes();
            if(isset($_GET['JenisKelamin']))
                    $model->attributes=$_GET['JenisKelamin'];

            $this->render('vjk',array(
                    'model'=>$model,
            ));
        }
        public function actionVhk(){
            $model=new HakAccess('search');
            $model->unsetAttributes();
            if(isset($_GET['HakAccess']))
                    $model->attributes=$_GET['HakAccess'];

            $this->render('vhk',array(
                    'model'=>$model,
            ));
        }
        public function actionVuser(){
            $model=new User('search');
            $model->unsetAttributes();
            if(isset($_GET['User']))
                    $model->attributes=$_GET['User'];

            $this->render('vuser',array(
                    'model'=>$model,
            ));
        }
        public function actionHapus($id){
            $v = User::model()->findByPk($id)->delete();
            if($v != NULL){
                $this->redirect(array('vuser'));
            }
        }
        public function actionDelete($id){
            User::model()->findByPk($id)->delete();
            if(!isset($_GET['ajax']))
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('vuser'));
        }
        public function actionUbah($id){
            $model=User::model()->findByPk($id);
            if(isset($_POST['User']))
            {
                    $model->attributes=$_POST['User'];
                    $model->img_user = CUploadedFile::getInstance($model,'img_user');
                    if($model->save()){
                        $model->img_user->saveAs('./data/user/'.$model->iduser.$model->nmuser.'.jpg');
                        $this->redirect(array('view','id'=>$model->iduser));
                    }
            }

            $this->render('euser',array(
                    'model'=>$model,
            ));
        }
        public function actionUpdate($id){
            $model=User::model()->findByPk($id);
            if(isset($_POST['User']))
            {
                    $model->attributes=$_POST['User'];
                    $model->img_user = CUploadedFile::getInstance($model,'img_user');
                    if($model->save()){
                        $model->img_user->saveAs('./data/user/'.$model->iduser.$model->nmuser.'.jpg');
                        $this->redirect(array('view','id'=>$model->iduser));
                    }
            }

            $this->render('euser',array(
                    'model'=>$model,
            ));
        }
        public function actionView($id)
	{
		$this->render('view',array(
			'model'=>User::model()->findByPk($id),
		));
	}
        public function actionAuser(){
            $model=new User;
            if(isset($_POST['User']))
            { 
                    $model->attributes=$_POST['User'];
                    $model->img_user = CUploadedFile::getInstance($model,'img_user');
                    if($model->save()){
                        $model->img_user->saveAs('./data/user/'.$model->iduser.$model->nmuser.'.jpg');
                        $this->redirect(array('vuser'));
                    }
            }

            $this->render('auser',array(
                    'model'=>$model,
            ));
        }
        
}