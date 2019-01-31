<?php
    /**
    * archives
    *
    * @package custom
    */
    $this->need('header.php'); ?>

	<div class="mid-col">
		<div class="mid-col-container">
            <div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">
                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &gt;&gt; <?php $this->title() ?></div>
				<article class="post post-archives">
					<div class="entry-content">		
                        <p>本博客建于2017年03月，因众所周知的原因，所以一些文章不得不转移至R1nG社区（<a href="https://forum.ywhack.com/" target="_blank">点此访问</a>）。博客至上线以来经过数次改版，最终变成了现在这个样子，本来还想再改改的，由于工作的原因有心而无力，也就将就着用了。博客目前使用了Typecho作为博客程序，好处是轻便，支持MarkDown格式。</p><p>目前本博客共有&nbsp;<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?><?php $stat->publishedPostsNum() ?>&nbsp;篇文章，记录了生活中的各种琐事与技术上遇到的一些问题。:)</p>		
						<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
								$year=0; $mon=0; $i=0; $j=0;
								while($archives->next()):
								$year_tmp = date('Y',$archives->created);
								$mon_tmp = date('m',$archives->created);
								$y=$year; $m=$mon;
								if ($mon != $mon_tmp && $mon > 0) $output .= '</ul>';
								if ($year != $year_tmp && $year > 0) $output .= '</ul>';
								if ($year != $year_tmp) {
								$year = $year_tmp;
								}
								if ($mon != $mon_tmp || ($mon == $mon_tmp && $y != $year_tmp)) {
								$mon = $mon_tmp;
								$output .= '<h3 id="'. $year_tmp .''. $mon_tmp .'">'. $year_tmp .' 年'. $mon_tmp .' 月</h3>';
								$output .= '<ul>';
								}
								$output .= '<li><a href="'.$archives->permalink .'">'. $archives->title .'</a>&nbsp;&nbsp;&nbsp;&nbsp;('.date('M j, Y',$archives->created).')</li>';
								endwhile;
								$output .= '</ul>';
								echo $output;
						?>
					
					</div>
				</article>
		</div>

<?php $this->need('footer.php'); ?>
