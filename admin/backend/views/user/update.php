<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="body-content">
        <form method="post" class="form-x" action="?r=user/up" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <div class="form-group">
                <div class="label">
                    <label>姓名：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="name" value="<?php echo $data['name'] ?>" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>头像：</label>
                </div>
                <div class="field">
                    <img src="<?php echo $data['img'] ?>" width="50px" height="50px;">
                    更换：<input type="file" name="img">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>电话：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="tel" value="<?php echo $data['tel'] ?>" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>个人介绍：</label>
                </div>
                <div class="field">
                    <input type="text" name="message" value="<?php echo $data['message']?>">
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>邮箱：</label>
                </div>
                <div class="field">
                    <input type="text" name="email" value="<?php echo $data['email'] ?>">
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>工作：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="work" value="<?php echo $data['work']?>" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>密码：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="pwd" value="<?php echo $data['pwd']?>" />
                    <div class="tips"></div>
                </div>
            </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body></html>