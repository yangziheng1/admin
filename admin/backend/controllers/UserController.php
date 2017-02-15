<?php
namespace backend\controllers;

use yii\web\Controller;
use backend\models\User;
use yii\data\Pagination;
use yii\web\UploadedFile;
class UserController extends Controller{
    public $enableCsrfValidation=false;
    //求职者列表
    public function actionShow(){
        $name=\yii::$app->request->post('keywords');
        $data=User::find()
            ->where(['like','name',"$name"]);
        $countQuery = clone $data;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize'   => 5,
        ]);
        $models = $data->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        foreach ($models as $k=>$v){
            $models[$k]['name']=str_replace($name,"<font color='red'>$name</font>",$v['name']);
        }
        return $this->renderPartial('show',
            [
                'models'=>$models,
                'pages'=>$pages,
                'name'=>$name
            ]
        );
    }
    public function actionDel(){
        $id=\yii::$app->request->get('id');
        $sql="delete from `user` where id='$id'";
        $res=User::findBySql($sql)->createCommand()->query();
        if($res){
            echo "<script>alert('删除成功');location.href='?r=user/show';</script>";
        }
    }
    public function actionUpdate(){

        $id=\yii::$app->request->get('id');
        $data=User::find()->where(['id'=>"$id"])->one();
        return $this->renderPartial('update',['data'=>$data]);
    }
    public function actionUp(){
        $id=\yii::$app->request->post('id');
        $name=\yii::$app->request->post('name');
        $img = UploadedFile::getInstanceByName('img');
        $dir='uploads';//上传目录
        if (!is_dir($dir)){
            mkdir($dir); //目录不存在则创建
        }
        @$username = $dir.'/'.$img->name; //文件名绝对路径
        $res= $img->saveAs($username,true); //保存文件
        $tel=\yii::$app->request->post('tel');
        $education=\yii::$app->request->post('work');
        $year=\yii::$app->request->post('message');
        $email=\yii::$app->request->post('email');
        $pwd=\yii::$app->request->post('pwd');
        if($res){
            $sql="update `user` set `name`='$name',img='$username',tel='$tel',work='$education',`message`='$year',email='$email',pwd='$pwd' where id='$id'";
            $arr=User::findBySql($sql)->createCommand()->query();
            if($arr){
                echo "<script>alert('修改成功');location.href='?r=user/show';</script>";
            }
        }
    }
}