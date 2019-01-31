<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">
                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &gt;&gt; <?php $this->title() ?></div>
	           <h3><?php $this->title() ?></h3>
            <article class="post post-19" itemscope="" itemtype="http://schema.org/Article">
				
				<div class="entry-content" itemprop="articleBody">
					<?php $this->content(); ?>
				</div>
            </article>
            <?php $this->need('comments.php'); ?>
    
<?php $this->need('footer.php'); ?>