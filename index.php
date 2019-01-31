<?php

/**

 * R1ng Team

 *

 * @package SimpleR Theme

 * @author R1nG Team

 * @version 1.0

 * @link https://www.r1ng.net/

 */



if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$this->need('header.php');

?>

<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">

                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo; Article</div>

<div class="article">

                <ul>

<?php while($this->next()): ?>

           <li><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>

          <div class="info_note"><?php $this->date('M j, Y'); ?></div>

            </li>               

        <?php endwhile; ?>



              </ul>

              <nav class="index-navi"><?php $this->pageLink('&laquo; 上一页','prev');?><?php $this->pageLink('<i class="icon icon-right"></i>下一页 &raquo;','next');?></nav>

            </div>



<?php $this->need('footer.php'); ?>