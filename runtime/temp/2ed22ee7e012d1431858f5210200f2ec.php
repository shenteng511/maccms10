<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"template/datll_km/html/label/zhibo.html";i:1587817557;s:64:"/www/wwwroot/maccms10/template/datll_km/html/public/include.html";i:1587817535;s:61:"/www/wwwroot/maccms10/template/datll_km/html/public/head.html";i:1587817538;s:61:"/www/wwwroot/maccms10/template/datll_km/html/public/foot.html";i:1587817534;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>电视直播 - <?php echo $maccms['site_name']; ?>_国内领先的在线视频网站·免VIP在线观看无广告高清视频</title>
    <meta name="keywords" content="免费在线电影,<?php echo $maccms['site_name']; ?>,视频网站,免VIP,免广告,高清,高清视频,高清视频观看,VIP会员,在线观看,电影,电视剧,综艺,最新电影,最新电视剧" />
    <meta name="ascription" content="<?php echo $maccms['site_description']; ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />

    <link type="image/vnd.microsoft.icon" href="<?php echo $maccms['path']; ?>favicon.png" rel="shortcut icon" />

    <link href="<?php echo $maccms['path_tpl']; ?>css/app.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo $maccms['path_tpl']; ?>js/jquery.min.js"></script>

    <link href="<?php echo $maccms['path_tpl']; ?>css/swiper.min.css" rel="stylesheet" type="text/css">

    <script src="<?php echo $maccms['path_tpl']; ?>js/swiper.min.js"></script>

    <script src="<?php echo $maccms['path_tpl']; ?>js/iconfont.js"></script>

	<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>","template":"<?php echo $maccms['path_tpl']; ?>"};
$("#ibuffer").attr('src','http://www.baidu.com');
</script>

	<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
</head>
<body>
    <header class="itopbar">
        <div class="container">
            <h1 class="ilogo"><a href="<?php echo $maccms['path']; ?>" title="logo"><img src="<?php echo $maccms['path_tpl']; ?>images/logo.jpg" alt="<?php echo $maccms['site_name']; ?>"><span><?php echo $maccms['site_name']; ?></span></a></h1>
            <nav class="sitenav"><a href="<?php echo $maccms['path']; ?>" <?php if($maccms['aid'] == 1): ?>class="cur"<?php endif; ?>>首页</a><?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?><a href="<?php echo mac_url_topic_index(); ?>" <?php if($maccms['aid'] == 30 or $maccms['aid'] == 31): ?>class="cur"<?php endif; ?>>专题</a><a href="<?php echo mac_url('gbook/index'); ?>" <?php if($maccms['aid'] == 4): ?>class="cur"<?php endif; ?>>求片/留言</a><a href="<?php echo mac_url('label/zhibo'); ?>" <?php if($maccms['aid'] == 7): ?>class="cur"<?php endif; ?>>直播</a></nav>
            <div class="itr">
                <div class="mod">
                    <a href="javascript:;" class="mac_history"><i class="iconfont"></i>看过<span class="caret"></span></a>
                </div>
                <div class="mod"><a href="javascript:;" class="mac_user"><i class="iconfont"></i>会员</a></div>
            </div>
            <span class="searchstart-on"><i class="iconfont"></i></span><span class="searchstart-off"><i class="iconfont"></i></span>
            <form name="formsearch" class="searchform" action="<?php echo mac_url('vod/search'); ?>" method="post" autocomplete="off">
                <input class="ipt" placeholder="输入影片片名或演员名称。" name="wd" type="text" id="wd" required="">
                <input type="submit" id="searchbutton" value="" class="hide"><a href="javascript:" class="ibtn" title="搜索" onClick="$('.searchform').submit();"><i class="iconfont"></i> 搜索</a>
            </form>
        </div>
    </header>
    <div class="icon">
        <div class="container izb">
            <nav class="zb-nav"><a href="javascript:;" class="taba cur">央视频道</a><a href="javascript:;" class="taba">卫视频道</a><a href="javascript:;" class="taba">地方频道</a></nav>
            <div class="zb-con">
                <ul class="zb-list">
                    <li><a href="javascript:;" data-url="http://t.cn/RpFPVsE"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c1.png" /></b><span>CCTV 1</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFPN6v"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c2.png"/></b><span>CCTV 2</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RXQY4TK"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c3.png"/></b><span>CCTV 3</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFPrgx"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c4.png"/></b><span>CCTV 4</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RGXxHnd"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c5.png"/></b><span>CCTV 5</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFhJLn"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c6.png"/></b><span>CCTV 6</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFhhsh"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c7.png"/></b><span>CCTV 7</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFhSzl"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c8.png"/></b><span>CCTV 8</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFhwWm"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c9.png"/></b><span>CCTV 9</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFh2KW"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c10.png"/></b><span>CCTV 10</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFhyzk"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c11.png"/></b><span>CCTV 11</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFhU8c"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c12.png"/></b><span>CCTV 12</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFhb9z"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c13.png"/></b><span>CCTV 13</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFhqUF"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c14.png"/></b><span>CCTV 14</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFhtUX"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/c15.png"/></b><span>CCTV 15</span></a></li>
                </ul>
                <ul class="zb-list hide">
                    <li><a href="javascript:;" data-url="http://t.cn/RLQqNvg"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/hn.png" /></b><span>湖南卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/R6Jrh0y"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/zj.png" /></b><span>浙江卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RVylk9M"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/js.png" /></b><span>江苏卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RLcRIHw"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/df.png" /></b><span>东方卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFzrnr"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/bj.png" /></b><span>北京卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFzDXB"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/ah.png" /></b><span>安徽卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZvZn"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/sd.png" /></b><span>山东卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZL4M"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/ha.png" /></b><span>河南卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZqm8"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/jx.png" /></b><span>江西卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZVXT"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/hlj.png" /></b><span>黑龙江卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZxtl"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/gd.png" /></b><span>广东卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZXVc"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/tj.png" /></b><span>天津卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZNi6"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/hub.png" /></b><span>湖北卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZWZA"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/heb.png" /></b><span>河北卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZYop"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/cq.png" /></b><span>重庆卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZQHu"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/dn.png" /></b><span>东南卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZEC4"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/sx1.png" /></b><span>山西卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZuWA"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/gx.png" /></b><span>广西卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZBpR"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/gz.png" /></b><span>贵州卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFZgD6"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/sz.png" /></b><span>深圳卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFwP3U"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/jl.png" /></b><span>吉林卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFwZUV"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/ln.png" /></b><span>辽宁卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFw2zU"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/sc.png" /></b><span>四川卫视</span></a></li>
                    <li><a href="javascript:;" data-url="http://t.cn/RpFw4ZA"><b><img src="<?php echo $maccms['path_tpl']; ?>images/tv/chc.png" /></b><span>CHC电影</span></a></li>
                </ul>
                <ul class="zb-list hide">
                    <p style="text-align: center;padding: 25px">敬请期待</p>
                </ul>
            </div>
        </div>
    </div>
