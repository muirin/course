<?php

class SubjectRatingController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
	return array(
	    'accessControl', // perform access control for CRUD operations
	    'postOnly + delete', // we only allow deletion via POST request
	);
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
	return array(
	    array('allow', // allow all users to perform 'index' and 'view' actions
		'actions' => array('index', 'view'),
		'users' => array('*'),
	    ),
	    array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions' => array('create', 'update'),
		'users' => array('@'),
	    ),
	    array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions' => array('admin', 'delete'),
		'users' => array('admin'),
	    ),
	    array('deny', // deny all users
		'users' => array('*'),
	    ),
	);
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
	$this->render('view', array(
	    'model' => $this->loadModel($id),
	));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($sid) {
	$subjectRatings[0] = new SubjectRating;
	//$teacherRating = new TeacherRating;

//	echo '<pre>';
//	if (isset($_POST['SubjectRating'])&&isset($_POST['TeacherRating'])) {
//	print_r($_POST['SubjectRating']);print_r($_POST['TeacherRating']);
//	}
//	echo '</pre>';
	if (isset($_POST['SubjectRating'])) {
	    
	    $teachers = $_POST['SubjectRating']['teacher_id'];
	    $subjectRatings = array();    
	    
	    $transaction=Yii::app()->db->beginTransaction();
	    try
	    {
		$i = 0;
		foreach($teachers as $teacher){
		    $subjectRatings[$i] = new SubjectRating;
		    $subjectRatings[$i]->attributes = $_POST['SubjectRating'];
		    $subjectRatings[$i]->teacher_id = $teacher;
		    if ($subjectRatings[$i]->save()) {echo 'raz';} else {
			print_r($subjectRatings[$i]->getErrors());
			
			}
		    $i++;
		}

		$transaction->commit();
	    }
	    catch(Exception $e) // an exception is raised if a query fails
	    {
		//var_dump($e);
		$transaction->rollback();
	    }

	}

	$radioOptions = array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10');

	$subject = Subject::model()->findByPk($sid);
	$teacherSubjects = $subject->teacherSubjects;

	$teachers = array();
	foreach ($teacherSubjects as $teacherSubject) {
	    $teachers[$teacherSubject->teacher->id] = $teacherSubject->teacher->name . ' ' . $teacherSubject->teacher->surname;
	}

	$this->render('create', array(
	    'subjectRating' => $subjectRatings[0],
	    //'teacherRating' => $teacherRating,
	    'subject_id' => $sid,
	    'teachers' => $teachers,
	    'radioOptions' => $radioOptions,
	));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
	$model = $this->loadModel($id);

	// Uncomment the following line if AJAX validation is needed
	// $this->performAjaxValidation($model);

	if (isset($_POST['SubjectRating'])) {
	    $model->attributes = $_POST['SubjectRating'];
	    if ($model->save())
		$this->redirect(array('view', 'id' => $model->id));
	}

	$this->render('update', array(
	    'model' => $model,
	));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
	$this->loadModel($id)->delete();

	// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
	if (!isset($_GET['ajax']))
	    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
	$dataProvider = new CActiveDataProvider('SubjectRating');
	$this->render('index', array(
	    'dataProvider' => $dataProvider,
	));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
	$model = new SubjectRating('search');
	$model->unsetAttributes();  // clear any default values
	if (isset($_GET['SubjectRating']))
	    $model->attributes = $_GET['SubjectRating'];

	$this->render('admin', array(
	    'model' => $model,
	));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return SubjectRating the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
	$model = SubjectRating::model()->findByPk($id);
	if ($model === null)
	    throw new CHttpException(404, 'The requested page does not exist.');
	return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param SubjectRating $model the model to be validated
     */
    protected function performAjaxValidation($model) {
	if (isset($_POST['ajax']) && $_POST['ajax'] === 'subject-rating-form') {
	    echo CActiveForm::validate($model);
	    Yii::app()->end();
	}
    }

}
