<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:39:"template/datll_km/html/index/index.html";i:1587822630;s:64:"/www/wwwroot/maccms10/template/datll_km/html/public/include.html";i:1587817535;s:61:"/www/wwwroot/maccms10/template/datll_km/html/public/head.html";i:1587817538;s:63:"/www/wwwroot/maccms10/template/datll_km/html/public/banner.html";i:1587817537;s:63:"/www/wwwroot/maccms10/template/datll_km/html/public/serial.html";i:1587817535;s:61:"/www/wwwroot/maccms10/template/datll_km/html/public/foot.html";i:1587817534;}*/ ?>
<!DOCTYPE html>

<html lang="zh-CN">

<head>

    <meta charset="utf-8" />

    <title><?php echo $maccms['site_name']; ?></title>

    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />

	<meta name="description" content="<?php echo $maccms['site_description']; ?>" />

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

        <div class="container">

            <section class="ibanner">

            <div class="swiper-container">

                <div class="swiper-wrapper">

					<?php $__TAG__ = '{"num":"6","paging":"no","type":"all","level":"9","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                    <div class="swiper-slide"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo $vo['vod_pic_slide']; ?>" /> <p><?php echo $vo['vod_name']; ?></p></a></div>

					<?php endforeach; endif; else: echo "" ;endif; ?>

                </div>

            </div>

            <div class="swiper-pagination"></div>

            <div class="button">

                <div class="swiper-button-prev"></div>

                <div class="swiper-button-next"></div>

            </div>

            </section>

			<?php $__TAG__ = '{"ids":"1,2,3,4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

            <section class="imain clearfix">

                <div class="col-l">

                    <div class="tv-hd">

<h2><svg class="iconf" aria-hidden="true">
<?php switch($vo['type_id']): case "1": ?><use xlink:href="#icon-luxiang"></use><?php break; case "2": ?><use xlink:href="#icon-yanglazhuye"></use><?php break; case "3": ?><use xlink:href="#icon-qita"></use><?php break; default: ?><use xlink:href="#icon-shoucang"></use>

<?php endswitch; ?></svg>热播<?php echo $vo['type_name']; ?></h2>

<div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($vo); ?>">更多<i class="iconfont">&#xe613;</i></a></div>

                    </div>

	<div class="tv-bd a_clist">

		<div class="aclcon1">

			<div class="tv-l"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>

				<div class="tvhots"><div class="v-pic">

    <img data-src="<?php echo $vo2['vod_pic']; ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo2['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo2['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo2['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo2['vod_serial']; ?>期
<?php endif; break; case "4": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>

</div>

<div class="v-txt">

    <p class="v-tit">

        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></em>

        <em class="em-score"><?php echo $vo2['vod_score']; ?>分</em>

    </p>

    <p class="s-des">演员：<?php echo mac_url_create($vo2['vod_actor'],'actor'); ?></p>

    <p class="s-des">导演：<?php echo mac_url_create($vo2['vod_director'],'director'); ?></p>

</div></div><?php endforeach; endif; else: echo "" ;endif; ?>

			</div>

	<div class="tv-r">

		<ul class="tv-list">

<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>

<li>

    <div class="v-pic">

        <img data-src="<?php echo $vo2['vod_pic']; ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo2['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo2['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo2['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo2['vod_serial']; ?>期
<?php endif; break; case "4": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>

    </div>

    <div class="v-txt">

        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></span>

    </div>

</li>

<?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>

	</div>

		</div>

		<div class="aclcon2 hide">

			<div class="tv-l"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","start":"12","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>

				<div class="tvhots"><div class="v-pic">

    <img data-src="<?php echo $vo2['vod_pic']; ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo2['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo2['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo2['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo2['vod_serial']; ?>期
<?php endif; break; case "4": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>

</div>

<div class="v-txt">

    <p class="v-tit">

        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></em>

        <em class="em-score"><?php echo $vo2['vod_score']; ?>分</em>

    </p>

    <p class="s-des">演员：<?php echo mac_url_create($vo2['vod_actor'],'actor'); ?></p>

    <p class="s-des">导演：<?php echo mac_url_create($vo2['vod_director'],'director'); ?></p>

</div></div><?php endforeach; endif; else: echo "" ;endif; ?>

			</div>

	<div class="tv-r">

		<ul class="tv-list">

<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"13","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>

<li>

    <div class="v-pic">

        <img data-src="<?php echo $vo2['vod_pic']; ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo2['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo2['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo2['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo2['vod_serial']; ?>期
<?php endif; break; case "4": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>

    </div>

    <div class="v-txt">

        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></span>

    </div>

</li>

<?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>

	</div>

		</div>

		<div class="aclcon3 hide">

			<div class="tv-l"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","start":"23","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>

				<div class="tvhots"><div class="v-pic">

    <img data-src="<?php echo $vo2['vod_pic']; ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo2['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo2['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo2['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo2['vod_serial']; ?>期
<?php endif; break; case "4": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>

</div>

<div class="v-txt">

    <p class="v-tit">

        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></em>

        <em class="em-score"><?php echo $vo2['vod_score']; ?>分</em>

    </p>

    <p class="s-des">演员：<?php echo mac_url_create($vo2['vod_actor'],'actor'); ?></p>

    <p class="s-des">导演：<?php echo mac_url_create($vo2['vod_director'],'director'); ?></p>

</div></div><?php endforeach; endif; else: echo "" ;endif; ?>

			</div>

	<div class="tv-r">

		<ul class="tv-list">

<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"24","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>

<li>

    <div class="v-pic">

        <img data-src="<?php echo $vo2['vod_pic']; ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo2['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo2['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo2['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo2['vod_serial']; ?>期
<?php endif; break; case "4": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>

    </div>

    <div class="v-txt">

        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></span>

    </div>

</li>

<?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>

	</div>

		</div>

	</div>

                </div>

                <div class="col-r">

                    <div class="tv-hd">

                        <h2><?php echo $vo['type_name']; ?> • 排行榜</h2></div>

                    <div class="tv-bd">

                        <ul class="v-rank clearfix">

						<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","order":"desc","by":"hits","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>

						<li><i class="i-rank_num"><?php echo $key2; ?></i><em class="v-num"><?php switch($vo2['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo2['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo2['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo2['vod_serial']; ?>期
<?php endif; break; case "4": if($vo2['vod_isend'] == '1'): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; else: if($vo2['vod_serial'] == $vo2['vod_total']): if($vo2['vod_total'] > '0'): ?>
<?php echo $vo2['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] < $vo2['vod_total']): if($vo2['vod_serial'] > '0'): ?>
更新至<?php echo $vo2['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo2['vod_serial'],'全'); ?>集
<?php endif; elseif($vo2['vod_serial'] > $vo2['vod_total']): ?>
全<?php echo mac_default($vo2['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></span></li>

						<?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                    </div>

                </div>

            </section>

			<?php endforeach; endif; else: echo "" ;endif; ?>



            <section class="ilinks clearfix">

                <ul>

                    <li>友情链接：</li>

					<?php $__TAG__ = '{"num":"10","type":"all","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                    <li><a class="text-color-999" href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li>

					<?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>

            </section>

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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164582756-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-164582756-1');
    </script>

</body>

</html>