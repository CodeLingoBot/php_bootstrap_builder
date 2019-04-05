<div class="form-group<?php echo $error ? ' has-error' : ''; ?>">
    <label for="<?php echo $id; ?>"> <?php echo $label; ?>:</label>
    <input type="text" name="<?php echo $name; ?>" id="<?php echo $id; ?>" value="<?php echo $value ?>" class="form-control"
        <?php
        if ($helper) echo "aria-describedby=\"".$id."_helper\" ";
        if ($required) echo "required ";
        if ($readonly) echo "readonly ";
        ?>>
    <?php if ($helper) { ?>
        <small id="<?php echo $id; ?>_helper" class="form-text text-muted"><?php echo $helper; ?></small>
    <?php } ?>
</div>