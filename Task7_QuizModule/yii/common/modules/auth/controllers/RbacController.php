<?php

namespace common\modules\auth\controllers;

use Yii;
use common\modules\auth\models\AuthItem;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\rbac\DbManager;

/**
 * RbacController implements the CRUD actions for AuthItem model.
 */
class RbacController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
	
	//User assignment
	 public function actionAssignment()
    {
		$auth = Yii::$app->authManager;
        $auth = new DbManager;
		
		$author = $auth->createRole('author');
		$admin = $auth->createRole('admin');
		
        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($author, 2);
        $auth->assign($admin, 1);
    }
	//Create rule
	 public function actionCreate_rule()
    {
		$auth = Yii::$app->authManager;

		// add the rule
		$rule = new \common\modules\auth\rbac\AuthorRule;
		
		$auth->add($rule);
		
		// add the "updateOwnEmp" permission and associate the rule with it.
		$updateOwnEmp = $auth->createPermission('updateOwnEmp');
		$updateOwnEmp->description = 'Update own Emp';
		$updateOwnEmp->ruleName = $rule->name;
		$auth->add($updateOwnEmp);

		// add the "updateOwnMyQuiz" permission and associate the rule with it.
		$updateOwnMyQuiz = $auth->createPermission('updateOwnMyQuiz');
		$updateOwnMyQuiz->description = 'Update own MyQuiz';
		$updateOwnMyQuiz->ruleName = $rule->name;
		$auth->add($updateOwnMyQuiz);
		
		// add the "updateOwnQuizManager" permission and associate the rule with it.
		$updateOwnQuizManager = $auth->createPermission('updateOwnQuizManager');
		$updateOwnQuizManager->description = 'Update own QuizManager';
		$updateOwnQuizManager->ruleName = $rule->name;
		$auth->add($updateOwnQuizManager);
		
		// add the "updateOwnQuizPublisher" permission and associate the rule with it.
		$updateOwnQuizPublisher = $auth->createPermission('updateOwnQuizPublisher');
		$updateOwnQuizPublisher->description = 'Update own QuizPublisher';
		$updateOwnQuizPublisher->ruleName = $rule->name;
		$auth->add($updateOwnQuizPublisher);

		// add the "updateOwnQuestionCategories" permission and associate the rule with it.
		$updateOwnQuestionCategories = $auth->createPermission('updateOwnQuestionCategories');
		$updateOwnQuestionCategories->description = 'Update own QuestionCategories';
		$updateOwnQuestionCategories->ruleName = $rule->name;
		$auth->add($updateOwnQuestionCategories);

		// add the "updateOwnQuestion" permission and associate the rule with it.
		$updateOwnQuestion = $auth->createPermission('updateOwnQuestion');
		$updateOwnQuestion->description = 'Update own Question';
		$updateOwnQuestion->ruleName = $rule->name;
		$auth->add($updateOwnQuestion);



		$updateEmp = $auth->createPermission('auth/emp/update');

		$updateMyQuiz = $auth->createPermission('auth/myquiz/update');
		
		$updateQuizManager = $auth->createPermission('auth/quizmanager/update');
		
		$updateQuizPublisher = $auth->createPermission('auth/quizpublisher/update');
		
		$updateQuestionCategories = $auth->createPermission('auth/questioncategories/update');
		
		$updateQuestion = $auth->createPermission('auth/question/update');
		
		// "updateOwnPost" will be used from "updateEmp"
		$auth->addChild($updateOwnEmp, $updateEmp);
		
		$auth->addChild($updateOwnMyQuiz, $updateMyQuiz);
		
		$auth->addChild($updateOwnQuizManager, $updateQuizManager);
		
		$auth->addChild($updateOwnQuizPublisher, $updateQuizPublisher);
		
		$auth->addChild($updateOwnQuestionCategories, $updateQuestionCategories);
		
		$auth->addChild($updateOwnQuestion, $updateQuestion);
		
		$author = $auth->createPermission('author');
		// allow "author" to update their own emps
		$auth->addChild($author, $updateOwnEmp);
		// allow "author" to update their own myquiz
		$auth->addChild($author, $updateOwnMyQuiz);
		// allow "author" to update their own quizmanager
		$auth->addChild($author, $updateOwnQuizManager);
		// allow "author" to update their own quizpublisher
		$auth->addChild($author, $updateOwnQuizPublisher);
		// allow "author" to update their own questioncategories
		$auth->addChild($author, $updateOwnQuestionCategories);
		// allow "author" to update their own question
		$auth->addChild($author, $updateOwnQuestion);
		
	}
	
	//Create role
	 public function actionCreate_role()
    {
		$auth = Yii::$app->authManager;
        $auth = new DbManager;
		
		//Author -> index/create/view
		//Admin  -> {Admin} and update/delete -> index/create/view/update/delete
		
		$indexEmp = $auth->createPermission('auth/emp/index');
		$createEmp = $auth->createPermission('auth/emp/create');
		$viewEmp = $auth->createPermission('auth/emp/view');
		$updateEmp = $auth->createPermission('auth/emp/update');
		$deleteEmp = $auth->createPermission('auth/emp/delete');
		
		$indexMyQuiz = $auth->createPermission('auth/myquiz/index');
		$createMyQuiz = $auth->createPermission('auth/myquiz/create');
		$viewMyQuiz = $auth->createPermission('auth/myquiz/view');
		$updateMyQuiz = $auth->createPermission('auth/myquiz/update');
		$deleteMyQuiz = $auth->createPermission('auth/myquiz/delete');
		
		$indexQuizManager = $auth->createPermission('auth/quizmanager/index');
		$createQuizManager = $auth->createPermission('auth/quizmanager/create');
		$viewQuizManager = $auth->createPermission('auth/quizmanager/view');
		$updateQuizManager = $auth->createPermission('auth/quizmanager/update');
		$deleteQuizManager = $auth->createPermission('auth/quizmanager/delete');
		
		$indexQuizPublisher = $auth->createPermission('auth/quizpublisher/index');
		$createQuizPublisher = $auth->createPermission('auth/quizpublisher/create');
		$viewQuizPublisher = $auth->createPermission('auth/quizpublisher/view');
		$updateQuizPublisher = $auth->createPermission('auth/quizpublisher/update');
		$deleteQuizPublisher = $auth->createPermission('auth/quizpublisher/delete');
		
		$indexQuestionCategories = $auth->createPermission('auth/questioncategories/index');
		$createQuestionCategories = $auth->createPermission('auth/questioncategories/create');
		$viewQuestionCategories = $auth->createPermission('auth/questioncategories/view');
		$updateQuestionCategories = $auth->createPermission('auth/questioncategories/update');
		$deleteQuestionCategories = $auth->createPermission('auth/questioncategories/delete');
		
		$indexQuestion = $auth->createPermission('auth/question/index');
		$createQuestion = $auth->createPermission('auth/question/create');
		$viewQuestion = $auth->createPermission('auth/question/view');
		$updateQuestion = $auth->createPermission('auth/question/update');
		$deleteQuestion = $auth->createPermission('auth/question/delete');
		
		
		// add "author" role and give this role the "createPost" permission
        $author = $auth->createRole('author');
        $auth->add($author);
        
		$auth->addChild($author, $indexEmp);
		$auth->addChild($author, $createEmp);
		$auth->addChild($author, $viewEmp);
		
		$auth->addChild($author, $indexMyQuiz);
		$auth->addChild($author, $createMyQuiz);
		$auth->addChild($author, $viewMyQuiz);
		
		$auth->addChild($author, $indexQuizManager);
		$auth->addChild($author, $createQuizManager);
		$auth->addChild($author, $viewQuizManager);
		
		$auth->addChild($author, $indexQuizPublisher);
		$auth->addChild($author, $createQuizPublisher);
		$auth->addChild($author, $viewQuizPublisher);
		
		$auth->addChild($author, $indexQuestionCategories);
		$auth->addChild($author, $createQuestionCategories);
		$auth->addChild($author, $viewQuestionCategories);
		
		$auth->addChild($author, $indexQuestion);
		$auth->addChild($author, $createQuestion);
		$auth->addChild($author, $viewQuestion);
		


        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $author);
		$auth->addChild($admin, $updateEmp);
		$auth->addChild($admin, $deleteEmp);
		
		$auth->addChild($admin, $updateMyQuiz);
		$auth->addChild($admin, $deleteMyQuiz);
		
		$auth->addChild($admin, $updateQuizManager);
		$auth->addChild($admin, $deleteQuizManager);
		
		$auth->addChild($admin, $updateQuizPublisher);
		$auth->addChild($admin, $deleteQuizPublisher);
		
		$auth->addChild($admin, $updateQuestionCategories);
		$auth->addChild($admin, $deleteQuestionCategories);
		
		$auth->addChild($admin, $updateQuestion);
		$auth->addChild($admin, $deleteQuestion);
    }
	
	//Create permission
	 public function actionCreate_permission()
    {
		$auth = Yii::$app->authManager;
		$auth = new DbManager;

        // add "indexEmp" permission
        $indexEmp = $auth->createPermission('auth/emp/index');
        $indexEmp->description = 'Index';
        $auth->add($indexEmp);
		
		// add "indexMyQuiz" permission
        $indexMyQuiz = $auth->createPermission('auth/myquiz/index');
        $indexMyQuiz->description = 'Index';
        $auth->add($indexMyQuiz);
		
        // add "indexQuizManager" permission
        $indexQuizManager = $auth->createPermission('auth/quizmanager/index');
        $indexQuizManager->description = 'Index';
        $auth->add($indexQuizManager);
		
        // add "indexQuizPublisher" permission
        $indexQuizPublisher = $auth->createPermission('auth/quizpublisher/index');
        $indexQuizPublisher->description = 'Index';
        $auth->add($indexQuizPublisher);
		
        // add "indexQuestionCategories" permission
        $indexQuestionCategories = $auth->createPermission('auth/questioncategories/index');
        $indexQuestionCategories->description = 'Index';
        $auth->add($indexQuestionCategories);
		
        // add "indexQuestion" permission
        $indexQuestion = $auth->createPermission('auth/question/index');
        $indexQuestion->description = 'Index';
        $auth->add($indexQuestion);
		
		// add "createEmp" permission
        $createEmp = $auth->createPermission('auth/emp/create');
        $createEmp->description = 'Create';
        $auth->add($createEmp);
		
		// add "createMyQuiz" permission
        $createMyQuiz = $auth->createPermission('auth/myquiz/create');
        $createMyQuiz->description = 'Create';
        $auth->add($createMyQuiz);
		
		// add "createQuizManager" permission
        $createQuizManager = $auth->createPermission('auth/quizmanager/create');
        $createQuizManager->description = 'Create';
        $auth->add($createQuizManager);
		
		// add "createQuizPublisher" permission
        $createQuizPublisher = $auth->createPermission('auth/quizpublisher/create');
        $createQuizPublisher->description = 'Create';
        $auth->add($createQuizPublisher);
		
		// add "createQuestionCategories" permission
        $createQuestionCategories = $auth->createPermission('auth/questioncategories/create');
        $createQuestionCategories->description = 'Create';
        $auth->add($createQuestionCategories);
		
		// add "createQuestion" permission
        $createQuestion = $auth->createPermission('auth/question/create');
        $createQuestion->description = 'Create';
        $auth->add($createQuestion);
		
		// add "updateEmp" permission
        $updateEmp = $auth->createPermission('auth/emp/update');
        $updateEmp->description = 'Update';
        $auth->add($updateEmp);
		
		// add "updateMyQuiz" permission
        $updateMyQuiz = $auth->createPermission('auth/myquiz/update');
        $updateMyQuiz->description = 'Update';
        $auth->add($updateMyQuiz);
		
		// add "updateQuizManager" permission
        $updateQuizManager = $auth->createPermission('auth/quizmanager/update');
        $updateQuizManager->description = 'Update';
        $auth->add($updateQuizManager);
		
		// add "updateQuizPublisher" permission
        $updateQuizPublisher = $auth->createPermission('auth/quizpublisher/update');
        $updateQuizPublisher->description = 'Update';
        $auth->add($updateQuizPublisher);
		
		// add "updateQuestionCategories" permission
        $updateQuestionCategories = $auth->createPermission('auth/questioncategories/update');
        $updateQuestionCategories->description = 'Update';
        $auth->add($updateQuestionCategories);
		
		
		// add "updateQuestion" permission
        $updateQuestion = $auth->createPermission('auth/question/update');
        $updateQuestion->description = 'Update';
        $auth->add($updateQuestion);


		// add "viewEmp" permission
        $viewEmp = $auth->createPermission('auth/emp/view');
        $viewEmp->description = 'View';
        $auth->add($viewEmp);
		
		// add "viewMyQuiz" permission
        $viewMyQuiz = $auth->createPermission('auth/myquiz/view');
        $viewMyQuiz->description = 'View';
        $auth->add($viewMyQuiz);

		// add "viewQuizManager" permission
        $viewQuizManager = $auth->createPermission('auth/quizmanager/view');
        $viewQuizManager->description = 'View';
        $auth->add($viewQuizManager);

		
		// add "viewQuizPublisher" permission
        $viewQuizPublisher = $auth->createPermission('auth/quizpublisher/view');
        $viewQuizPublisher->description = 'View';
        $auth->add($viewQuizPublisher);
		
		// add "viewQuestionCategories" permission
        $viewQuestionCategories = $auth->createPermission('auth/questioncategories/view');
        $viewQuestionCategories->description = 'View';
        $auth->add($viewQuestionCategories);
		
		// add "viewQuestion" permission
        $viewQuestion = $auth->createPermission('auth/question/view');
        $viewQuestion->description = 'View';
        $auth->add($viewQuestion);


		// add "deleteEmp" permission
        $deleteEmp = $auth->createPermission('auth/emp/delete');
        $deleteEmp->description = 'Delete';
        $auth->add($deleteEmp);
		
		// add "deleteMyQuiz" permission
        $deleteMyQuiz = $auth->createPermission('auth/myquiz/delete');
        $deleteMyQuiz->description = 'Delete';
        $auth->add($deleteMyQuiz);
		
		// add "deleteQuizManager" permission
        $deleteQuizManager = $auth->createPermission('auth/quizmanager/delete');
        $deleteQuizManager->description = 'Delete';
        $auth->add($deleteQuizManager);
		
		// add "deleteQuizPublisher" permission
        $deleteQuizPublisher = $auth->createPermission('auth/quizpublisher/delete');
        $deleteQuizPublisher->description = 'Delete';
        $auth->add($deleteQuizPublisher);
		
		// add "deleteQuestionCategories" permission
        $deleteQuestionCategories = $auth->createPermission('auth/questioncategories/delete');
        $deleteQuestionCategories->description = 'Delete';
        $auth->add($deleteQuestionCategories);
		
		// add "deleteQuestion" permission
        $deleteQuestion = $auth->createPermission('auth/question/delete');
        $deleteQuestion->description = 'Delete';
        $auth->add($deleteQuestion);
    }
  /**
     * Lists all AuthItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AuthItem::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AuthItem model.
     * @param string $id
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
     * Creates a new AuthItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AuthItem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->name]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AuthItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->name]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AuthItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AuthItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return AuthItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AuthItem::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
