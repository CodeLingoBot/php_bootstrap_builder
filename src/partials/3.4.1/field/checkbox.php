<div class="form-check">
    <input type="checkbox" name="<?php echo $name; ?>" id="<?php echo $id; ?>" value="<?php echo $value; ?>"
           class="form-check-input"
        <?php
            if ($helper) echo "aria-describedby=\"".$id."\"_helper";
            if ($required) echo "required";
            if ($readonly) echo "readonly";
            if ($checked) echo "checked";
        ?>>
    <label class="form-check-label" for="<?php echo $id; ?>_helper"><?php echo $label; ?></label>
    <?php if (!empty($helper)) { ?>
        <small id="<?php echo $id; ?>_helper" class="form-text text-muted"><?php echo $helper; ?></small>
    <?php } ?>
</div>