<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<style>
		.input
		{
			text-align:right;
		}
		table
		{
			font-size:25px;
		}
	</style>
	</head>
	<body>
		<div class="input">
		<a href="menu.php"><input type="reset" value="See Menu"></a>
		</div>
		<form name="Menuadding" method="post" action="readdata.php">
		<table align="Center">
			<tr>
				<td>
				Name:
				</td>
				<td>
				<input type="text" name="name"/>
				</td>
			</tr>
			<tr>
				<td>
				Item:
				</td>
				<td>
				<input type="text" name="item"/>
				</td>
			</tr>
			<tr>
				<td>
				Price:
				</td>
				<td>
				<input type="text" name="price"/>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
				<input type="submit" value="Save"/>
				<input type="reset" value="Clear"/>
				</td>
			</tr>
		</table>
	</body>
</html>