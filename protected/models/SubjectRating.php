<?php

/**
 * This is the model class for table "subject_rating".
 *
 * The followings are the available columns in table 'subject_rating':
 * @property integer $id
 * @property integer $subject_id
 * @property integer $user_id
 * @property integer $teacher_id
 * @property integer $usefulness
 * @property integer $attractiveness
 * @property integer $equipment
 * @property integer $clear_rules
 * @property integer $difficulty
 *
 * The followings are the available model relations:
 * @property Teacher $teacher
 * @property Subject $subject
 */
class SubjectRating extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubjectRating the static model class
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
		return 'subject_rating';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		    array('subject_id+user_id+teacher_id', 'application.extensions.uniqueMultiColumnValidator'),
			array('subject_id, user_id, teacher_id, usefulness, attractiveness, equipment, clear_rules', 'required'),
			array('subject_id, user_id, usefulness, attractiveness, equipment, clear_rules, difficulty', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, subject_id, user_id, teacher_id, usefulness, attractiveness, equipment, clear_rules, difficulty', 'safe', 'on'=>'search'),
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
			'teacher' => array(self::BELONGS_TO, 'Teacher', 'teacher_id'),
			'subject' => array(self::BELONGS_TO, 'Subject', 'subject_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'subject_id' => 'Subject',
			'user_id' => 'User',
			'teacher_id' => 'Teacher',
			'usefulness' => 'Usefulness',
			'attractiveness' => 'Attractiveness',
			'equipment' => 'Equipment',
			'clear_rules' => 'Clear Rules',
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
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('usefulness',$this->usefulness);
		$criteria->compare('attractiveness',$this->attractiveness);
		$criteria->compare('equipment',$this->equipment);
		$criteria->compare('clear_rules',$this->clear_rules);
		$criteria->compare('difficulty',$this->difficulty);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}