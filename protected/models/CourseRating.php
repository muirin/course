<?php

/**
 * This is the model class for table "course_rating".
 *
 * The followings are the available columns in table 'course_rating':
 * @property integer $id
 * @property integer $course_id
 * @property integer $user_id
 * @property integer $job
 * @property integer $attractiveness
 * @property integer $organization
 * @property integer $equipment
 * @property integer $difficulty
 *
 * The followings are the available model relations:
 * @property Course $course
 */
class CourseRating extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CourseRating the static model class
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
		return 'course_rating';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('course_id, user_id, job, attractiveness, organization, equipment', 'required'),
			array('course_id, user_id, job, attractiveness, organization, equipment, difficulty', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, course_id, user_id, job, attractiveness, organization, equipment, difficulty', 'safe', 'on'=>'search'),
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
			'course' => array(self::BELONGS_TO, 'Course', 'course_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'course_id' => 'Course',
			'user_id' => 'User',
			'job' => 'Job',
			'attractiveness' => 'Attractiveness',
			'organization' => 'Organization',
			'equipment' => 'Equipment',
			'difficulty' => 'Difficulty',
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
		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('job',$this->job);
		$criteria->compare('attractiveness',$this->attractiveness);
		$criteria->compare('organization',$this->organization);
		$criteria->compare('equipment',$this->equipment);
		$criteria->compare('difficulty',$this->difficulty);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}