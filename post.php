<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>

	<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">

                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo; <?php $this->title() ?></div>
<style type="text/css">
.main p.expired-tips {
    padding: 5px 10px;
    font-size: 12px;
    border: 1px solid #e2e2e2;
    background-color: #ffffc0;
    border-left: 3px solid #fff000;
    color: #333;
    overflow: hidden;
}

</style>
					

				<h3><?php $this->title() ?></h3>

				<article class="post post-19" itemscope="" itemtype="http://schema.org/Article">

				<div class="entry-content" itemprop="articleBody">
<?php if(timeZoneold($this->date->timeStamp)) echo  '
                    <p class="expired-tips"> 提醒：本文最后更新于&nbsp;1&nbsp;年前，文中所描述的信息可能已发生改变，请谨慎使用。</p>
'; ?>
					<?php parseContent($this); ?>

					<p class="post-info">本文于&nbsp;<span class="date"><?php $this->date(); ?>&nbsp;发表在「  <?php $this->category(','); ?>  」</span>  ，并被添加「  <?php _e(''); ?><?php $this->tags(', ', true, 'none'); ?>  」标签 ，被阅读 <?php get_post_view($this) ?> 次 ，共有<?php echo art_count($this->cid); ?>字。</p>

					<p class="copyright-info">

						本站使用「<a target="_blank" href="http://creativecommons.org/licenses/by/4.0/deed.zh">署名 4.0 国际</a>」创作共享协议，可自由转载、引用，但需署名作者且注明文章出处</a>

					</p>

									

				</div>

				</article>

				<nav class="page-navi"><span class="prev"><?php $this->thePrev('&laquo; %s', ''); ?></span> <span class="next"><?php $this->theNext('%s &raquo;', ''); ?></span></nav>

				<?php $this->need('comments.php'); ?>

			</div>

		</div>

<?php $this->need('footer.php'); ?>