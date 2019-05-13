<?php

/**
 * This is the model class for table "tags".
 *
 * The followings are the available columns in table 'tags':
 * @property integer $id_tags
 * @property string $nombre_tags
 * @property integer $id_categoria
 *
 * The followings are the available model relations:
 * @property Categorias $idCategoria
 */
class Tags extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tags';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tags, id_categoria', 'required'),
			array('id_categoria', 'numerical', 'integerOnly'=>true),
			array('nombre_tags', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tags, nombre_tags, id_categoria', 'safe', 'on'=>'search'),
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
			'idCategoria' => array(self::BELONGS_TO, 'Categorias', 'id_categoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tags' => 'Id',
			'nombre_tags' => 'Nombre',
			'id_categoria' => 'Categoria',
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
		$criteria->with = array('idCategoria');
		$criteria->compare('id_tags',$this->id_tags);
		$criteria->compare('nombre_tags',$this->nombre_tags,true);
		$criteria->compare('idCategoria.nombre_categoria',$this->id_categoria,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tags the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
