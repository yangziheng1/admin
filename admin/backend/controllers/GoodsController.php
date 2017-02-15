<?php
namespace backend\controllers;

use yii\web\Controller;
class GoodsController extends Controller{
    //产品添加页面
    public function actionIndex(){
        return $this->renderPartial('index');
    }
    //产品显示页面
    public function actionShow(){
        return $this->renderPartial('show');
    }
}