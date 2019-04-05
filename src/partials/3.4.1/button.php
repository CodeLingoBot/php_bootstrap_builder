<button type="<?php isset($type) ? $type : 'submit'; ?>"
        class="btn btn-<?php echo $class; ?>">
    <?php if (isset($icon)) { ?>
        <i class="<?php echo $icon; ?>"></i>
    <?php } ?>
    <?php echo $label; ?>
</button>