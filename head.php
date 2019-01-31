<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="keywords" content="<?php $this->keywords() ?>" />
<?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
<!--[if lt IE 9]>
	<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css?v=170120'); ?>">
<title><?php $this->archiveTitle(array(
	'category'  =>  _t(' %s '),
	'search'    =>  _t(' %s '),
	'tag'       =>  _t(' %s '),
	'author'    =>  _t(' %s ')
	), '', ' - '); ?><?php $this->options->title(); ?></title>
<script>
//window.status="欢迎光临 Security.R1ng Team";
function playmusic(){
    if(document.all.playflag.checked==true){
        //wmp229.innerHTML="<embed autostart=true loop=true controls=ControlPanel width=0 height=0 src=LoveParadise.wma>";
        wmp229.innerHTML="<embed autostart=true loop=true controls=ControlPanel width=0 height=0 src=<?php $this->options->themeUrl('scar.mp3'); ?>>";
        document.all.playflag.checked=true;
    }else{
        wmp229.innerHTML="";
        document.all.playflag.checked=false;
    }
    return true;
}

</script>
</head>
<body>
<!--[if lt IE 9]>
	<div class="browsehappy" role="dialog">你正在使用一个过时的浏览器，为了正常的访问, 请<a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>以查看此页面。</div>
<![endif]-->
<div name="wmp229" id="wmp229">
<embed autostart="true" loop="true" controls="ControlPanel" width="0" height="0" src="<?php $this->options->themeUrl('scar.mp3'); ?>">
</div>
 <form method=get action="http://www.google.com/search">
        <table width="100%" border="0"><tbody><tr><td width="240" align="left">
<input type="checkbox" name="playflag" onclick="javascript:return playmusic()" checked><span style="font-size:9pt">启用背景音乐</span>
    </td>
<td align="right">
<!-- Search Google -->`
<input type="text" name="q" size="25" maxlength="255" value="" title="Google搜索"> 
<input type="submit" name="btnG" value="Google">
<!-- Search Google -->
</td>
</tr></tbody></table></form>
<header>
        <div class="logo">
            <img src="<?php $this->options->themeUrl('images/r1ng.png'); ?>" width="200" height="58"/>
        </div>
    </header>
    <div class="main">
        <div class="description"><?php $this->options->description() ?></div>
        <div class="topimg"><img align="top" src="<?php $this->options->themeUrl('images/ruler.gif'); ?>" width="700" height="14"></div>

