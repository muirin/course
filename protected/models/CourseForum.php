<?php

/**
 * This is the model class for table "course_forum".
 *
 * The followings are the available columns in table 'course_forum':
 * @property integer $id
 * @property integer $course_id
 * @property string $title
 * @property string $content
 * @property integer $topic_id
 * @property integer $parent_id
 * @property integer $status
 * @property string $last_update_time
 * @property integer $user_id
 * @property integer $update_number
 * @property string $create_time
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Course $course
 */
class CourseForum extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CourseForum the static model class
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
		return 'course_forum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('course_id, title, content, topic_id, status, last_update_time, user_id', 'required'),
			array('course_id, topic_id, parent_id, status, user_id, update_number', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>500),
			array('create_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, course_id, title, content, topic_id, parent_id, status, last_update_time, user_id, update_number, create_time', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
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
			'title' => 'Title',
			'content' => 'Content',
			'topic_id' => 'Topic',
			'parent_id' => 'Parent',
			'status' => 'Status',
			'last_update_time' => 'Last Update Time',
			'user_id' => 'User',
			'update_number' => 'Update Number',
			'create_time' => 'Create Time',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('last_update_time',$this->last_update_time,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('update_number',$this->update_number);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}