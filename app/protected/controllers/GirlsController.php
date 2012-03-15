<?php

class GirlsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
				'actions'=>array('index','view','knockout'),
				'users'=>array('admin1','admin2','admin3','admin4','admin5','admin6','admin7','admin8','admin9','admin10'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Girls;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Girls']))
		{
			$model->attributes=$_POST['Girls'];
			$model->experience=$_POST['Girls']['experience'];
			$model->qualities=$_POST['Girls']['qualities'];
			$model->hobby=$_POST['Girls']['hobby'];
			$model->purpose=$_POST['Girls']['purpose'];
			$model->contracts=$_POST['Girls']['contracts'];
			$model->links=$_POST['Girls']['links'];
			
			//var_dump($model->attributes);
			
			if(isset($_POST['Girls']['portrait'])){
					$model->image=CUploadedFile::getInstance($model,'portrait');

					if($model->image){ 
						$pathPart2='/images/portraits/'.time().'.'.end(explode(".", $model->image->getName()));
						$path=Yii::getpathOfAlias('webroot').$pathPart2;
						$model->portrait=Yii::app()->request->baseUrl.$pathPart2;
					}
					
			}
			
			if(isset($_POST['Girls']['fulllengthportrait'])){
					$model->image2=CUploadedFile::getInstance($model,'fulllengthportrait');

					if($model->image2){
						$path2Part2='/images/portraits/'.time().'_fl.'.end(explode(".", $model->image2->getName()));
						$path2=Yii::getpathOfAlias('webroot').$path2Part2;
						$model->fulllengthportrait=Yii::app()->request->baseUrl.$path2Part2;
					}
					
			}
			
			if(isset($_POST['Girls']['demo'])){
					$model->mp3=CUploadedFile::getInstance($model,'demo');

					if($model->mp3){
						$path3Part2='/mp3/demos/'.time().'.'.end(explode(".", $model->mp3->getName()));
						$path3=Yii::getpathOfAlias('webroot').$path3Part2;
						$model->demo=Yii::app()->request->baseUrl.$path3Part2;
					}
					
			}
						
			if($model->save())
			{
			Yii::import('application.extensions.image.Image');
			Yii::import('application.extensions.helpers.CArray');
					 
				if($model->image){
					$model->image->saveAs($path); 
					 
					$bigpath = substr($path,0,strrpos($path,".")).'_big.'.end(explode(".", $path)); //var_dump($bigpath);
					$Image = Image::factory($path);	
					$Image -> resize(600, 600);
					$Image -> save($bigpath);
					
					$Image = Image::factory($path);	
					$Image -> resize(200, 200);
					$Image -> save($path);
					
					
				}
				
				if($model->image2){
					$model->image2->saveAs($path2);
					
					$bigpath2 = substr($path2,0,strrpos($path2,".")).'_big.'.end(explode(".", $path2)); 
					$Image2 = Image::factory($path2);	
					$Image2 -> resize(800, 800);
					$Image2 -> save($bigpath2);
					 
					$Image2 = Image::factory($path2);
					$Image2 -> resize(200, 200);
					$Image2 -> save($path2);	
				}
				
				if($model->mp3){
					$model->mp3->saveAs($path3);
				}
				
				if($model->email){
				$email = Yii::app()->email;
					$email->from = 'no-reply@moscowgirls.biz';
					$email->to = $model->email;
					$email->subject = 'MoscowGirls';
					$email->message = 'Здравствуйте, '.$model->name.'!<br> Ваша анкета успешно добавлена.';
					$email->send();
				}
				
				$this->redirect(Yii::app()->request->baseUrl);
			}	
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	
	public function actionKnockout()
	{
		$models=Girls::model()->findAll();

		foreach ($models as $model){
				if ($model->rating==0){
						if($model->email){
								$email = Yii::app()->email;
									$email->from = 'no-reply@moscowgirls.biz';
									$email->to = $model->email;
									$email->subject = 'MoscowGirls';
									$email->message = 'Здравствуйте!<br>Благодарим Вас за участие в нашем кастинге, но, к сожалению, на данный момент мы не готовы пригласить Вас к участию в проектe Mosсow girls.<br>Мы верим, что у Вас все получится, главное не сдаваться!<br><br><br><br><br><br><br>------<br>С уважением,<br>Администратор группы Moscow girls.';
									$email->send();
						}
				}	
				
		}
		$this->redirect(array('index',));
		
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

		if(isset($_POST['Girls']))
		{
			$model->attributes=$_POST['Girls'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		
		if(isset($_POST['UpdRate']))
		{
		
			$updGirls=$_POST['UpdRate'];
			
			foreach ($updGirls as $girl){
			if ($girl!==''){
					$model=$this->loadModel($girl);
					$model->rating=$model->rating+1;
					if($model->save(false)) {
							if($model->email){
									$email = Yii::app()->email;
									$email->from = 'no-reply@moscowgirls.biz';
									$email->to = $model->email;
									$email->subject = 'MoscowGirls';
									$email->message = 'Здравствуйте!<br>Благодарим Вас за участие в нашем кастинге и хотим сообщить Вам, что мы готовы пригласить Вас принять участие в следующем этапе Кастинга.<br>Для уточнение времени и места с Вами свяжется наш Администратор, если по каким-то причинам этого не произошло до «20» апреля, просим Вас самостоятельно связаться с нами.<br>Спасибо и удачи Вам в следующем этапе!';
									$email->send();
							}
					}
				}
			}
		}
		
		
		$dataProvider=new CActiveDataProvider('Girls',array('pagination'=>array('pageSize'=>'99999999999')));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Girls('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Girls']))
			$model->attributes=$_GET['Girls'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Girls::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='girls-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
