<?php

/**
 * This is the model class for table "university".
 *
 * The followings are the available columns in table 'university':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $photos
 * @property integer $public
 * @property string $street
 * @property string $postal_code
 * @property string $post
 * @property string $city
 * @property string $locality
 * @property double $latitude
 * @property double $longitude
 * @property string $mail
 * @property string $www
 * @property string $phone1
 * @property string $phone2
 *
 * The followings are the available model relations:
 * @property Course[] $courses
 */
class University extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return University the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'university';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, public, locality', 'required'),
			array('public', 'numerical', 'integerOnly'=>true),
			array('latitude, longitude', 'numerical'),
			array('name, locality', 'length', 'max'=>255),
			array('photos, street, www', 'length', 'max'=>100),
			array('postal_code', 'length', 'max'=>6),
			array('post, city, mail, phone1, phone2', 'length', 'max'=>45),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, photos, public, street, postal_code, post, city, locality, latitude, longitude, mail, www, phone1, phone2', 'safe', 'on'=>'search'),
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
			'courses' => array(self::HAS_MANY, 'Course', 'university_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'photos' => 'Photos',
			'public' => 'Public',
			'street' => 'Street',
			'postal_code' => 'Postal Code',
			'post' => 'Post',
			'city' => 'City',
			'locality' => 'Locality',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'mail' => 'Mail',
			'www' => 'Www',
			'phone1' => 'Phone1',
			'phone2' => 'Phone2',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('photos',$this->photos,true);
		$criteria->compare('public',$this->public);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('postal_code',$this->postal_code,true);
		$criteria->compare('post',$this->post,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('locality',$this->locality,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('www',$this->www,true);
		$criteria->compare('phone1',$this->phone1,true);
		$criteria->compare('phone2',$this->phone2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}