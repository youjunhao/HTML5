<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>支付</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="http://m.sui.taobao.org/favicon.ico">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="http://g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
        <link rel="stylesheet" href="http://g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
        <script type="text/javascript" src="/maolingjia/Public/home/js/jquery-1.8.3.min.js"></script>

        <style type="text/css">
            .content{width:80%;margin:200px auto;}
            .hide_box{z-index:999;filter:alpha(opacity=50);background:#666;opacity: 0.5;-moz-opacity: 0.5;left:0;top:0;height:99%;width:100%;position:fixed;display:none;}
            .shang_box{width:95%;height:20rem;padding:10px;background-color:#fff;border-radius:10px;position:fixed;z-index:1000;left:77%;top:50%;margin-left:-280px;margin-top:-280px;border:1px dotted #dedede;display:none;}
            .shang_box img{border:none;border-width:0;}
            .dashang{display:block;width:100px;margin:5px auto;height:30px;line-height:13px;padding:10px;background-color:#E74851;color:#fff;text-align:center;text-decoration:none;border-radius:10px;font-weight:bold;font-size:18px;transition: all 0.3s;}
            .dashang:hover{opacity:0.8;padding:15px;font-size:18px;}
            .shang_close{float:right;display:inline-block;}
            .shang_logo{display:block;text-align:center;margin:20px auto;}
            .shang_tit{width: 100%;height: 75px;text-align: center;line-height: 66px;color: #a3a3a3;font-size: 16px;;font-family: 'Microsoft YaHei';margin-top: 7px;margin-right:2px;}
            .shang_tit p{color:#a3a3a3;text-align:center;font-size:16px;}
            .shang_payimg{width:140px;padding:10px;/*border:6px solid #EA5F00;**/margin:0 auto;border-radius:3px;height:140px;}
            .shang_payimg img{display:block;text-align:center;width:140px;height:140px; }
            .pay_explain{text-align:center;margin:10px auto;font-size:12px;color:#545454;}
            .radiobox{width: 16px;height: 16px;background: url('/maolingjia/Public/home/images/radio2.jpg');display: block;float: left;margin-top: 5px;margin-right: 14px;}
            .checked .radiobox{background:url('/maolingjia/Public/home/images/radio1.jpg');}
            .shang_payselect{text-align:center;margin:0 auto;margin-top:40px;cursor:pointer;height:60px;width:280px;}
            .shang_payselect .pay_item{display:inline-block;margin-right:10px;float:left;}
            .shang_info{clear:both;}
            .shang_info p,.shang_info a{color:#C3C3C3;text-align:center;font-size:12px;text-decoration:none;line-height:2em;}
            .bar-nav{
            background-color: #FF8C00;
        }
        *{
            font-family: "楷体";
            font-size: 20px;
        }
        </style>
    </head>

    <body>
        <header class="bar bar-nav" >
                <a class="icon icon-left pull-left open-panel" href="#" external onclick="javascript:history.back(-1);"></a>
                <h1 class="title" >支付界面</h1>
            </header>
        <div class="content">
            <p><a href="javascript:void(0)" onclick="dashangToggle()" class="dashang" title="支付">支付</a></p>
            <div class="hide_box"></div>
            <div class="shang_box">
                <a class="shang_close" href="javascript:void(0)" onclick="dashangToggle()" title="关闭"><img src="/maolingjia/Public/home/images/close.jpg" alt="取消" /></a>
                <div class="shang_tit">
                    <p>感谢您的支持，我会继续努力的!</p>
                </div>
                <div class="shang_payimg">
                    <img src="/maolingjia/Public/home/images/alipayimg.jpg" alt="扫码支持" title="扫一扫" />
                </div>
                <div class="pay_explain"></div>
                <div class="shang_payselect">
                    <div class="pay_item checked" data-id="alipay">
                        <span class="radiobox"></span>
                        <span class="pay_logo"><img src="/maolingjia/Public/home/images/alipay.jpg" alt="支付宝" /></span>
                    </div>
                    <div class="pay_item" data-id="weipay">
                        <span class="radiobox"></span>
                        <span class="pay_logo"><img src="/maolingjia/Public/home/images/wechat.jpg" alt="微信" /></span>
                    </div>
                </div>
                <div class="shang_info">
                    <p>打开<span id="shang_pay_txt">支付宝</span>扫一扫，即可进行扫码支付哦</p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $(".pay_item").click(function() {
                    $(this).addClass('checked').siblings('.pay_item').removeClass('checked');
                    var dataid = $(this).attr('data-id');
                    $(".shang_payimg img").attr("src", "/maolingjia/Public/home/images/" + dataid + "img.jpg");
                    $("#shang_pay_txt").text(dataid == "alipay" ? "支付宝" : "微信");
                });
            });
            function dashangToggle() {
                $(".hide_box").fadeToggle();
                $(".shang_box").fadeToggle();
            }
        </script>
    </body>
</html>