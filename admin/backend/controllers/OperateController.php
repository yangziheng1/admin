<?php
namespace backend\controllers;

use yii\web\Controller;
class OperateController extends Controller{
    //运营添加页面
    public function actionIndex(){
        return $this->renderPartial('index');
    }
    //运营显示页面
    public function actionShow(){
        return $this->renderPartial('show');
    }
}