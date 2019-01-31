<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">
                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo; <?php $this->archiveTitle(array(
                'category'  =>  _t('分类 <span style=color:#2479CC;>%s</span> 下的文章'),
                'search'    =>  _t('包含关键字 <span style=color:#2479CC;>%s</span> 的文章'),
                'tag'       =>  _t('标签 <span style=color:#2479CC;>%s</span> 下的文章'),
                'author'    =>  _t('<span style=color:#2479CC;>%s</span> 的文章')
            ), '', ''); ?></div>
            <div class="article">
                <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
        <tbody>
				<?php while($this->next()): ?>
				<tr onmouseover="this.style.backgroundColor='#EEEEEE'" onmouseout="this.style.backgroundColor='#FFFFFF'" style="background-color: rgb(255, 255, 255);">
            <td><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></td>
          <td align="right"><font color="#808080"><?php $this->date('M j, Y'); ?></font></td>
            </tr>   
				<?php endwhile; ?>
                </tbody></table>
				<?php $this->pageLink('<nav class="page-navi"><i class="icon icon-left"></i> 上一页','prev');?><?php $this->pageLink('下一页 <i class="icon icon-right"></i></nav>','next');?>
		</div>

<?php $this->need('footer.php'); ?>