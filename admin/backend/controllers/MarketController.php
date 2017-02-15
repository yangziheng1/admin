<?php
namespace backend\controllers;

use yii\web\Controller;
class MarketController extends Controller{
    //市场与销售添加页面
    public function actionIndex(){
        return $this->renderPartial('index');
    }
    //市场与销售显示页面
    public function actionShow(){
        return $this->renderPartial('show');
    }
}