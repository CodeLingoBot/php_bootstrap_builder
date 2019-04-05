<div class="form-group<?php echo $error ? ' has-error' : ''; ?>">
    <label for="<?php echo $id; ?>"> <?php echo $label; ?></label>
    <textarea name="<?php echo $name; ?>" id="<?php echo $id; ?>" class="form-control"
        <?php
        if ($helper) echo "aria-describedby=\"".$id."_helper\" ";
        if ($required) echo "required ";
        if ($readonly) echo "readonly ";
        ?>><?php echo $value ?></textarea>
    <?php if ($helper) { ?>
        <small id="<?php echo $id; ?>_helper" class="form-text text-muted"><?php echo $helper; ?></small>
    <?php } ?>
</div>