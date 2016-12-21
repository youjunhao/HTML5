<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
    <title>购物车</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="http://g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="http://g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
    // 
    <style type="text/css">
        *{
            font-family: "楷体";
            font-size: 20px;
        }
        .bar .icon{
            color: #3C3C3C;
        }
        .bar-nav{
            background-color: #FF8C00;
        }
    </style>
    </head>

<!--/sidebar-->
    <body>
        <header class="bar bar-nav" >
                <a class="icon icon-left pull-left open-panel" href="#" external onclick="javascript:history.back(-1);"></a>
                <h1 class="title" >支付界面</h1>
            </header>
    <div class="content">
             <form action="<?php echo U('Home/Category/tijiao');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
              <div class="list-block">

                <ul>
                  <!-- Text inputs -->
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-name"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">姓名</div>
                        <div class="item-input">
                          <input type="text" placeholder="Your name" name="name">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-email"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">联系方式</div>
                        <div class="item-input">
                          <input type="number" placeholder="Phone number" name="tel">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="align-top">
                    <div class="item-content">
                      <div class="item-media"><i class="icon icon-form-comment"></i></div>
                      <div class="item-inner">
                        <div class="item-title label">地址</div>
                        <div class="item-input">
                          <textarea placeholder="Address" name="address"></textarea>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><input class="btn btn-primary btn6 mr10" value="取消" type="submit" style="width: 8rem; height: 2.4rem;border-radius:7px;background-color: #F6383A; color: white;" onclick="javascript:history.back(-1);"></div>
                  <div class="col-50"><input class="btn btn-primary btn6 mr10" value="提交" type="submit" style="width: 8rem; height: 2.4rem;border-radius:7px;background-color: #4CDA64; color: white;"></div>
                </div>
              </div>
            </div>
            </form>
    </body>   
</html>