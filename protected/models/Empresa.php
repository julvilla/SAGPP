<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property string $emp_codigo
 * @property string $rut
 * @property string $emp_nombre
 * @property string $emp_rubro
 * @property string $emp_direccion
 * @property string $emp_fono
 *
 * The followings are the available model relations:
 * @property Supervisor $rut0
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emp_codigo, rut, emp_fono', 'length', 'max'=>10),
			array('emp_nombre, emp_direccion', 'length', 'max'=>100),
			array('emp_rubro', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('emp_codigo, rut, emp_nombre, emp_rubro, emp_direccion, emp_fono', 'safe', 'on'=>'search'),
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
			'rut0' => array(self::BELONGS_TO, 'Supervisor', 'rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'emp_codigo' => 'Emp Codigo',
			'rut' => 'Rut',
			'emp_nombre' => 'Emp Nombre',
			'emp_rubro' => 'Emp Rubro',
			'emp_direccion' => 'Emp Direccion',
			'emp_fono' => 'Emp Fono',
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

		$criteria->compare('emp_codigo',$this->emp_codigo,true);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('emp_nombre',$this->emp_nombre,true);
		$criteria->compare('emp_rubro',$this->emp_rubro,true);
		$criteria->compare('emp_direccion',$this->emp_direccion,true);
		$criteria->compare('emp_fono',$this->emp_fono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
