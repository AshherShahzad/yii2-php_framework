<?php

namespace common\modules\auth\controllers;

use Yii;
use common\modules\auth\models\Emp;
use common\modules\auth\models\EmpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\User;

/**
 * EmpController implements the CRUD actions for Emp model.
 */
class EmpController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {/*
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];*/
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
							$emp = Yii::$app->request->post();
							#$emp = load(Yii::$app->request->post(), 'emp');
							#$emp->load(Yii::$app->request->post(), 'Emp');
							#$emp = Yii::$app->request->emp();
							#echo "we are here now";
								# exit;
							 #echo $route;
							# echo implode($emp);
							#exit;
							if(Yii::$app->user->can($route)){
								#echo "we are here now";
								 
								 #exit;
							
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
     * Lists all Emp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Emp model.
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
     * Creates a new Emp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Emp();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->empno]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Emp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->empno]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Emp model.
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
     * Finds the Emp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Emp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Emp::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
	
	public function findUserModel($id)
    {
        if (($model = Emp::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
