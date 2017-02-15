<?php
namespace backend\controllers;

use yii\web\Controller;
class PlanController extends Controller{
    //设计添加页面
    public function actionIndex(){
        return $this->renderPartial('index');
    }
    //设计显示页面
    public function actionShow(){
        return $this->renderPartial('show');
    }
}