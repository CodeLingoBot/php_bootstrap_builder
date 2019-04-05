<li class="nav-item<?php echo $active ? " active" : ""; ?>" id="<?php echo $id; ?>">
    <a class="nav-link" href="<?php echo $url; ?>"
        <?php if ($url[0] == '#') { ?> data-toggle="collapse" role="button" aria-expanded="false" <?php } ?>>
        <?php if (isset($icon)) { ?>
            <i class="<?php echo $icon; ?>"></i>
        <?php } ?>
        <?php echo $label; ?>
        <?php echo $active ? "<span class='sr-only'></span>" : ""; ?>
    </a>
    <?php if (isset($subitens)) echo $subitens; ?>
</li>