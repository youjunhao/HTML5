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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">蛋糕管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/maolingjia/index.php/Admin/Cake/create"><i class="icon-font"></i>新增蛋糕</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>名称</th>
                            <th>已售数量</th>
                            <th>原价</th>
                            <th>现价</th>
                            <th>图片</th>
                        </tr>
                        <?php if(is_array($cake)): $i = 0; $__LIST__ = $cake;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($vo["id"]); ?>" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="<?php echo ($vo["id"]); ?>" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="<?php echo ($vo["id"]); ?>" type="text">
                            </td>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["number"]); ?></td>
                            <td><?php echo ($vo["yprice"]); ?></td>
                            <td><?php echo ($vo["xprice"]); ?></td>
                            <td>
                                <a class="link-update" href="<?php echo U('Admin/Cake/edit');?>/id/<?php echo ($vo["id"]); ?>">修改</a>
                                <a class="link-del" href="<?php echo U('Admin/Cake/destory');?>/id/<?php echo ($vo["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
    <!--/main-->
</div>
</body>
</html>