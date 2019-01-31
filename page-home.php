<?php
    /**
    * Home
    *
    * @package custom
    */
    $this->need('head.php'); ?>

<div id="page">
                <ol>

                    <li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a></li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                   <li> <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>
                    <li><a href="https://forum.ywhack.com/" target="_blank">Security Froum</a></li>
                    
                </ol>
            </div>

<?php $this->need('footer.php'); ?>
