<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RestablecerPassword extends CFormModel
{
    public $email;
    public $password;
    public $password_repeat;
    public $verification_code;
    public $recover;
    
    
   
    public function rules()
	{
		return array(
			// username and password are required
            array('email, password, password_repeat, verification_code, recover', 'required','message'=>'Campo requerido'),
            array('email', 'email'),
            array('password','length','min'=>3),  
            array('password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Contraseñas deben de coincidr'),
            
          
		);
    }
    public function attributeLabels()
	{
		return array(
			'verification_code'=>'Código de Verificación',
			'email'=>'Correo',
			'password'=>'Nueva Contraseña',
			'password_repeat'=>'Confirmar Contraseña',
		);
    }
    public function find()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('email',$this->email);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password_repeat',$this->password_repeat,true);
		$criteria->compare('verification_code',$this->verification_code,true);
		$criteria->compare('recover',$this->recover,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}   
}
?>
