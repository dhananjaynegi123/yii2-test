<?php
 
namespace app\controllers;
 
use Yii;
use yii\web\Controller;
use app\models\User;
 
class UserController extends Controller
{
 
	public function actionUsers()
	{
		$model = new User();
	
		// if the post data is set, the user submitted the form
		if ($model->load(Yii::$app->request->post())) {
			
			// in that case, validate the data
			if ($model->validate()) {
				
				// save it to the database
				$model->save();		
				return;
			}
		}
	
		// by default, diplay the form
		return $this->render('users', [
			'model' => $model,
		]);
	}
}