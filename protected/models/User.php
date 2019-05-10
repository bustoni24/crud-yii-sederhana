<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $userId
 * @property string $userUsername
 * @property string $userPassword
 * @property string $userRealname
 * @property integer $userRole
 * @property string $userTanggalWisuda
 * @property integer $userProdi
 */
class User extends CActiveRecord
{
	public $userFakultas;
	public $userAngkatan;
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
			array('userUsername', 'required'),
			array('userRole', 'numerical', 'integerOnly'=>true),
			array('userUsername, userPassword, userRealname', 'length', 'max'=>50),			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userId, userUsername, userPassword, userRealname, userRole', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userId' => 'ID',
			'userUsername' => 'Username',
			'userPassword' => 'Password',
			'userRealname' => 'Nama Lengkap',
			'userRole' => 'Hak Akses'
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

		$criteria->compare('userId',$this->userId);
		$criteria->compare('userUsername',$this->userUsername,true);
		$criteria->compare('userPassword',$this->userPassword,true);
		$criteria->compare('userRealname',$this->userRealname,true);
		$criteria->compare('userRole',$this->userRole);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchAdmin()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('userId',$this->userId);
		$criteria->compare('userUsername',$this->userUsername,true);
		$criteria->compare('userPassword',$this->userPassword,true);
		$criteria->compare('userRealname',$this->userRealname,true);
		$criteria->compare('userRole', 10);
		
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
	

	public function getYearsList($year = 2010) {
	    $currentYear = date('Y');
	    $yearFrom = $year;
	    $yearsRange = range($yearFrom, $currentYear);
	    return array_combine($yearsRange, $yearsRange);
	}
	
}
