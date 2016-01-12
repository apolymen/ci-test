<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Input</title>
    </head>
    <body>
        <?php echo form_open("input"); ?>
        <div>
            <label for="amount">Amount</label>
        </div>
        <div>
            <input type="text" name="amount" value="<?php echo set_value('amount'); ?>" />
            <span><?php echo form_error('amount'); ?></span>
        </div>
        <div>
            <input type="submit" name="Submit" />
        </div>
        <?php echo form_close(); ?>
    </body>
</html>
