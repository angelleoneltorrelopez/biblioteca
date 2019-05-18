<?php

/**
 * This is the model class for table "visitantes".
 *
 * The followings are the available columns in table 'visitantes':
 * @property integer $id_visitante
  * @property string $identificador
 * @property string $nombre
 * @property string $apellidos
 * @property string $direccion
 * @property integer $telefono
 * @property string $fecha_nacimiento
 * @property integer $ocupacion
 * @property string $institucion
 *
 * The followings are the available model relations:
 * @property Bitacora[] $bitacoras
 * @property Fotocopia[] $fotocopias
 * @property Multas[] $multases
 * @property Prestamos[] $prestamoses
 * @property Ocupacion $ocupacion0
 */
class Visitantes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visitantes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('identificador, nombre, apellidos, direccion, telefono', 'required'),
			array('id_visitante, telefono, ocupacion', 'numerical', 'integerOnly'=>true),
			array('nombre, apellidos, identificador', 'length', 'max'=>255),
			array('identificador', 'match', 'pattern'=>'/^[0-9a-zA-Z\s-_]+$/','message'=>"Solo letras números y guiones."),
			array('nombre, apellidos, institucion', 'match', 'pattern'=>'/^[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]+$/','message'=>"Solo letras."),
			array('direccion',  'match', 'pattern'=>'/^[0-9a-zA-Z\s-.,áéíóúÁÉÍÓÚñÑ]+$/'),
			array('fecha_nacimiento','compare','compareValue'=>date('Y-m-d'),'operator'=>'<'),
			array('fecha_nacimiento', 'safe'),
			array('identificador', 'unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_visitante, identificador, nombre, apellidos, direccion, telefono, fecha_nacimiento, ocupacion, institucion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'id_visitante'),
			'fotocopias' => array(self::HAS_MANY, 'Fotocopia', 'id_visitante'),
			'multases' => array(self::HAS_MANY, 'Multas', 'id_visitante'),
			'prestamoses' => array(self::HAS_MANY, 'Prestamos', 'id_visitante'),
			'ocupacion0' => array(self::BELONGS_TO, 'Ocupacion', 'ocupacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_visitante' => 'Id',
			'identificador' => 'Credencial',
			'nombre' => 'Nombres',
			'apellidos' => 'Apellidos',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'ocupacion' => 'Ocupacion',
			'institucion' => 'Institucion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->together = true;
		$criteria->with = array('ocupacion0');
		$criteria->compare('id_visitante',$this->id_visitante,true);
		$criteria->compare('identificador',$this->identificador,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('ocupacion0.ocupacion',$this->ocupacion,true);
		$criteria->compare('institucion',$this->institucion,true);

		$session=new CHttpSession;
		$session->open();
		$session['Visitantes_record']=$criteria;


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visitantes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
