<?php

/**
 * This is the model class for table "multas".
 *
 * The followings are the available columns in table 'multas':
 * @property integer $id_multas
 * @property integer $id_visitante
 * @property double $monto
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Visitantes $idVisitante
 */
class Multas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'multas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_visitante, monto', 'required'),// datos requeridos
			array('id_visitante', 'numerical', 'integerOnly'=>true),// campos que son numeros enteros
			array('monto', 'numerical'),
			array('descripcion', 'length', 'max'=>255),
			array('descripcion',  'match', 'pattern'=>'/^[-0-9a-zA-Z.\sñNáéíóúÁÉÍÓÚ]+$/'),//campos solo alfanumerico y solo
			//guiones y muntos
			array('monto','compare','compareValue'=>0,'operator'=>'>'),  //Esto compara que el monto no sea negativo

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_multas, id_visitante, monto, descripcion', 'safe', 'on'=>'search'),
			//campos que se pueden van a guardar y buscar
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
			'idVisitante' => array(self::BELONGS_TO, 'Visitantes', 'id_visitante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_multas' => 'Id',
			'id_visitante' => 'Visitante',
			'monto' => 'Monto',
			'descripcion' => 'Descripcion',
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
		$criteria->with = array('idVisitante');
		$criteria->compare('id_multas',$this->id_multas);
		$criteria->compare('idVisitante.nombre',$this->id_visitante,true);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('descripcion',$this->descripcion,true);

		$session=new CHttpSession;
		$session->open();
		$session['Multas_record']=$criteria;

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Multas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
