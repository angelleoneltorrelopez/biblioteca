
<?php

class UsuariosController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';
public $repetir_password;

/**
* @return array action filters
*/
public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
);
}

/**
* Specifies the access control rules.
* This method is used by the 'accessControl' filter.
* @return array access control rules
*/
public function accessRules()
{
return array(

array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('index','view','create','admin','delete'),
'roles'=>array('main-admin'),
),

array('deny',  // deny all users
'users'=>array('*'),
),

);
}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
public function actionView($id)
{
$this->render('view',array(
'model'=>$this->loadModel($id),
));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
$model=new Usuarios;

// Uncomment the following line if AJAX validation is needed
$this->performAjaxValidation($model);

if(isset($_POST['Usuarios']))
{
$model->attributes=$_POST['Usuarios'];
$model->password=sha1($model->password); //Linea para agregar password cifrada
$model->repetir_password=sha1($model->repetir_password);
if($model->save()){
    if(!empty($model->role)){
        $auth=Yii::app()->authManager;
        $auth->assign($model->role, $model->id);
    }
$this->redirect(array('view','id'=>$model->id));
    
}
}

$this->render('create',array(
'model'=>$model,
));
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
$this->performAjaxValidation($model);

if(isset($_POST['Usuarios']))
{
$model->attributes=$_POST['Usuarios'];
$model->password=sha1($model->password); //Linea para agregar password cifrada
if($model->save()){
    foreach(Yii::app()->authManager->getAuthItems(2) as $data):
        $enabled=Yii::app()->authManager->checkAccess($data->name,$model->id);
        if($enabled){
            $auth=Yii::app()->authManager;
            $auth->revoke($data->name, $id);
        }
    endforeach;
    if(!empty($model->role)){
        $auth=Yii::app()->authManager;
        $auth->assign($model->role, $model->id);
    }
    $this->redirect(array('view','id'=>$model->id));
}
}

$this->render('update',array(
'model'=>$model,
));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
public function actionDelete($id)
{

// we only allow deletion via POST request
foreach(Yii::app()->authManager->getAuthItems(2) as $data):
    $enabled=Yii::app()->authManager->checkAccess($data->name,$id);
    if($enabled){
        $auth=Yii::app()->authManager;
        $auth->revoke($data->name, $id);
    }
endforeach;
$this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));

}

/**
* Lists all models.
*/
public function actionIndex()
{
$dataProvider=new CActiveDataProvider('Usuarios');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new Usuarios('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Usuarios']))
$model->attributes=$_GET['Usuarios'];

$this->render('admin',array(
'model'=>$model,
));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=Usuarios::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='usuarios-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}

public function actionGenerarPdf()
{
$session=new CHttpSession;
$session->open();
if(isset($session['Usuarios_record']))
//Si hay datos filtrados entonces usar la criteria guardada en la sesion (esto lo guardamos en la funcion search() del modelo)
{
$model=Usuarios::model()->findAll($session['Usuarios_record']);
}
else
//Si no hay datos filtrados exportar todo
{
$model =Usuarios::model()->findAll();
}
$mPDF1 = Yii::app()->ePdf->mpdf('utf-8','Letter','','',15,15,35,25,9,9,'L'); //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
$mPDF1->useOnlyCoreFonts = true;
$mPDF1->SetTitle("Reporte - Usuarios");
$mPDF1->SetAuthor(Yii::app()->user->name);
$mPDF1->SetWatermarkText("Biblioteca");
$mPDF1->showWatermarkText = true;
$mPDF1->watermark_font = 'DejaVuSansCondensed';
$mPDF1->watermarkTextAlpha = 0.05;
$mPDF1->SetDisplayMode('fullpage');
$mPDF1->WriteHTML($this->renderPartial('pdfReport', array('model'=>$model), true)); //hacemos un render partial a una vista preparada, en este caso es la vista pdfReport
$mPDF1->Output('Reporte - Usuarios '.date('YmdHis'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
exit;
}

}
