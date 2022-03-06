<?php
/**
* LINK
*
* @package custom
*/
$this -> need('header.php');
?>
	<div id="links">
		<div id="links-content">
			<h2>朋友们</h2>
	    <div class="friends">

					<?php Links_Plugin::output("
					<li class='clear'>
						<a href='{url}' target='_blank'><img src='{image}' alt='{name}'/></a>
						<div class='link-item-content'>
							<a href='{url}' target='_blank'><h3>{name}</h3></a>
							<span>{sort}</span>
							<p>{description}</p>
						</div>
					</li>
					", 0); ?>

				<?php $this->content();?>

		</div>
	</div>
  </div>
<?php $this -> need('footer.php'); ?>
