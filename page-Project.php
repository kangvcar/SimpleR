<?php

    /**

    * Project

    *

    * @package custom

    */

    $this->need('header.php'); ?>
<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">
    <a href="<?php $this->options->siteUrl(); ?>">Home</a> &gt;&gt;
    <?php $this->title() ?>
</div>
<article class="post post-19" itemscope="" itemtype="http://schema.org/Article">
    <div class="entry-content" itemprop="articleBody">
        <?php $this->content(); ?>
    </div>
</article>
<ul class="square">
    <li><a href="https://www.r1ng.net/Project/Css3-achieves-various-image-effects.html" target="_blank">一些CSS3实现的各种图片交互特效</a></li>
    <p>收集的一些用CSS3（都没有使用JavaScript）写的图片交互特效，保存备用一下。</p>
    <li><a href="https://www.r1ng.net/Project/wallpaper/" target="_blank">在线高清壁纸下载</a>（支持各种尺寸）</li>
    <p>这是<a href="https://github.com/mengkunsoft" target="_blank">@Meng Kun</a>用PHP写的一款自采集壁纸网站源码。<br>
    壁纸采集自 360壁纸库、必应首页的每日图片以及金山词霸开放平台。非常不错！</p>
</ul>
<?php $this->need('footer.php'); ?>