<?php
namespace backend\controllers;

use yii\web\Controller;
class FirmController extends Controller{
    //公司用户展示页面
    public function actionUsershow(){
        return $this->renderPartial('usershow');
    }
    //公司信息展示页面
    public function actionFirmshow(){
        return $this->renderPartial('firmshow');
    }
    //招聘列表
    public function actionRecruitshow(){
        return $this->renderPartial('recruitshow');
    }
}