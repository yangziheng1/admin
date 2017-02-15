<?php
namespace backend\controllers;

use yii\web\Controller;
class FinanceController extends Controller{
    //金融添加页面
    public function actionIndex(){
        return $this->renderPartial('index');
    }
    //金融显示页面
    public function actionShow(){
        return $this->renderPartial('show');
    }
}