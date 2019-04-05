<form class="<?php if ($inline) echo "form-inline"; ?>" action="<?php echo $action; ?>" method="<?php echo $method; ?>">
    <?php foreach($fields as $field) echo $field; ?>
    <?php echo $submit; ?>
</form>