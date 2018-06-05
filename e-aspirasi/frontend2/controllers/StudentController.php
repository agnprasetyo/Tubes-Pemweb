<?php
namespace frontend\controllers;
 
use Yii;
use app\models\Student;
use yii\web\Controller;
 
/**
 * manual CRUD
 **/
class StudentController extends Controller
{  
    /**
     * Create
     */
    public function actionCreate()
    {
        $model = new Student();
 
        // new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
                 
        return $this->render('create', ['model' => $model]);
    }
}