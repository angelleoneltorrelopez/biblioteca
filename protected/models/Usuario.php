<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class Usuario extends CFormModel
{
	public $username;
	public $email;

    
    public function rules()
	{
		return array(
			// username and password are required
           array('email', 'required','message'=>'Campo requerido'),
            array('email', 'email'),
            array('username', 'match', 'pattern' => '/^[a-z0-9áéíóúñ\_]+$/i', 'message' => 'Solo se permiten letras, números y guiones bajos'),
            array('username','length','min'=>3, 'max'=>15),                
			//array('email', 'unique','attributeName'=>'Usuarios.email'),
			
		);
    }
public function attributeLabels()
	{
		return array(
			'email' => 'Correo Electrónico',
			'username' => 'Nombre de Usuario',
			
		);
	}
   
}
?>
