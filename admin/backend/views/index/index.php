<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="<?php echo $data['img'] ?>" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
    </div>
    <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="?r=login/out"><span class="icon-power-off"></span> 退出登录</a><a style="margin-left: 200px">欢迎<span style="color: red"><?php echo $data['name'] ?></span>管理员登录</a></div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>管理员管理</h2>
    <ul style="display:block">
        <li><a href="?r=admin/index" target="right"><span class="icon-caret-right"></span>管理员添加</a></li>
        <li><a href="?r=admin/show" target="right"><span class="icon-caret-right"></span>管理员列表</a></li>
      
    </ul>
    <h2><span class="icon-pencil-square-o"></span>公司管理</h2>
    <ul>
        <li><a href="?r=firm/usershow" target="right"><span class="icon-caret-right"></span>用户列表</a></li>
        <li><a href="?r=firm/firmshow" target="right"><span class="icon-caret-right"></span>公司信息</a></li>
        <li><a href="?r=firm/recruitshow" target="right"><span class="icon-caret-right"></span>招聘列表</a></li>
    </ul>
    <h2><span class="icon-share-square-o"></span>求职者</h2>
    <ul>
        <li><a href="?r=user/show" target="right"><span class="icon-caret-right"></span>求职者列表</a></li>
    </ul>
    <h2><span class="icon-check-square-o"></span>技术</h2>
    <ul>
        <li><a href="?r=skill/index" target="right"><span class="icon-caret-right"></span>技术添加</a></li>
        <li><a href="?r=skill/show" target="right"><span class="icon-caret-right"></span>技术列表</a></li>
    </ul>
    <h2><span class="icon-check-square-o"></span>产品</h2>
    <ul>
        <li><a href="?r=goods/index" target="right"><span class="icon-caret-right"></span>产品添加</a></li>
        <li><a href="?r=goods/show" target="right"><span class="icon-caret-right"></span>产品列表</a></li>
    </ul>
    <h2><span class="icon-check-square-o"></span>设计</h2>
    <ul>
        <li><a href="?r=plan/index" target="right"><span class="icon-caret-right"></span>技术添加</a></li>
        <li><a href="?r=plan/show" target="right"><span class="icon-caret-right"></span>技术列表</a></li>
    </ul>
    <h2><span class="icon-check-square-o"></span>运营</h2>
    <ul>
        <li><a href="?r=operate/index" target="right"><span class="icon-caret-right"></span>运营添加</a></li>
        <li><a href="?r=operate/show" target="right"><span class="icon-caret-right"></span>运营列表</a></li>
    </ul>
    <h2><span class="icon-check-square-o"></span>市场与销售</h2>
    <ul>
        <li><a href="?r=market/index" target="right"><span class="icon-caret-right"></span>市场与销售添加</a></li>
        <li><a href="?r=market/show" target="right"><span class="icon-caret-right"></span>市场与销售列表</a></li>
    </ul>
    <h2><span class="icon-check-square-o"></span>职能</h2>
    <ul>
        <li><a href="?r=function/index" target="right"><span class="icon-caret-right"></span>职能添加</a></li>
        <li><a href="?r=function/show" target="right"><span class="icon-caret-right"></span>职能列表</a></li>
    </ul>
    <h2><span class="icon-check-square-o"></span>金融</h2>
    <ul>
        <li><a href="?r=finance/index" target="right"><span class="icon-caret-right"></span>金融添加</a></li>
        <li><a href="?r=finance/show" target="right"><span class="icon-caret-right"></span>金融列表</a></li>
    </ul>
</div>
<script type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
<ul class="bread">
    <li><a href="{:U('Index/info')}" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">网站信息</a></li>
    <li><b>当前语言：</b><span style="color:red;">中文</php></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
    <iframe scrolling="auto" name="right" width="100%" height="100%"><img src=""></iframe>
</div>
</body>
</html>