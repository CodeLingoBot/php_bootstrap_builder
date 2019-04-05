<nav class="navbar <?php echo $bg ? $bg: "navbar-default" ; ?> <?php if ($fixedTop) echo "navbar-fixed-top"; ?>">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo $url; ?>">
				<?php if (is_file($logo)) { ?>
					<img src="<?php echo $logo; ?>"/>
				<?php } else { echo $logo; } ?>
			</a>
		</div>
    	<?php foreach ($bars as $bar) echo $bar; ?>
	</div>
</nav>