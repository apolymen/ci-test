<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
		<table id="tableId" class="table table-bordered table-condensed table-striped">
	    <thead>
	      <tr>
		<th>customerNumber</th>
		<th>contactLastName</th>
		<th>contactFirstName</th>
		<th>city</th>
		<th>country</th>
		<th>creditLimit</th>
	      </tr>
	    </thead>

		<tbody>
		<?php foreach ($people as $row): ?>
			<tr> <td><?=$row->customerNumber?></td> <td><?=$row->contactLastName?></td> <td><?=$row->contactFirstName?></td> <td><?=$row->city?></td> <td><?=$row->country?></td> <td><?=$row->creditLimit?></td> </tr>
		<?php endforeach; ?>

		</tbody>
	</table>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script>
	$("#tableId tr").dblclick(function() {
	   alert($(this).children("td").html());
	});
	</script>
</body>
</html>