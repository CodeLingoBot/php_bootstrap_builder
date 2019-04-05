<a href="<?php echo $url; ?>" class="btn btn-<?php echo $class; ?>" <?php if ($onclick) echo "onclick=\"".$onclick."\""; ?>>
    <?php if (isset($icon)) { ?>
        <i class="<?php echo $icon; ?>"></i>
    <?php } ?>
    <?php echo $label; ?>
</a>