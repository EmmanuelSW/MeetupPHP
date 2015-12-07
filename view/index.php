<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input name="txtName" type="text" placeholder="Name"><br>
	<input name="txtYear" type="text" placeholder="Year"><br>
	<input name="txtGrapes" type="text" placeholder="Grapes"><br>
	<input name="txtDescription" type="text" placeholder="Description"><br>
	<input name="btnGuardar" type="submit" value="Enviar">
</form>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Year</th>
			<th>Grapes</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($datos as $key => $value): ?>
			<tr>
				<td><?= $value["name"] ?></td>
				<td><?= $value["year"] ?></td>
				<td><?= $value["grapes"] ?></td>
				<td><?= $value["description"] ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>