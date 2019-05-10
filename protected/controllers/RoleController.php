<?php

class RoleController extends Controller
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
// 			array('allow', // allow authenticated user to perform 'create' and 'update' actions
// 				'actions'=>array('create','update'),
// 				'users'=>array('@'),
// 			),
// 			array('allow', // allow admin user to perform 'admin' and 'delete' actions
// 				'actions'=>array('admin','delete'),
// 				//'users'=>array('admin'),
// 				'expression'=>'isset(Yii::app()->user->role) && (Yii::app()->user->role == "superadmin")',
// 			),
				array('allow',
						'actions'=>array('index','view'),
						'expression'=>'isset(Yii::app()->user->permission) && (in_array("role_view",Yii::app()->user->permission))',
				),
				array('allow',
						'actions'=>array('admin','update'),
						'expression'=>'isset(Yii::app()->user->permission) && (in_array("role_edit",Yii::app()->user->permission))',
				),
				array('allow',
						'actions'=>array('create'),
						'expression'=>'isset(Yii::app()->user->permission) && (in_array("role_add",Yii::app()->user->permission))',
				),
				array('allow',
						'actions'=>array('delete'),
						'expression'=>'isset(Yii::app()->user->permission) && (in_array("role_delete",Yii::app()->user->permission))',
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
		$model=new Role;
		$permission = new Permission();
		$arrCek = array('');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Role']))
		{
			$model->attributes=$_POST['Role'];
			if($model->save()){				                        
				for ($i=1; $i <= $_POST['counter']; $i++ ){
					if(isset($_POST['cek_'.$i])){
							//echo "masuk"; exit;
							if(isset($_POST['permissionid_'.$i])){
								$rolepermission=new RolePermission();
				
								$rolepermission->permission_id = $_POST['permissionid_'.$i];
								$rolepermission->role_id = $model->role_id;
									
								if($rolepermission->save()){
									//array_push($arrCek, $_POST['cek_'.$i]);
								}else{
									echo "ERROR SAVING DATA <br>";
									print_r($rolepermission->attributes); exit;
								}
							}
						
					}
						
				} // end for
				
				$this->redirect(array('view','id'=>$model->role_id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'permission'=>$permission,
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
		
		$arrCek = array('odd','even');
		if(isset($_POST['Role']))
		{
			$roleID = $_POST['role_id'];
			// begin Transaction
			$model->attributes=$_POST['Role'];
			$model->save();				
				
			for ($i=1; $i <= $_POST['counter']; $i++ ){
		  		if(isset($_POST['permissionid_'.$i])){  				
				// cek ada di db atau belum
					$rolePerm = RolePermission::model()->find('role_id=:role_id and permission_id=:permission_id',
							array(':role_id'=>$roleID,
								  ':permission_id'=>$_POST['permissionid_'.$i],
					));
					
					if($rolePerm == null){
						//echo "masuk"; exit;
						if(isset($_POST['cek_'.$i])){
							$rolepermission=new RolePermission();
								
							$rolepermission->permission_id = $_POST['permissionid_'.$i];
							$rolepermission->role_id = $roleID;							
					
							if($rolepermission->save()){
								array_push($arrCek, $_POST['permissionid_'.$i]);
							}else{
								echo "ERROR SAVING DATA <br>";
								print_r($rolepermission->attributes); exit;
							}
						}
					}else{
						if(!isset($_POST['cek_'.$i])){  // udah ada di DB tapi saat ini ga dicentang lagi
							//delete data
							$rolepermission = RolePermission::model()->findByPk($rolePerm->id)->delete();							
						}else{
							array_push($arrCek, $_POST['permissionid_'.$i]);
						}
					
					}
			
		  		}
			
			
			} // end for
		
		}else{ // no submit
			$arrCek = array('odd','even');
			$selected= Permission::model()->findAllBySql("select permission_id from role_permission
					where role_id = '$id'");
			
			foreach($selected as $sel){
				array_push($arrCek, CHtml::encode($sel->permission_id));
			}
			
		}
		
		$permissionmodel = new Permission('search');
		
		$this->render('update',array(
			'model'=>$model,
			'permission'=>$permissionmodel,
			'checked'=>$arrCek,
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
// 		$dataProvider=new CActiveDataProvider('Role');
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
		$model=new Role('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Role']))
			$model->attributes=$_GET['Role'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Role the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Role::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Role $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='role-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
