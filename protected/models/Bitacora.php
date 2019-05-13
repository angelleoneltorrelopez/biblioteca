<?php

/**
 * This is the model class for table "bitacora".
 *
 * The followings are the available columns in table 'bitacora':
 * @property integer $id_bitacora
 * @property integer $id_visitante
 * @property integer $id_libro
 * @property string $hora_ingreso
 * @property string $hora_salida
 *
 * The followings are the available model relations:
 * @property Libros $idLibro
 * @property Visitantes $idVisitante
 */
class Bitacora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bitacora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_visitante, id_libro', 'required'),
			array('id_visitante, id_libro', 'numerical', 'integerOnly'=>true),
			array('hora_ingreso, hora_salida', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_bitacora, id_visitante, id_libro, hora_ingreso, hora_salida', 'safe', 'on'=>'search'),
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
			'idLibro' => array(self::BELONGS_TO, 'Libros', 'id_libro'),
			'idVisitante' => array(self::BELONGS_TO, 'Visitantes', 'id_visitante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_bitacora' => 'Id',
			'id_visitante' => 'Visitante',
			'id_libro' => 'Libro',
			'hora_ingreso' => 'Hora Ingreso',
			'hora_salida' => 'Hora Salida',
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
		$criteria->with = array('idVisitante','idLibro');
		$criteria->compare('id_bitacora',$this->id_bitacora);
		$criteria->compare('idVisitante.nombre',$this->id_visitante,true);
		$criteria->compare('idLibro.nombre_libro',$this->id_libro,true);
		$criteria->compare('hora_ingreso',$this->hora_ingreso,true);
		$criteria->compare('hora_salida',$this->hora_salida,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bitacora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
