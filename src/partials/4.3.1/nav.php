<nav class="navbar navbar-expand-sm <?php echo $bg ? $bg: "bg-light" ; ?> <?php if ($fixedTop) echo "fixed-top"; ?>">
    <a class="navbar-brand" href="<?php echo $url; ?>">
        <?php if (is_file($logo)) { ?>
            <img src="<?php echo $logo; ?>"/>
        <?php } else { echo $logo; } ?>
    </a>
    <?php foreach ($bars as $bar) echo $bar; ?>
</nav>