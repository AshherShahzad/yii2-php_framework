<?php
namespace common\modules\auth\rbac;

use Yii;
use yii\rbac\Rule;
use yii\rbac\DbManager;
use common\models\User;
use common\modules\auth\models\Myquiz;
use common\modules\auth\models\emp;

/**
 * Checks if authorID matches user passed via params
 */
class AuthorRule extends Rule
{
    public $name = 'isAuthor';

    /**
	list= Yii::app()->db->createCommand('select * from post')->queryAll();


$rs=array();

foreach($list as $item){

    //process each item here

    $rs[]=$item['id'];


}

     * @param string|int $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return bool a value indicating whether the rule permits the role or permission it is associated with.
     */
     public function execute($user, $item, $params)
    {
         if(isset($params['model'])){
			//Directly specify the model you plan to use via param
			$model = $params['model'];
			
		}
		else{
			$id = \Yii::$app->request->get('id');//Note, this is an assumption on your url structure.
			
			$model = \Yii::$app->controller->findUserModel($id);	//Note, this only works if you change findModel to be a public$id = \Yii::$app->request->get('id');//Note, this is an assumption on your url structure.
			
		}
		return $model->createdBy == $user;
    }
		
    }
}
?>