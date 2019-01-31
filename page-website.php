<?php
    /**
    * WebSite
    *
    * @package custom
    */
    $this->need('header.php'); ?>
<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">
                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &gt;&gt; <?php $this->title() ?></div>
            
            <ul class="square">
                <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                <li>文章总数：<?php $stat->publishedPostsNum() ?></li>
                <li>分类总数：<?php $stat->categoriesNum() ?></li>
                <li>评论总数：<?php $stat->publishedCommentsNum() ?></li>
                <li>页面总数：<?php $stat->publishedPagesNum() ?></li>
                <li>运行时间：<SCRIPT language=JavaScript>
var urodz= new Date("7/15/2014");
var now = new Date();
var ile = now.getTime() - urodz.getTime();
var dni = Math.floor(ile / (1000 * 60 * 60 * 24));
document.write(+dni)</script> 天

</li>
            </ul>

<?php $this->need('footer.php'); ?>




