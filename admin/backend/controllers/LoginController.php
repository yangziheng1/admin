<?php
namespace backend\controllers;

use yii\web\Controller;
use common\library\ValidateCode;
use backend\models\Admin;
class LoginController extends Controller{
    public $enableCsrfValidation=false;
    //登陆页面
    public function actionIndex(){
        return $this->renderPartial('login');
    }
    public function actionCreatecapath(){
        session_start();
        $_vc = new ValidateCode();
        $_vc->doimg();
        $_SESSION['authnum_session'] = $_vc->getCode();
    }
    public function actionPro(){
        session_start();
        $name=\yii::$app->request->post('name');
        $pwd=\yii::$app->request->post('pwd');
        $code=\yii::$app->request->post('code');
        $res=Admin::find()->where(['name'=>"$name"])->one();
        if($res){
            if($pwd==$res['pwd']){
                if($_SESSION['authnum_session']==$code){
                    setcookie("name","$name");
                    echo "<script>location.href='?r=index/index';</script>";
                }else{
                    echo "<script>alert('验证码不对');history.go(-1);</script>";
                }
            }else{
                echo "<script>alert('密码不对');history.go(-1);</script>";
            }
        }else{
            echo "<script>alert('账号不对');history.go(-1);</script>";
        }
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