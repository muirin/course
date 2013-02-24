<?php

/**
 * This is the model class for table "teacher_rating".
 *
 * The followings are the available columns in table 'teacher_rating':
 * @property integer $id
 * @property integer $teacher_id
 * @property integer $user_id
 * @property integer $subject_id
 * @property integer $good_explanation
 * @property integer $fairness
 * @property integer $knowledge
 * @property integer $availability
 * @property integer $friendliness
 *
 * The followings are the available model relations:
 * @property Subject $subject
 * @property Teacher $teacher
 */
class TeacherRating extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TeacherRating the static model class
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
		return 'teacher_rating';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('teacher_id, user_id, subject_id, good_explanation, fairness, knowledge, availability, friendliness', 'required'),
			array('teacher_id, user_id, subject_id, good_explanation, fairness, knowledge, availability, friendliness', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, teacher_id, user_id, subject_id, good_explanation, fairness, knowledge, availability, friendliness', 'safe', 'on'=>'search'),
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
			'subject' => array(self::BELONGS_TO, 'Subject', 'subject_id'),
			'teacher' => array(self::BELONGS_TO, 'Teacher', 'teacher_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'teacher_id' => 'Teacher',
			'user_id' => 'User',
			'subject_id' => 'Subject',
			'good_explanation' => 'Good Explanation',
			'fairness' => 'Fairness',
			'knowledge' => 'Knowledge',
			'availability' => 'Availability',
			'friendliness' => 'Friendliness',
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
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('good_explanation',$this->good_explanation);
		$criteria->compare('fairness',$this->fairness);
		$criteria->compare('knowledge',$this->knowledge);
		$criteria->compare('availability',$this->availability);
		$criteria->compare('friendliness',$this->friendliness);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}