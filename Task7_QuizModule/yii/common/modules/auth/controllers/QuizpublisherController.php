<?php

namespace common\modules\auth\controllers;

use Yii;
use common\modules\auth\models\Quizpublisher;
use common\modules\auth\models\QuizpublisherSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * QuizpublisherController implements the CRUD actions for Quizpublisher model.
 */
class QuizpublisherController extends Controller
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
							if(Yii::$app->user->can($route)){
								return true;
							}
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
     * Lists all Quizpublisher models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new QuizpublisherSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Quizpublisher model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Quizpublisher model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Quizpublisher();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Quizpublisher model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Quizpublisher model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Quizpublisher model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Quizpublisher the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function findModel($id)
    {
        if (($model = Quizpublisher::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
