<?php

/**
 * This is the model class for table "libros".
 *
 * The followings are the available columns in table 'libros':
 * @property integer $id_libro
 * @property string $nombre_libro
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
class Libros extends CActiveRecord
{
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
			array('id_libro, nombre_libro, autor, categoria', 'required'),
			array('id_libro, categoria, pais_autor, numero_paginas, estado', 'numerical', 'integerOnly'=>true),
			array('nombre_libro', 'length', 'max'=>255),
			array('editorial, autor', 'length', 'max'=>45),
			array('año_edicion, imagen, descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_libro, nombre_libro, editorial, autor, categoria, pais_autor, numero_paginas, año_edicion, imagen, descripcion, estado', 'safe', 'on'=>'search'),
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
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'id_libro'),
			'fotocopias' => array(self::HAS_MANY, 'Fotocopia', 'id_libro'),
			'categoria0' => array(self::BELONGS_TO, 'Categorias', 'categoria'),
			'paisAutor' => array(self::BELONGS_TO, 'Pais', 'pais_autor'),
			'prestamoses' => array(self::HAS_MANY, 'Prestamos', 'codigo_libro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_libro' => 'Id',
			'nombre_libro' => 'Nombre',
			'editorial' => 'Editorial',
			'autor' => 'Autor',
			'categoria' => 'Categoria',
			'pais_autor' => 'Pais Autor',
			'numero_paginas' => 'Numero Paginas',
			'año_edicion' => 'Año Edicion',
			'imagen' => 'Imagen',
			'descripcion' => 'Descripcion',
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
		$criteria->with = array('categoria0','paisAutor');
		$criteria->compare('id_libro',$this->id_libro,true);
		$criteria->compare('nombre_libro',$this->nombre_libro,true);
		$criteria->compare('editorial',$this->editorial,true);
		$criteria->compare('autor',$this->autor,true);
		$criteria->compare('categoria0.nombre_categoria',$this->categoria,true);
		$criteria->compare('paisAutor.nombre_pais',$this->pais_autor,true);
		$criteria->compare('numero_paginas',$this->numero_paginas,true);
		$criteria->compare('año_edicion',$this->año_edicion,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('estado',$this->estado,true);

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
