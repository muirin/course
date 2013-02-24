<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Twój kierunek',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
	'application.models.*',
	'application.components.*',
    ),
    'modules' => array(
	// uncomment the following to enable the Gii tool

	'gii' => array(
	    'class' => 'system.gii.GiiModule',
	    'password' => 'gii',
	    // If removed, Gii defaults to localhost only. Edit carefully to taste.
	    'ipFilters' => array('127.0.0.1', '::1'),
	),
	'comments' => array(
	    //you may override default config for all connecting models
	    'defaultModelConfig' => array(
		//only registered users can post comments
		'registeredOnly' => false,
		'useCaptcha' => false,
		//allow comment tree
		'allowSubcommenting' => true,
		//display comments after moderation
		'premoderate' => false,
		//action for postig comment
		'postCommentAction' => 'comments/comment/postComment',
		//super user condition(display comment list in admin view and automoderate comments)
		'isSuperuser' => 'Yii::app()->user->checkAccess("moderate")',
		//order direction for comments
		'orderComments' => 'DESC',
	    ),
	    //the models for commenting
	    'commentableModels' => array(
		//model with individual settings
		//'Course',
		'Course' => array(
		    'registeredOnly' => true,
		    'useCaptcha' => false,
		    'allowSubcommenting' => true,
		    //config for create link to view model page(page with comments)
//		    'pageUrl' => array(
//			'route' => 'course/view',
//			'data' => array('id' => 'course_id'),
//		    ),
		),
		//model with default settings
		//'ImpressionSet',
	    ),
	    //config for user models, which is used in application
	    'userConfig' => array(
		'class' => 'User',
		'nameProperty' => 'login',
		'emailProperty' => 'login',
	    ),
	),
    ),
    // application components
    'components' => array(
	'user' => array(
	    'class' => 'application.components.EWebUser',
	    // enable cookie-based authentication
	    'allowAutoLogin' => true,
	),
	// uncomment the following to enable URLs in path-format

	'urlManager' => array(
	    'urlFormat' => 'path',
	    'rules' => array(
		'<controller:\w+>/<id:\d+>' => '<controller>/view',
		'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
		'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
	    ),
	),
	/*
	  'db'=>array(
	  'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	  ),
	  // uncomment the following to use a MySQL database
	 */
	'db' => array(
	    'connectionString' => 'mysql:host=localhost;dbname=course',
	    'emulatePrepare' => true,
	    'username' => 'root',
	    'password' => 'pass',
	    'charset' => 'utf8',
	),
	'errorHandler' => array(
	    // use 'site/error' action to display errors
	    'errorAction' => 'site/error',
	),
	'log' => array(
	    'class' => 'CLogRouter',
	    'routes' => array(
		array(
		    'class' => 'CFileLogRoute',
		    'levels' => 'error, warning',
		),
	    // uncomment the following to show log messages on web pages
	    /*
	      array(
	      'class'=>'CWebLogRoute',
	      ),
	     */
	    ),
	),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
	// this is used in contact page
	'adminEmail' => 'webmaster@example.com',
    ),
);