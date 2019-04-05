<div class="form-group bootstrap-builder-image">
    <label for="<?php echo $name; ?>"><?php echo $label; ?></label>
    <img class="rounded" id="<?php echo $id; ?>"  src="<?php echo empty($value) ? \BootstrapBuilder\Config::val('no_image') : $value; ?>"/>
    <input type="hidden" value="<?php echo $value ? $value : null; ?>" name="<?php echo $name; ?>_hidden">
    <input type="file" id="<?php echo $id; ?>" name="<?php echo $name; ?>" class="form-control-file"
           accept="image/x-png,image/gif,image/jpeg" onchange="bootstrap_builder.render_image(this, '<?php echo $id; ?>');">
</div>