<?php
namespace backend\controllers;

use yii\web\Controller;
class FunctionController extends Controller{
    //职能添加页面
    public function actionIndex(){
        return $this->renderPartial('index');
    }
    //职能显示页面
    public function actionShow(){
        return $this->renderPartial('show');
    }
}