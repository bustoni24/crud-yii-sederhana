<?php

class HomeController extends Controller
{
public $layout='main';
public function filters()
	{
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
	public function accessRules()
	{
		return array(
		  array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('list'),
			  'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
			        'expression'=>'isset(Yii::app()->user->permission)',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		
		$this->render('index');
	}

	public function getCover($id)
	{
		
	}



}
