<button type="<?php echo isset($type) ? $type : 'submit'; ?>"
        class="btn btn-<?php echo $class; ?>" <?php if ($onclick) echo "onclick=\"".$onclick."\""; ?>>
    <?php if (isset($icon)) { ?>
        <i class="<?php echo $icon; ?>"></i>
    <?php } ?>
    <?php echo $label; ?>
</button>