<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>酒店后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Hotelms/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Hotelms/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/Hotelms/Public/admin/js/libs/modernizr.min.js"></script>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allRooms.html">客房管理</a><span class="crumb-step">&gt;</span><span>客房管理修改</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/Drink/update');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>饮品名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="name" size="50" value="<?php echo ($drink["name"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>已售数量：</th>
                                <td>
                                    <input class="common-text required" id="title" name="number" size="50" value="<?php echo ($drink["number"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>原价：</th>
                                <td>
                                    <input class="common-text required" id="title" name="yprice" size="50" value="<?php echo ($drink["yprice"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>现价：</th>
                                <td>
                                    <input class="common-text required" id="title" name="xprice" size="50" value="<?php echo ($drink["xprice"]); ?>" type="text">
                                </td>
                            </tr>            
                            <tr>
                                <th><i class="require-red">*</i>饮品图片：</th>
                                <td>
                                    <img src="/Hotelms/Public/<?php echo ($drink["photo"]); ?>" /><input name="photo" id="" type="file">
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input type="hidden" value="<?php echo ($drink["id"]); ?>" name="id" />
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
    <!--/main-->
</div>
</body>
</html>