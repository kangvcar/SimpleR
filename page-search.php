<?php
    /**
    * search
    *
    * @package custom
    */
    $this->need('header.php'); ?>
<div class="mid-col">
    <div class="mid-col-container">
        <div id="content" class="inner"> <s></s>
<div class="mennu"><img alt="bullet1" src="<?php $this->options->themeUrl('images/bullet1.gif'); ?>" align="bottom">
                <a href="<?php $this->options->siteUrl(); ?>">Home</a> &gt;&gt; <?php $this->title() ?></div>
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
                        <div class="hot-words">热搜词： <a href="/search/神器/">神器</a>  <a href="/search/Nginx/">Nginx</a>  <a href="/search/模版/">模版</a>  <a href="/search/渗透测试/">渗透测试</a>  <a href="/search/HTTPS/">HTTPS</a>  <a href="/search/漏洞/">漏洞</a>  <a href="/search/BurpSuite">BurpSuite</a> <a href="/search/XSS/">XSS</a> <a href="/search/Metasploit/">Metasploit</a> 
                        </div>
                        <div class="intro">
                            <p>支持的搜索格式：</p>
                            <ol>
                                <li>输入关键词全文搜索：<a href="/search/安全/">安全</a>；</li>
                                <li>指定时间段搜索：<a href="/search/2018/">date:2018</a>、<a href="/search/2018/">date:2018-05</a>；</li>
                                <li>指定标签搜索：<a href="/search/渗透测试/">tag:渗透测试</a>、<a href="/search/代码审计/">tag:代码审计</a>；</li>
                                <li>指定文章类型搜索：<a href="/search/page/">type:page</a>、<a href="/search/post/">type:post</a>；</li>
                                <li>组合搜索：<a href="/search/xss/">type:post date:2018 tag:Burp Sql</a>；</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <?php $this->need('footer.php'); ?>