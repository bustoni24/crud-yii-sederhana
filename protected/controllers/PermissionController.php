<?php

class PermissionController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array(''),
				'users'=>array('*'),
			),
			array('allow', 
					'actions'=>array('index'),
					'expression'=>'isset(Yii::app()->user->permission) && (in_array("permission_view",Yii::app()->user->permission))',
			),
			array('allow', 
					'actions'=>array('admin','update'),
					'expression'=>'isset(Yii::app()->user->permission) && (in_array("permission_edit",Yii::app()->user->permission))',
			),
			array('allow', 
					'actions'=>array('create'),
					'expression'=>'isset(Yii::app()->user->permission) && (in_array("permission_add",Yii::app()->user->permission))',
			),
				array('allow',
						'actions'=>array('delete'),
						'expression'=>'isset(Yii::app()->user->permission) && (in_array("permission_delete",Yii::app()->user->permission))',
				),
			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Permission;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Permission']))
		{
			$model->attributes=$_POST['Permission'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Permission']))
		{
			$model->attributes=$_POST['Permission'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
// 		$dataProvider=new CActiveDataProvider('Permission');
// 		$this->render('index',array(
// 			'dataProvider'=>$dataProvider,
// 		));
		$this->actionAdmin();
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Permission('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Permission']))
			$model->attributes=$_GET['Permission'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Permission the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Permission::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Permission $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='permission-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
