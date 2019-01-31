<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="mid-col">
    <div class="mid-col-container">
        <div id="content" class="inner"> <s></s>
<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">
                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &gt;&gt; 站内搜索</div>
            <article class="post post-search">

                <div class="entry-content">
                    <div id="search">
                        <form method="post">
                            <div class="wrapper">
                                <input maxlength="80" placeholder="请输入关键字..." name="s" value="" type="text" required="">
                            </div>
                            <input class="submit" type="submit" value="搜索">
                        </form>
                    </div>
                    <div id="searchResult">
                        <div class="info"> <?php $this->archiveTitle(array(
            'search'    =>  _t('搜索 %s 的文章'),
        ), '', ''); ?></div>
        <?php if ($this->have()): ?>
<div class="article">
                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
        <tbody>


<?php while($this->next()): ?>
           <tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor='#FFFFFF'" style="background-color: rgb(255, 255, 255);">
            <td><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></td>
          <td align="right"><font color="#808080"><?php $this->date('M j, Y'); ?></font></td>
            </tr>               
        <?php endwhile; ?>
                    <?php else: ?>
                         <tr>
                <td><?php _e('没有找到内容'); ?></td>
            </tr>
        <?php endif; ?>
                </tbody></table>
            </div>
            </article>
             <nav class="page-navi"> <?php $this->pageLink('« 上一页'); ?> <?php $this->pageLink('下一页 »','next'); ?> </nav>
        </div>
    </div>
		<?php $this->need('footer.php'); ?>
