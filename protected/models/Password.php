<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class Password extends CFormModel
{
	public $nueva;
	public $confirm;

    
    public function rules()
	{
		return array(
			// username and password are required
		   array('nueva, confirm', 'required','message'=>'Campo requerido'),
		   array('nueva', 'length', 'min'=>3, 'max'=>45),
		   array('confirm', 'compare', 'compareAttribute' => 'nueva', 'message' => 'Las contraseñas no coinciden'),
		            			
		);
	}
	public function attributeLabels()
	{
		return array(
			'nueva' => 'Nueva Contraseña',
			'confirm' => 'Corfirma Contraseña',
		
		);
	}
   
}
?>