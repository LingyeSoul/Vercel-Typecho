<?php
/**
* 首页
*
* @package custom
*/
$this -> need('header.php');
?>

  <div id="zp">
    <div id="zp-content">
      <?php $this->content();?>
    </div>
  </div>

<style type="text/css">
      a.sy:link {color: #808080} /* 未访问的链接 */
      a.sy:visited {color: #808080} /* 已访问的链接 */
      a.sy:hover {color: #DBB8D0} /* 鼠标移动到链接上 */
      a.sy:active {color: #ADADB7} /* 选定的链接 */
</style>


<?php $this -> need('footer.php'); ?>
