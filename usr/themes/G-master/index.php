<?php
/**
 * 大气
 *
 *
 * @package G
 * @author YOURAN
 * @version 1.0.3
 * @link https://gundam.exia.xyz/
 */

 $this->need('header.php');
 ?>
<div id="article" class="clear">
  <div id="article-content">
 <?php while($this->next()): ?>
   <a class="yl" href="<?php $this->permalink() ?>">
    <div id="article-<?php $this->cid();?>" class="article-item hoverup">
    	<h2 id="article-<?php $this->cid();?>-title"><span><?php $this->title() ?></span></h2>
       <?php if ($this->options->enableOneRow == 0): ?><em><?php $this->excerpt(50);?></em><?php endif; ?>
      <p class="clear"><span id="article-author"><?php $this->author(); ?></span><span id="article-date"><?php $this->date('Y/m/d'); ?></span></p>
    </div>
    </a>
<?php endwhile; ?>
<div id="pages" class="clear">
  <?php $this->pageLink('更多 >','next'); ?>
  <?php $this->pageLink('< 返回','prev'); ?>
</div>
  </div>
</div>

<style type="text/css">
      a.yl:link {color: black} /* 未访问的链接 */
      a.yl:visited {color: black} /* 已访问的链接 */
      a.yl:hover {color: #DBB8D0} /* 鼠标移动到链接上 */
      a.yl:active {color: #ADADB7} /* 选定的链接 */
</style>



  <?php $this->need('footer.php'); ?>