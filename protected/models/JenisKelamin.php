<?php

/**
 * This is the model class for table "jenis_kelamin".
 *
 * The followings are the available columns in table 'jenis_kelamin':
 * @property integer $idjenis_kelamin
 * @property string $nm_jenis_kelamin
 *
 * The followings are the available model relations:
 * @property User[] $users
 */
class JenisKelamin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jenis_kelamin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nm_jenis_kelamin', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idjenis_kelamin, nm_jenis_kelamin', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'User', 'jenis_kelamin_idjenis_kelamin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idjenis_kelamin' => 'Id jenis Kelamin',
			'nm_jenis_kelamin' => 'Nama Jenis Kelamin',
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

		$criteria->compare('idjenis_kelamin',$this->idjenis_kelamin);
		$criteria->compare('nm_jenis_kelamin',$this->nm_jenis_kelamin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JenisKelamin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
