<?php
namespace backend\controllers;

use yii\web\Controller;
class AdminController extends Controller{
    //管理员添加
    public function actionIndex(){
        return $this->renderPartial('index');
    }
    //管理员列表
    public function actionShow(){
        return $this->renderPartial('show');
    }
}