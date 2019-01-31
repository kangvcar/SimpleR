<?php
    /**
    * xinqing
    *
    * @package custom
    */
    $this->need('header.php'); ?>
<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">
                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &gt;&gt; <?php $this->title() ?></div>
                <?php Words_Plugin::render(); ?>

<?php $this->need('footer.php'); ?>
