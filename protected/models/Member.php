<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property integer $id
 * @property string $namaMember
 * @property integer $noHp
 * @property string $tglLahir
 * @property string $emailMember
 * @property string $jenisKelamin
 * @property integer $noKtp
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('namaMember, noHp, tglLahir, emailMember, jenisKelamin, noKtp', 'required'),
			array('noHp, noKtp', 'numerical', 'integerOnly'=>true),
			array('namaMember', 'length', 'max'=>100),
			array('emailMember', 'length', 'max'=>50),
			array('jenisKelamin', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, namaMember, noHp, tglLahir, emailMember, jenisKelamin, noKtp', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'namaMember' => 'Nama Member',
			'noHp' => 'No Hp',
			'tglLahir' => 'Tgl Lahir',
			'emailMember' => 'Email Member',
			'jenisKelamin' => 'Jenis Kelamin',
			'noKtp' => 'No Ktp',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('namaMember',$this->namaMember,true);
		$criteria->compare('noHp',$this->noHp);
		$criteria->compare('tglLahir',$this->tglLahir,true);
		$criteria->compare('emailMember',$this->emailMember,true);
		$criteria->compare('jenisKelamin',$this->jenisKelamin,true);
		$criteria->compare('noKtp',$this->noKtp);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}