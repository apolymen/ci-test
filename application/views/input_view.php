<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Input</title>

		<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    </head>
	<body>
		<?php echo form_open("input"); ?>

		<div>
			<label for="xDate">Date</label>
		</div>
		<div>
			<input id="xDate" type="text" name="xDate" placeholder="Date (yyyy-mm-dd)" value="<?php echo set_value('xDate'); ?>" />
			<span><?php echo form_error('xDate'); ?></span>
		</div>

		<div>
			<label for="amount">Amount</label>
		</div>
		<div>
			<input type="text" name="amount" placeholder="Amount (max 3 decimals)" value="<?php echo set_value('amount'); ?>" />
			<span><?php echo form_error('amount'); ?></span>
		</div>

		<div>
			<label for="description">Description</label>
		</div>
		<div>
			<input type="text" name="description" placeholder="Short description" value="<?php echo set_value('description'); ?>" />
			<span><?php echo form_error('description'); ?></span>
		</div>

		<div>
			<input type="submit" name="Submit" />
		</div>

		<?php echo form_close(); ?>


      <script type="text/javascript">
			//load datepicker control onfocus
			$(function () {
				$("#xDate").datepicker(
					{ dateFormat: "yy-mm-dd" }
				);
			});
		</script>

	</body>
</html>