<!-- 页脚 -->
    <footer class="ifoot">
        <nav class="bnav">
		<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a href="<?php echo mac_url_type($vo); ?>" title="<?php echo $vo['type_name']; ?>">热播<?php echo $vo['type_name']; ?></a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<a href="<?php echo mac_url('gbook/index'); ?>" title="留言求片">留言求片</a>
		</nav>
        <p>免责声明:本网站所有内容均系收集于各大网站，本站只提供WEB页面服务，并不提供影片资源储存也不参与录制与上传，若本站收录内容无意侵犯了贵公司版权，请给网页底部邮箱地址来信，我们会及时处理和回复，谢谢合作。</p>
        <p class="en"><?php echo $maccms['site_url']; ?>站长邮箱:<?php echo $maccms['site_email']; ?></p>
    </footer>
    <script src="<?php echo $maccms['path_tpl']; ?>js/lazyload.min.js"></script>
    <script src="<?php echo $maccms['path_tpl']; ?>js/app.js"></script>
    <div class="zb-plays">
        <div class="mask"></div>
        <div class="zb-play"><a href="javascript:;" class="close"><i class="iconfont">&#xe622;</i></a>
            <div class="ipcon" id="ipcon">
                <iframe id="frmLive" frameborder="0" scrolling="no" allowfullscreen="true" width="100%"></iframe>
            </div>
        </div>
    </div>
    <script>
    
    var $a = $('.zb-nav a'),
        $ul = $('.zb-con ul'),
        $alast = $('.sitenav a:last-child'),
        $abtn = $('.zb-list li a');
    $alast.addClass('cur');
    $a.click(function() {
        var $this = $(this);
        var $t = $this.index();
        $a.removeClass();
        $this.addClass('cur');
        $ul.addClass('hide').removeClass('show');
        $ul.eq($t).addClass('show');
    });
    $abtn.on('click', function(e) {
        var vurl = $(this).attr("data-url");
        var w = document.documentElement ? document.documentElement.clientWidth : document.body.clientWidth;
        $('#frmLive').attr('src', vurl);
        if (w < 767) {
            $('#frmLive').height = 260;
        } else {
            $('#frmLive').height = 600;
        };
        $('html').addClass('show');
        e.stopPropagation();
    });
    $('.zb-plays .mask,.zb-plays .close').on('click', function() {
        $('html').removeClass('show');
        document.getElementById('frmLive').src = '';
    })
    $('.izbs').addClass('cur');
    $('.iapp').removeClass('cur');
    </script>
</body>
</html>