<?php

class MainController extends SecureController
{
	public function actionIndex()
	{
		$this->render('index');
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
                $this->redirect(Yii::app()->createUrl("cms/main"));
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }

    public function actionMainform()
    {
        $model=Main::model()->findByPk(1);

        if(isset($_POST['ajax']) && $_POST['ajax']==='main-mainform-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST['Main']))
        {
            $model->attributes=$_POST['Main'];
            if($model->save())
            {
                // form inputs are valid, do something here
                Yii::app()->user->setFlash("success","Saved!!!");
            }
        }
        $this->render('mainform',array('model'=>$model));
    }



    public function actionAbout() {
        $model=Main::model()->findByPk(2);

        if(isset($_POST['ajax']) && $_POST['ajax']==='main-mainform-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST['Main']))
        {
            $model->attributes=$_POST['Main'];
            if($model->save())
            {
                // form inputs are valid, do something here
                Yii::app()->user->setFlash("success","Saved!!!");
            }
        }
        $this->render('mainform',array('model'=>$model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->baseUrl."/cms/main/login");
    }


	// Uncomment the following methods and override them if needed

    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated users to access all actions
                'users'=>array('@'),

            ),
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('login'),
                'users' => array('*'),
            ),
        );
    }

    public function filters()
    {
        return array( 'accessControl' ); // perform access control for CRUD operations
    }

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

}