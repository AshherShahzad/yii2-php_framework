<?php

namespace common\modules\auth\controllers;

use Yii;
use common\modules\auth\models\Myquiz;
use common\modules\auth\models\MyquizSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\User;
/**
 * MyquizController implements the CRUD actions for Myquiz model.
 */
class MyquizController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
       $behaviors['access'] = [
                'class' => AccessControl::className(),
                'rules' => [
                    [
						'allow' => true,
						'roles' => ['@'],
					'matchCallback' => function($rules, $action){
							
							$module = Yii::$app->controller->module->id;
							$action = Yii::$app->controller->action->id;
							$controller = Yii::$app->controller->id;
							$route = "$module/$controller/$action";
							$myquiz = Yii::$app->request->post();
							#$emp = load(Yii::$app->request->post(), 'emp');
							#$emp->load(Yii::$app->request->post(), 'Emp');
							#$emp = Yii::$app->request->emp();
							#echo "we are here now";
								# exit;
							 #echo $route;
							# echo implode($emp);
							#exit;
							#echo $route;
							#	 exit;
							
							if(Yii::$app->user->can($route)){
								#echo $route;
								 #exit;
							
								return true;
							}
							
							/*
							#echo "we are here";
							#	exit;
							if (\Yii::$app->user->can('updateMyQuiz', ['myquiz' => $myquiz])) {
								// update post
								echo "we are here";
								exit;
							}

*/

						},
						'denyCallback' => function($rules, $action){
							return $this->redirect(Yii::$app->request->baseUrl.'/site/login');
						},	
						
					],
					
                ],
        ];
					return $behaviors;
    }

    /**
     * Lists all Myquiz models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MyquizSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Myquiz model.
     * @param string $Quiz
     * @param string $User
     * @param integer $QuizQuestions
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Quiz, $User, $QuizQuestions)
    {
        return $this->render('view', [
            'model' => $this->findModel($Quiz, $User, $QuizQuestions),
        ]);
    }

    /**
     * Creates a new Myquiz model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Myquiz();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Quiz' => $model->Quiz, 'User' => $model->User, 'QuizQuestions' => $model->QuizQuestions]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Myquiz model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Quiz
     * @param string $User
     * @param integer $QuizQuestions
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Quiz, $User, $QuizQuestions)
    {
        $model = $this->findModel($Quiz, $User, $QuizQuestions);

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            return $this->redirect(['view', 'Quiz' => $model->Quiz, 'User' => $model->User, 'QuizQuestions' => $model->QuizQuestions]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Myquiz model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Quiz
     * @param string $User
     * @param integer $QuizQuestions
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Quiz, $User, $QuizQuestions)
    {
        $this->findModel($Quiz, $User, $QuizQuestions)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Myquiz model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Quiz
     * @param string $User
     * @param integer $QuizQuestions
     * @return Myquiz the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function findModel($Quiz, $User, $QuizQuestions)
    {
        if (($model = Myquiz::findOne(['Quiz' => $Quiz, 'User' => $User, 'QuizQuestions' => $QuizQuestions])) !== null) {
			
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
