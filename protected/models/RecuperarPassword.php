<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RecuperarPassword extends CFormModel
{
	public $username;
	public $email;
	public $verifyCode;
    
    public function rules()
	{
		return array(
			// username and password are required
            array('username, email', 'required','message'=>'Campo requerido'),
            array('email', 'email'),
            array('username', 'match', 'pattern' => '/^[a-z0-9áéíóúñ\_]+$/i', 'message' => 'Solo se permiten letras, números y guiones bajos'),
            array('username','length','min'=>3, 'max'=>15),                
            
            // verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
            
		);
    }
    public function attributeLabels()
	{
		return array(
			'username'=>'Usuario',
			'email'=>'Correo',
			'verifyCode'=>'Código de Verificación',
		);
	}
}
?>
