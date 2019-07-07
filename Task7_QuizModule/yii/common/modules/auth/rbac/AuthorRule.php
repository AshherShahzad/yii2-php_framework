<?php
namespace common\modules\auth\rbac;

use Yii;
use yii\rbac\Rule;
use yii\rbac\DbManager;
use yii\rbac\Permission;


/**
 * Checks if authorID matches user passed via params
 */
class AuthorRule extends Rule
{
    public $name = 'isAuthor';

    /**
     * @param string|int $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return bool a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
		//echo Yii::$app->db->tablePrefix.str_replace(array('{{','}}'),'',$this->tableName());
//echo Yii::$app->controller->id;
#echo $item->name;
#exit;
        if(isset($params['model'])){
			//Directly specify the model you plan to use via param
			$model = $params['model'];
			
		}
		else if($item->name=='updateOwnEmp'){
			//Use the cintroller findModel method to get the model - this is what executes via the behaviour/rules
			$id = \Yii::$app->request->get('id');//Note, this is an assumption on your url structure.
			$model = \Yii::$app->controller->findUserModel($id);	//Note, this only works if you change findModel to be a public
		}
		else if($item->name=='updateOwnMyQuiz'){
			//Use the cintroller findModel method to get the model - this is what executes via the behaviour/rules
			$Quiz = \Yii::$app->request->get('Quiz');//Note, this is an assumption on your url structure.
			$User = \Yii::$app->request->get('User');//Note, this is an assumption on your url structure.
			$QuizQuestions = \Yii::$app->request->get('QuizQuestions');//Note, this is an assumption on your url structure.
			$model = \Yii::$app->controller->findModel($Quiz, $User, $QuizQuestions);
		}
		else if($item->name=='updateOwnQuizManager'){
			//Use the cintroller findModel method to get the model - this is what executes via the behaviour/rules
			$id = \Yii::$app->request->get('id');//Note, this is an assumption on your url structure.
			$model = \Yii::$app->controller->findModel($id);	//Note, this only works if you change findModel to be a public
			return $model->createdby == $user;
		}
		else if($item->name=='updateOwnQuizPublisher'){
			//Use the cintroller findModel method to get the model - this is what executes via the behaviour/rules
			$id = \Yii::$app->request->get('id');//Note, this is an assumption on your url structure.
			$model = \Yii::$app->controller->findModel($id);	//Note, this only works if you change findModel to be a public
			return $model->id == $user;
		}
		else if($item->name=='updateOwnQuestionCategories'){
			//Use the cintroller findModel method to get the model - this is what executes via the behaviour/rules
			$id = \Yii::$app->request->get('id');//Note, this is an assumption on your url structure.
			$model = \Yii::$app->controller->findModel($id);	//Note, this only works if you change findModel to be a public
		}
		else if($item->name=='updateOwnQuestion'){
			//Use the cintroller findModel method to get the model - this is what executes via the behaviour/rules
			$id = \Yii::$app->request->get('id');//Note, this is an assumption on your url structure.
			$model = \Yii::$app->controller->findModel($id);	//Note, this only works if you change findModel to be a public
		}
		else{}
		
		return $model->createdBy == $user;
		
    }
}
?>