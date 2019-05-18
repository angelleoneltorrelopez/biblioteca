<?php

/**
 * This is the model class for table "prestamos".
 *
 * The followings are the available columns in table 'prestamos':
 * @property integer $id_prestamo
 * @property integer $codigo_libro
 * @property integer $id_visitante
 * @property string $fecha_salida
 * @property string $fecha_maxima
 * @property string $fecha_devolucion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Libros $codigoLibro
 * @property Visitantes $idVisitante
 */
class Prestamos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prestamos';
	}


	public function ver($attribute){
		if($this->fecha_devolucion>$this->fecha_maxima){
			$this->addError($attribute,'Fecha maxima excedida');
		}
	}

	public function verificar($attribute){
		if($this->fecha_maxima<$this->fecha_salida){
			$this->addError($attribute,'Fecha Fin debe ser igual o mayor que Fecha Salida');
		}
	}



	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_libro, id_visitante, fecha_salida, fecha_maxima', 'required'),
			array('codigo_libro, id_visitante, estado', 'numerical', 'integerOnly'=>true),
			array('fecha_salida','compare','compareValue'=>date('Y-m-d'),'operator'=>'>='),  //Esto compara que la fecha de finalización de licitación sea mayor a la fecha actual
			//array('estado','compare','compareValue'=>'0','operator'=>'>'),  //Esto compara que la fecha de finalización de licitación sea mayor a la fecha actual
			array('fecha_maxima','verificar'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_prestamo, codigo_libro, id_visitante, fecha_salida, fecha_maxima, fecha_devolucion, estado', 'safe', 'on'=>'search'),

		//	array('fecha_devolucion','compare','compareAttribute'=>'fecha_salida','operator'=>'>=','on'=>'devo'),
			//array('fecha_devolucion','ver','on'=>'devo'),
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
			'codigoLibro' => array(self::BELONGS_TO, 'Libros', 'codigo_libro'),
			'idVisitante' => array(self::BELONGS_TO, 'Visitantes', 'id_visitante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_prestamo' => 'Id',
			'codigo_libro' => 'Libro',
			'id_visitante' => 'Visitante',
			'fecha_salida' => 'Fecha Salida',
			'fecha_maxima' => 'Fecha Maxima',
			'fecha_devolucion' => 'Fecha Devolucion',
			'estado' => 'Estado',
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
		$criteria->with = array('idVisitante','codigoLibro');
		$criteria->compare('id_prestamo',$this->id_prestamo,true);
		$criteria->compare('codigoLibro.nombre_libro',$this->codigo_libro,true);
		$criteria->compare('idVisitante.nombre',$this->id_visitante,true);
		$criteria->compare('fecha_salida',$this->fecha_salida,true);
		$criteria->compare('fecha_maxima',$this->fecha_maxima,true);
		$criteria->compare('fecha_devolucion',$this->fecha_devolucion,true);
		$criteria->compare('t.estado',$this->estado,true);

		$session=new CHttpSession;
		$session->open();
		$session['Prestamos_record']=$criteria;

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}



	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Prestamos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
