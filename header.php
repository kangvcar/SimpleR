<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!doctype html>

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

</head>

<body>

<!--[if lt IE 9]>

	<div class="browsehappy" role="dialog">你正在使用一个过时的浏览器，为了正常的访问, 请<a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>以查看此页面。</div>

<![endif]-->



<header>

        <div class="logo">

            <img src="<?php $this->options->themeUrl('images/r1ng.png'); ?>" width="200" height="58"/>

        </div>

    </header>

    <div class="main">

        <div class="description"><?php $this->options->description() ?></div>

        <div class="topimg"><img align="top" src="<?php $this->options->themeUrl('images/ruler.gif'); ?>"></div>



