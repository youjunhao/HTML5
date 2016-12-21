<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>猫玲家后台管理</title>
    <link rel="stylesheet" type="text/css" href="/maolingjia/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/maolingjia/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/maolingjia/Public/admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="<?php echo U('Admin/index/index');?>" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Admin/index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Home/index/index');?>" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>生日蛋糕管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/cake/index');?>"><i class="icon-font">&#xe008;</i>所有蛋糕
                        <li><a href="<?php echo U('Admin/cake/create');?>"><i class="icon-font">&#xe005;</i>添加蛋糕</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>甜品饮料管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/drink/index');?>"><i class="icon-font">&#xe017;</i>所有甜品饮料<li><a href="<?php echo U('Admin/drink/create');?>"><i class="icon-font">&#xe037;</i>添加甜品饮料</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>鲜花定制管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/flower/index');?>"><i class="icon-font">&#xe017;</i>所有鲜花<li><a href="<?php echo U('Admin/flower/create');?>"><i class="icon-font">&#xe037;</i>添加鲜花</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>美味米饭管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/rice/index');?>"><i class="icon-font">&#xe017;</i>所有米饭<li><a href="<?php echo U('Admin/rice/create');?>"><i class="icon-font">&#xe037;</i>添加米饭</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎进入猫玲家管理后台</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="<?php echo U('Admin/room/index');?>"><i class="icon-font">&#xe001;</i>所有商品</a>
                    <a href="<?php echo U('Admin/category/index');?>"><i class="icon-font">&#xe048;</i>所有商品分类</a>
                    <a href="allNewses.html"><i class="icon-font">&#xe001;</i>所有订单</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>商品状况</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">商品总数</label><span class="res-info">3089</span>
                    </li>
                    <li>
                        <label class="res-lab">当前售出</label><span class="res-info">2388</span>
                    </li>
                    <li>
                        <label class="res-lab">商品余量</label><span class="res-info">701</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info"><?php echo PHP_OS;?></span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">Apache/2.2.21 (Win64) PHP/5.3.10</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info">2016年12月18日 21:08:24</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info">localhost [ 127.0.0.1 ]</span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info">127.0.0.1</span>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    <!--/main-->

    <!--/main-->
</div>
</body>
</html>