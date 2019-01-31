<?php

    /**

    * links

    *

    * @package custom

    */

    $this->need('header.php'); ?>

<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">

                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &gt;&gt; <?php $this->title() ?></div>
<article class="post post-19" itemscope="" itemtype="http://schema.org/Article">

                

                <div class="entry-content" itemprop="articleBody">

                    <?php $this->content(); ?>

                </div>

            </article>


            <ul class="square">

<?php Links_Plugin::output(); ?>



</ul>



<?php $this->need('footer.php'); ?>

