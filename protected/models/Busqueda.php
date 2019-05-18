
<?php

/**
 * This is the model class for table "libros".
 *
 * The followings are the available columns in table 'libros':
 * @property integer $id_libro
 * @property string $buscar
 * @property string $editorial
 * @property string $autor
 * @property integer $categoria
 * @property integer $pais_autor
 * @property integer $numero_paginas
 * @property string $año_edicion
 * @property string $imagen
 * @property string $descripcion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Bitacora[] $bitacoras
 * @property Fotocopia[] $fotocopias
 * @property Categorias $categoria0
 * @property Pais $paisAutor
 * @property Prestamos[] $prestamoses
 */
class Busqueda extends CActiveRecord
{
	public $buscar, $categoria0, $categoria, $cat;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'libros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('buscar', 'length', 'max'=>255),

			array('categoria', 'numerical', 'integerOnly'=>true),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('buscar, categoria', 'safe', 'on'=>'search'),
			
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
			'categoria0' => array(self::BELONGS_TO, 'Categorias', 'categoria'),
		
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'buscar' => 'Buscar',
			'categoria' => 'Categoria',
		
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
		$criteria->with = array('categoria0');
		$criteria->compare('buscar',$this->buscar,true);
		$criteria->compare('categoria0.nombre_categoria',$this->categoria,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Libros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}


