<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $iduser
 * @property string $nmuser
 * @property string $lsuser
 * @property string $alamat_user
 * @property string $kontak_user
 * @property string $usr_user
 * @property string $pss_user
 * @property string $email_user
 * @property integer $jenis_kelamin_idjenis_kelamin
 * @property integer $agama_idagama
 * @property integer $hak_access_idhak_access
 * @property string $img_user
 *
 * The followings are the available model relations:
 * @property Agama $agamaIdagama
 * @property HakAccess $hakAccessIdhakAccess
 * @property JenisKelamin $jenisKelaminIdjenisKelamin
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenis_kelamin_idjenis_kelamin, agama_idagama, hak_access_idhak_access', 'required'),
			array('jenis_kelamin_idjenis_kelamin, agama_idagama, hak_access_idhak_access', 'numerical', 'integerOnly'=>true),
			array('nmuser, lsuser, alamat_user, kontak_user, usr_user, pss_user, email_user, img_user', 'length', 'max'=>45),
			array('img_user', 'file'),
                        // The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iduser, nmuser, lsuser, alamat_user, kontak_user, usr_user, pss_user, email_user, jenis_kelamin_idjenis_kelamin, agama_idagama, hak_access_idhak_access, img_user', 'safe', 'on'=>'search'),
                        array('img_user', 'file', 'allowEmpty'=>true,'maxSize'=>1024*1024*5, //ukuran file max 
                             'types'=>'jpg,jpeg,png','tooLarge'=>'Ukuran foto tidak lebih dari 5Mb',
                             'wrongType'=>'Jenis file hanya JPEG atau PNG',
                             'on'=>'insert'),
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
			'agamaIdagama' => array(self::BELONGS_TO, 'Agama', 'agama_idagama'),
			'hakAccessIdhakAccess' => array(self::BELONGS_TO, 'HakAccess', 'hak_access_idhak_access'),
			'jenisKelaminIdjenisKelamin' => array(self::BELONGS_TO, 'JenisKelamin', 'jenis_kelamin_idjenis_kelamin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iduser' => 'Id user',
			'nmuser' => 'Nama awal user',
			'lsuser' => 'Nama akhir user',
			'alamat_user' => 'Alamat User',
			'kontak_user' => 'Kontak User',
			'usr_user' => 'Username',
			'pss_user' => 'Passuser',
			'email_user' => 'Email user',
			'jenis_kelamin_idjenis_kelamin' => 'Jenis kelamin',
			'agama_idagama' => 'Agama',
			'hak_access_idhak_access' => 'Hak access',
			'img_user' => 'Foto user',
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

		$criteria->compare('iduser',$this->iduser);
		$criteria->compare('nmuser',$this->nmuser,true);
		$criteria->compare('lsuser',$this->lsuser,true);
		$criteria->compare('alamat_user',$this->alamat_user,true);
		$criteria->compare('kontak_user',$this->kontak_user,true);
		$criteria->compare('usr_user',$this->usr_user,true);
		$criteria->compare('pss_user',$this->pss_user,true);
		$criteria->compare('email_user',$this->email_user,true);
		$criteria->compare('jenis_kelamin_idjenis_kelamin',$this->jenis_kelamin_idjenis_kelamin);
		$criteria->compare('agama_idagama',$this->agama_idagama);
		$criteria->compare('hak_access_idhak_access',$this->hak_access_idhak_access);
		$criteria->compare('img_user',$this->img_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
