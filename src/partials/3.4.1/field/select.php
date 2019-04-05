<div class="form-group<?php echo $error ? ' has-error' : ''; ?>">
    <label for="<?php echo $id; ?>"><?php echo $label; ?></label>
    <select name="<?php echo $name; ?>" id="<?php echo $id; ?>" class="form-control"
        <?php
        if ($helper) echo "aria-describedby=\"".$id."_helper\" ";
        if ($required) echo "required ";
        if ($readonly) echo "readonly ";
        ?>>
        <?php foreach ($options as $optionValue => $optionName) { ?>
            <option value="<?php echo $optionValue; ?>" <?php if ($optionValue == $value) echo "selected=\"true\""; ?>>
                <?php echo $optionName; ?>
            </option>
        <?php } ?>
    </select>
    <?php if ($helper) { ?>
        <small id="<?php echo $id; ?>_helper" class="form-text text-muted"><?php echo $helper; ?></small>
    <?php } ?>
</div>