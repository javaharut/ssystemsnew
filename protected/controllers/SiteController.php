<?php

class SiteController extends Controller
{

    function init() {
        $this->updateCache();
    }

    private function updateCache() {
        if(Yii::app()->request->getParam('cache', 'true') === 'false')
            Yii::app()->setComponent('cache', new CDummyCache());
    }

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
            /*			'page'=>array(
				        'class'=>'CViewAction',
			),*/
		);
	}

 /*   public function accessRules()
    {
        return array(
            array('allow',  //действия которые запрещены
                'users'=>array('*'),//все остальные действия
            ),
        );
    }*/

    /**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        $banners = Banner::model()->findAll();
        $main_by_id = Main::model()->findByPk(1);

		// renders the view file 'protected/views/site/index.php'
		// using the default layouts 'protected/views/layouts/main.php'
		$this->render('index', array('banners'=>$banners,'main_by_id'=>$main_by_id));
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
			else
				$this->renderPartial('error', $error);

		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

    public function actionGallery(){
        $albom = Gallery::model()->findAllByAttributes(array('type' => 4));
        $this->render('gallery', array('albom'=>$albom));
    }

    public function actionAlbom(){
        $albom = Gallery::model()->findAllByAttributes(array('type' => 4));
        $this->render('albom', array('albom'=>$albom));
    }

    public function actionImage($id){
        $images = Gallery::model()->findAllByAttributes(array('type' => 1,'parent_id'=>$id));
        $this->render('image', array('images'=>$images));
    }

    public function actionVideo(){
        $videos = Gallery::model()->findAllByAttributes(array('type' => 2));
        $this->render('video', array('videos'=>$videos));
    }

    public function actionPpk(){
        $ppks = Gallery::model()->findAllByAttributes(array('type' => 3));
        $this->render('ppk', array('ppks'=>$ppks));
    }

    public function actionCatalog(){
        $catalogs = Gallery::model()->findAllByAttributes(array('type' => 5));
        $this->render('catalog', array('catalogs'=>$catalogs));
    }

    public function actionPricelist(){
        $pricelists = Gallery::model()->findAllByAttributes(array('type' => 3));
        $this->render('pricelist', array('pricelists'=>$pricelists));
    }

    public function actionProduct(){
        $products = Product::model()->findAll();

        // renders the view file 'protected/views/site/index.php'
        // using the default layouts 'protected/views/layouts/main.php'
        $this->render('products', array('products'=>$products));
    }
    public function actionProducts($id)
    {
        $product = Product::model()->findByPk($id);

        $this->render('_products', array('product'=>$product));
    }

    public function actionPartner(){
        $partners = Partners::model()->findAll();
        // renders the view file 'protected/views/site/index.php'
        // using the default layouts 'protected/views/layouts/main.php'
        $this->render('partners', array('partners'=>$partners));
    }

    public function actionPartners($id)
    {
        $partner = Partners::model()->findByPk($id);

        $this->render('_partners', array('partner'=>$partner));
    }

    public function actionCertificates()
    {
        $certificates = Certificates::model()->findAll();
        $this->render('certificates', array('certificates'=>$certificates));
    }

    public function actionAbout()
    {
        $main_by_id = Main::model()->findByPk(2);

        // renders the view file 'protected/views/site/index.php'
        // using the default layouts 'protected/views/layouts/main.php'
        $this->render('about', array('main_by_id'=>$main_by_id));
//        $this->render('about');
    }

    public function actionContacts()
    {
        $this->render("contacts");
    }

    /*
     *   !!!   Region for ajax calls  !!!
     */

    public function actionMail()
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $mess = "<br/>Name: ".$_POST['name']."<br/>E mail: ".$_POST['email']."<br/>Subject: ".$_POST['message']."<br/>";
        $to = "hartuk18@gmail.com";
        $headers = "Content-Type: text/html; charset=utf-8\r\n";
        $headers .= "From:".$email."\r\n";

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            mail($to, $name, $mess, $headers);
            echo "success";
        }
        Yii::app()->end();
    }


    public function actionService() {
        $main_by_id = Main::model()->findByPk(3);
        $this->render('service', array('main_by_id'=>$main_by_id));
    }

/**************** sax  normal  e**************************/

}