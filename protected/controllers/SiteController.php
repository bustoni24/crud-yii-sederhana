<?php

class SiteController extends Controller
{
	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		header("Location: ".Yii::app()->request->baseUrl."/");
		die();
		
	}


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else{
				echo $error['message'];//$this->render('error', $error);
			}
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
  	$model=new LoginForm;
  
  		// if it is ajax validation request
  		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
  		{
  			echo CActiveForm::validate($model);
  			Yii::app()->end();
  		}
  
  		// collect user input data
  		if(isset($_POST['LoginForm']))
  		{
  			$model->attributes=$_POST['LoginForm'];
  			// validate user input and redirect to the previous page if valid
  			if($model->validate() && $model->login())
  				$this->redirect(Yii::app()->request->baseUrl."/home");
  		}
  		// display the login form
  		$this->render('loginAdmin',array('model'=>$model));	
	}

  public function actionAdmin()
	{
  	$model=new LoginForm;
  
  		// if it is ajax validation request
  		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
  		{
  			echo CActiveForm::validate($model);
  			Yii::app()->end();
  		}
  
  		// collect user input data
  		if(isset($_POST['LoginForm']))
  		{
  			$model->attributes=$_POST['LoginForm'];
  			// validate user input and redirect to the previous page if valid
  			if($model->validate() && $model->login())
  				$this->redirect(Yii::app()->request->baseUrl."/home");
  		}
  		// display the login form
  		$this->render('loginAdmin',array('model'=>$model));
			
	}
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
		//$this->redirect('xxx/yyy');  -> redirect to site/xxx/yyy
	}
}
