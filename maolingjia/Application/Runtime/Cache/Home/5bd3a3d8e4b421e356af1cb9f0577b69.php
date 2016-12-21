<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="http://m.sui.taobao.org/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <link rel="stylesheet" href="http://g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="http://g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
    <link href="/maolingjia/Public/home/css/category.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="page-group">
        <div class="page">
            <!-- 标题栏 -->
            <header class="bar bar-nav" >
                <a class="icon icon-left pull-left open-panel" href="#" external onclick="javascript:history.back(-1);"></a>
                <h1 class="title" >鲜花定制</h1>
                <a class="button button-link button-nav pull-right" href="#">
                <span class="icon icon-menu open-panel" data-panel='#panel-left-demo' ></span>
              </a>
            </header>
            <!-- Left Panel with Reveal effect -->
          <div class="panel panel-right panel-cover " id='panel-left-demo' >
            <div class="content-block">
              <hr/>
              <p><a href="/maolingjia/index.php/Home/Index/index" external >门店首页</a></p>
              <hr/>
              <p><a href="#" class="close-panel" >关闭</a></p>
              <hr/>
            </div>
            <div class="list-block">
              <!-- .... -->
            </div>
          </div>
            <div class="content">
               
                                <div class="tabs">
                                    <div id="tab1" class="tab active">
                                        <div id="lib_Tab1_sx" class="lib_tabborder_sx">
                                            <div class="lib_Menubox_sx ">
                                            <ul>
                                              <li id="one1" onclick="setTab('one',1,3)" class="hover">生日鲜花</li>
                                              <li id="one2" onclick="setTab('one',2,3)" >友情鲜花</li>
                                              <li id="one3" onclick="setTab('one',3,3)">爱情鲜花</li>
                                            </ul>
                                            </div>
                                             <div class="lib_Contentbox_sx "> 
                                              <div id="con_one_1" >
                                                  <div class="content-block-title">生日鲜花</div>
                                        <div class="list-block media-list">
                                            <ul>
                                    <hr/>
                                                <?php if(is_array($result1)): $i = 0; $__LIST__ = $result1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/<?php echo ($vo["photo"]); ?>" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title"><?php echo ($vo["name"]); ?></div>
                                                            </div>
                                                            <div class="item-subtitle">已售<?php echo ($vo["number"]); ?>份</div>
                                                            <div class="item-text" >￥<?php echo ($vo["xprice"]); ?><br/><span class="small"  >￥<?php echo ($vo["yprice"]); ?></span>
                                                            <div class="lt-rt">
                                                                <span class="price"><?php echo ($vo["xprice"]); ?></span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <hr/><?php endforeach; endif; else: echo "" ;endif; ?>
                                               <!-- <li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/home/images/cake/1.jpg" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title">水果蛋糕</div>
                                                            </div>
                                                            <div class="item-subtitle">已售325份</div>
                                                            <div class="item-text" >￥16<br/><span class="small"  >￥16</span>
                                                            <div class="lt-rt">
                                                                <span class="price">16</span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <hr/>
                                                <li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/home/images/cake/1.jpg" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title">水果蛋糕</div>
                                                            </div>
                                                            <div class="item-subtitle">已售325份</div>
                                                            <div class="item-text" >￥16<br/><span class="small"  >￥16</span>
                                                            <div class="lt-rt">
                                                                <span class="price">16</span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <hr/>
                                                <li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/home/images/cake/1.jpg" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title">水果蛋糕</div>
                                                            </div>
                                                            <div class="item-subtitle">已售325份</div>
                                                            <div class="item-text" >￥16<br/><span class="small"  >￥16</span>
                                                            <div class="lt-rt">
                                                                <span class="price">16</span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>-->
                                            </ul>
                                        </div>
                                              </div>
                                              <div id="con_one_2" style="display:none">
                                                  <div class="content-block-title">友情鲜花</div>
                                        <div class="list-block media-list">
                                            <ul>
                                    <hr/>
                                                <?php if(is_array($result2)): $i = 0; $__LIST__ = $result2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/<?php echo ($vo["photo"]); ?>" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title"><?php echo ($vo["name"]); ?></div>
                                                            </div>
                                                            <div class="item-subtitle">已售<?php echo ($vo["number"]); ?>份</div>
                                                            <div class="item-text" >￥<?php echo ($vo["xprice"]); ?><br/><span class="small"  >￥<?php echo ($vo["yprice"]); ?></span>
                                                            <div class="lt-rt">
                                                                <span class="price"><?php echo ($vo["xprice"]); ?></span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <hr/><?php endforeach; endif; else: echo "" ;endif; ?>
                                              <!--  <li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/home/images/cake/2.jpg" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title">巧克力蛋糕</div>
                                                            </div>
                                                            <div class="item-subtitle">已售325份</div>
                                                            <div class="item-text" >￥16<br/><span class="small"  >￥16</span>
                                                            <div class="lt-rt">
                                                                <span class="price">16</span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <hr/>
                                                <li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/home/images/cake/2.jpg" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title">巧克力蛋糕</div>
                                                            </div>
                                                            <div class="item-subtitle">已售325份</div>
                                                            <div class="item-text" >￥16<br/><span class="small"  >￥16</span>
                                                            <div class="lt-rt">
                                                                <span class="price">16</span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <hr/>
                                                <li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/home/images/cake/2.jpg" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title">巧克力蛋糕</div>
                                                            </div>
                                                            <div class="item-subtitle">已售325份</div>
                                                            <div class="item-text" >￥16<br/><span class="small"  >￥16</span>
                                                            <div class="lt-rt">
                                                                <span class="price">16</span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>-->
                                            </ul>
                                        </div>
                                              </div>
                                              <div id="con_one_3" style="display:none">
                                                  <div class="content-block-title">爱情鲜花</div>
                                        <div class="list-block media-list">
                                            <ul>
                                    <hr/>
                                                <?php if(is_array($result3)): $i = 0; $__LIST__ = $result3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/<?php echo ($vo["photo"]); ?>" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title"><?php echo ($vo["name"]); ?></div>
                                                            </div>
                                                            <div class="item-subtitle">已售<?php echo ($vo["number"]); ?>份</div>
                                                            <div class="item-text" >￥<?php echo ($vo["xprice"]); ?><br/><span class="small"  >￥<?php echo ($vo["yprice"]); ?></span>
                                                            <div class="lt-rt">
                                                                <span class="price"><?php echo ($vo["xprice"]); ?></span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <hr/><?php endforeach; endif; else: echo "" ;endif; ?>
                                              <!--  <li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/home/images/cake/3.jpg" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title">冰激凌蛋糕</div>
                                                            </div>
                                                            <div class="item-subtitle">已售325份</div>
                                                            <div class="item-text" >￥16<br/><span class="small"  >￥16</span>
                                                            <div class="lt-rt">
                                                                <span class="price">16</span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <hr/>
                                                <li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/home/images/cake/3.jpg" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title">冰激凌蛋糕</div>
                                                            </div>
                                                            <div class="item-subtitle">已售325份</div>
                                                            <div class="item-text" >￥16<br/><span class="small"  >￥16</span>
                                                            <div class="lt-rt">
                                                                <span class="price">16</span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <hr/>
                                                <li>
                                                    <a href="#" class="item-content" external>
                                                        <div class="item-media"><img src="/maolingjia/Public/home/images/cake/3.jpg" ></div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title">冰激凌蛋糕</div>
                                                            </div>
                                                            <div class="item-subtitle">已售325份</div>
                                                            <div class="item-text" >￥16<br/><span class="small"  >￥16</span>
                                                            <div class="lt-rt">
                                                                <span class="price">16</span>
                                                                <input type="button" class="minus"  value="-">
                                                                <input type="text" class="result" value="0">
                                                                <input type="button" class="add" value="+">
                                                            </div>
                                                            </div>
                                                            <div class="item-title-row" style="float: left;font-size: 15px">
                                                                    <img src="/maolingjia/Public/home/images/xian.png" style="width:15px; height: 15px">限时抢购
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>-->
                                            </ul>
                                        </div>
                                              </div>

                                              <div class="footer" id="bb">
                                                <div class="ft-lt">
                                                    <p>合计:<label id="total"></label>元</p>
                                                </div>
                                                <div class="ft-rt">
                                                    <p><a href="/maolingjia/index.php/Home/Category/buy" external>去结算</a></p>
                                                </div>
                                            </div>

                                             </div>
                                            </div>
                                      </div>
                                
        
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- 其他的单个page内联页（如果有） -->
        <div class="page">...</div>
    </div>

    <script type='text/javascript' src='http://g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='http://g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='http://g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script type="text/javascript" src="/maolingjia/Public/home/js/category.js" charset="utf-8"></script>
    <script type="text/javascript" src="/maolingjia/Public/home/js/category2.js" charset="utf-8"></script>
  </body>
</html>