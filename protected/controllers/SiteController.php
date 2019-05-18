<?php
use yii\web\Session;
use app\models\FormRecoverPass;
use app\models\FormResetPass;

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->layout='fluid';
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
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

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject="CONTACTO ";
				$subject.='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";



				//mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				$mail=new EnviarEmail();
				$mail->enviar(
					array($model->email,$model->name),//from
					array(Yii::app()->params['adminEmail'],Yii::app()->name),//to
					$subject,//estas variables se declaran antes 
					$model->body//son STRINGS
				);
				
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	
	{
		$this->layout='main';
		
		$model=new LoginForm;
		$recup=null;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				$this->redirect(Yii::app()->user->returnUrl);
				
			}else{
				
				$recup="<a href=";
				$recup.=Yii::app()->createUrl('site/recuperarPassword');
				$recup.=">¿Recuperar contraseña?</a>";
				

			}
		
		}
		// display the login form
		$this->render('login',array('model'=>$model,'recup'=>$recup));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionLibros()
	{
		$this->layout='main';
		$model=new Busqueda;
		$msg=null;
		try {
			$conn = new PDO("mysql:host=localhost;dbname=biblioteca", 'root', '');
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected successfully"; 
			}
		catch(PDOException $e)
			{
		   // echo "Connection failed: " . $e->getMessage();
			}
		$stm = $conn->prepare("SELECT * FROM libros");
		$stm->execute();

		if(isset($_POST["Busqueda"])){
			$model->attributes=$_POST["Busqueda"];
			if($model->validate()){
				
				
				
				//$stm = $conn->prepare("SELECT * FROM libros where categoria like $model->tema0");

				$stm = $conn->prepare("SELECT * FROM libros  where categoria like '%$model->categoria%' AND (nombre_libro like '%$model->buscar%' OR  editorial like '%$model->buscar%' OR  autor like '%$model->buscar%')
				");
				$stm->execute();
				
			
				$model->buscar="";
				
				

		}}
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('libros',array('model'=>$model,'stm'=>$stm,'msg'=>$msg));
		
	}
	
	   

	public function actionRecuperarPassword(){
		//instancia para validar el modelo.
		$model=new RecuperarPassword;
		//Mensajepara mostrar al usuario en la vista
		$msg=null;

		if(isset($_POST["RecuperarPassword"])){
			$model->attributes=$_POST["RecuperarPassword"];
			if(!$model->validate()){
			
				Yii::app()->user->setFlash('error_send','');
				$this->refresh();
			}
			else{
			/*$consulta=Yii::app()->db->CreateCommand("SELECT username, email FROM usuarios WHERE username='$model->username' AND email='$model->email'")->queryRow();
			$resultado=$consulta["username"];*/

			$conexion=Yii::app()->db;
			$consulta="SELECT username, email FROM usuarios WHERE username='$model->username' AND email='$model->email'";
			$resultado=$conexion->createCommand($consulta);
			$filas=$resultado->query();
			$existe=false;
			
			
				foreach($filas as $fila){
					$existe=true;
				}	
			//si el usuario existe
			if($existe===true){
				//crear variables de sesion para limitar el tiempo de restablecido del password.
				//hasta que el navegadore se cierre
				$session=new CHttpSession;
				$session->open();

				//Clave que se cargar oculta que se cargara para elformuario de restablecer
				$session['recover']=substr(str_shuffle("0123456789abcde"), 0, 10);
				$recover=$session['recover'];

				//Llamar al id del usuario en la variable de sesion.$_COOKIE
				//el id servira para consultar la tabla users
				//ademas de restablecer el password
				$reg_tab=$conexion->CreateCommand("SELECT id FROM usuarios WHERE email='$model->email'")->queryColumn();
				$id_usuario=$reg_tab[0];
			//$table=Usuarios::model()->find('email=:email', array(':email'=>'melanievane96@gmail.com'));
				//$table=Usuarios::find()->where("email=:email", array(":email"=>$model->email))->one();
				$session["id_recover"]=$id_usuario;

				//esta variable contiene el codigo que sera enviadoal usuario.
				//mismo que introducira en el formulario derestablecer
				//se guardara en el registrocorrespondiente enlatabla usuarios
				$verification_code=substr(str_shuffle("0123456789abcde"), 0, 8);
			
				
				//columna de verificacion
				
				$conexion->CreateCommand("UPDATE usuarios set verification_code='$verification_code' where id=$id_usuario")->execute();
				
				//$table->verification_code=$verification_code;
				
				
				//guardar los cambios en la tabla.
			//$table->save();
				/*
				$consulta="SELECT password FROM tbl_user WHERE";
				$consulta.="username'".$model->username."'AND email='$model->email'";
				$resultado=$conexion->createCommand($consulta)->query();
				$resultado->bindColumn(1,$password);
				while($resultado->read()!==false){
					$password=$password;
				}*/
				
				//Crear el mensaje que se enviara a la cuenta de correo del usuario.
				$subject="Recuperación de contraseña en ";
				$subject.=Yii::app()->name;
				$body = "<p style='font-size=14px;'>Copie el siguiente código de verificación para restablecer su contraseña ... ";
				$body .= "<strong style='font-size=16px;'>".$verification_code."</strong></p>";
				$body .= "<p style='font-size=16px;'><a href='http://54.213.75.100/biblioteca/index.php/site/restablecerPassword'>Recuperar password</a></p>";
				
				//Enviar el correo
		
				$mail=new EnviarEmail();
			
				$mail->enviar(
					array(Yii::app()->params['adminEmail'],Yii::app()->name),//from
					array($model->email,$model->username),//to
					$subject,//estas variables se declaran antes 
					$body//son STRINGS
				);
				//vaciar los campos del formulario
				$model->email=null;
				$model->username=null;
				$model->verifyCode=null;
				//Mostrar mensaje al usuario.
				Yii::app()->user->setFlash('send','');
				$this->refresh();
				
				//$msg.=bin2hex(random_bytes(2));
				
			}else{
				Yii::app()->user->setFlash('error_usuario','');
				//$this->refresh();
				//$msg="<strong>Error,el usuario no existe</strong>";
			}
			}
		}

		$this->render('recuperarPassword',array('model'=>$model,'msg'=>$msg));
	}


	public function actionRestablecerPassword(){
		//instancia para validar el modelo.
		$model=new RestablecerPassword;
		//Mensajepara mostrar al usuario en la vista
		$msg=null;

		//abrir la sesion
		$session=new CHttpSession;
		$session->open();

		//Si no existen las variables de sesion se redirije a la page inicio
		if(empty($session['recover'])||empty($session['id_recover'])){
			return $this->redirect(["site/index"]);
		}else{
			$recover=$session['recover'];
			$model->recover=$recover;

			//Esta variable contiene el id del usuario que solicitu restablecer
			//se utlizara para realizar la consulta a la tabla usuarios
			$id_recover=$session['id_recover'];
		}

		//si el formulario es enviado para resetear el password
		if(isset($_POST["RestablecerPassword"])){
			$model->attributes=$_POST["RestablecerPassword"];
			if($model->validate()){
				//si el valor de lavariable de sesion es correcta
				if($recover==$model->recover){
					//se prepara la consulta para resetear el password
					//requiere email, el id del usuario que fue guardado en la variable 
					//y el codigo de verificacion que fue enviado y que se almaceno en la base de dats
					$conexion=Yii::app()->db;

					$reg_tab=$conexion->CreateCommand("SELECT id FROM usuarios WHERE email='$model->email' AND id=$id_recover AND verification_code='$model->verification_code'")->queryRow();
					$id_usuario=$reg_tab['id'];
					if(!$id_usuario==null){
						$pass=sha1($model->password);
						$conexion->CreateCommand("UPDATE usuarios set password='$pass' where id=$id_usuario")->execute();
						
					//	$table->password=sha1($model->password);
					//si la actualizacion se realiza correctamente
					//if($table->save()){
						//Destruir las variables de sesion
						$session->destroy();
						//Vaciar los campos del formulario
						  //Vaciar los campos del formulario
						  $model->email = null;
						  $model->password = null;
						  $model->password_repeat = null;
						  $model->recover = null;
						  $model->verification_code = null;
						  Yii::app()->user->setFlash('send','');
						  sleep(4); 
						  //$this->refresh();
						 
						  
					  
						  $this->redirect(array('site/login'));
						 // $msg .= "<meta http-equiv='refresh' content='5; ".."'>";
						 
					}else{
						Yii::app()->user->setFlash('error','');
						
					
						//$this->refresh();
						
					}
					//$table=Usuarios::model()->find('email=:email', array(':email'=>$model->email));
				//	$table=Usuarios::model()->find(array('email'=>$model->email,'id'=>$id_recover,'verification_code'=>$model->verification_code));
					
				//$table=Usuarios::findOne(array('email'=>$model->email,'id'=>$id_recover,'verification_code'=>$model->verification_code));
					//encriptar el password
					
					  
				//}else{
				//	$msg="Ha ocurrido un error";
				//}
			}
				
			}else{
				$msg="<strong class='text-error'>
				Error al enviar el forumario
				</strong>";
			}
		}

		$this->render('restablecerPassword',array('model'=>$model,'msg'=>$msg));
	
}
}
