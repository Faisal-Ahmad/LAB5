<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<style>
	h1
	{
		background-color:rgb(10,10,10,.6);
		color:cadetblue;
	}
	h2
	{
		text-align:center;
		color:maroon;
		
	}
	.myclass
	{
		text-align:center;
		
	}
	</style>
	</head>
	<body>
		<div class="myclass">
			<h1>Burgerology</h1>
			<address>
				jamuna block-c<br/>
				Bashundhara road<br/>
				Dhaka-1206<br/>
			</address>
		</div>
		<hr/>
			<h2>Menu</h2>
		<hr/>
		<?php
		$xml=simplexml_load_file("menudata.xml") or die("Error: Cannot Open File");
		foreach($xml->children() as $info) {
				echo "<h3>".$info['category']."</h3></br>";
				echo $info->item . ".........................".$info->price. "<br>";
				} 
		?>
		
	</body>
</html>