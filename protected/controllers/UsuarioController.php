<?php

class UsuarioController extends Controller
{
	public function accessRules()
	{
	return array(
	
	array('allow', // allow authenticated user to perform 'create' and 'update' actions
	'actions'=>array('config','password'),
	'users'=>array('?'),
	),
	
	array('deny',  // deny all users
	'users'=>array('*'),
	),
	
	);
	}
	public function actionConfig()
	{
		$model=new Usuario;
		$usuario=Usuarios::model()->find('username=:username', array(':username'=>Yii::app()->user->name));
		
		//$usuario=Usuarios::model()->find('id=:id', array(':id'=>108));
		$msg=null;
		// Uncomment the following line if AJAX validation is needed
		//$this->performAjaxValidation($model);
		
		if(isset($_POST['Usuario']))
		{
		$model->attributes=$_POST['Usuario'];
		if(!$model->validate()){
			$msg='<strong class="text-error">Error</strong>';
			
		}else{
			$id=$usuario->id;
			$conexion=Yii::app()->db;


			$correo=$conexion->CreateCommand("SELECT email FROM usuarios WHERE email='$model->email'")->queryRow();
			$email=$correo["email"];
			if($email!=null){
			if($email!=$usuario->email){
				Yii::app()->user->setFlash('error_correo','');
				
			}else{
				$resultado=$conexion->CreateCommand("UPDATE usuarios set email='$model->email' where id='$id'")->execute();
				
				if($resultado){
					Yii::app()->user->setFlash('error','');
					$this->refresh();	
					
				}else{
					
					Yii::app()->user->setFlash('fine','');
					$this->refresh();
				}
			}

		}else{
			$resultado=$conexion->CreateCommand("UPDATE usuarios set email='$model->email' where id='$id'")->execute();
			
			if($resultado){
				Yii::app()->user->setFlash('fine','');
				$this->refresh();
			}else{
				Yii::app()->user->setFlash('error','');
				//$this->refresh();				
			}
		}
			$this->refresh();
			
				//Consulta a la base de datos
		}
		
		//$this->refresh();
	
		
		
			/*
		if($model->save()){
			if(!empty($model->role)){
				$auth=Yii::app()->authManager;
				$auth->assign($model->role, $model->id);
			}
		$this->redirect(array('view','id'=>$model->id));
			
		}*/
		}
		$this->render('config',array('model'=>$model,'usuario'=>$usuario,'msg'=>$msg));
		
	}

	public function actionPassword()
	{
		$model=new Password();
		//Yii::app()->user->name
		$usuario=Usuarios::model()->find('username=:username', array(':username'=>Yii::app()->user->name));
		$msg=null;
		if(isset($_POST['Password']))
		{
		$model->attributes=$_POST['Password'];
		$model->nueva=sha1($model->nueva);
		$model->confirm=sha1($model->confirm);
		if($model->validate()){
			$id=$usuario->id;
			$conexion=Yii::app()->db;
			$nueva=sha1($model->nueva);
			$confirm=sha1($model->confirm);
			$resultado=$conexion->CreateCommand("UPDATE usuarios set password='$model->nueva' where id='$id'")->execute();
			
				Yii::app()->user->setFlash('fine','');
				$this->refresh();
			
			$model->nueva=null;
			$model->confirm=null;

		}
	}
		$this->render('password', array('model'=>$model,'usuario'=>$usuario,'msg'=>$msg));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
