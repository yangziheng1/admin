<?php
namespace backend\controllers;

use yii\web\Controller;
use backend\models\Admin;
/**
 * Site controller
 * 主页
 */

class IndexController extends Controller{
    /**
     * @return string
     * 取消数据验证
     */
    public $enableCsrfValidation = false;
    public function actionIndex(){
        $name=$_COOKIE['name'];
        $data=Admin::find()->where(['name'=>"$name"])->one();
        return $this->renderPartial('index',['data'=>$data]);
    }
    //安全退出
    public function actionOut(){
        //清空所有COOKIE
        foreach($_COOKIE as $key=>$val){
            setcookie($key,"",time()-100);
        }
        $this->redirect('?r=login/index');
    }
}
