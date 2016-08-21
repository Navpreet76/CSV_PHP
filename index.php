<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Working with CSV files</title>
</head>
<body>
<?php
	ini_set("auto_detect_line_endings", TRUE);
	$file = fopen("us-500.csv", "r");
	$data = array();
	$record_counter = 0;

	//If the file has not ended, we want something
	while(!feof($file))
	{
		$info = fgetcsv($file);
		$data[] = $info;
	}
	foreach ($data as $key => $value){
		if($key != 0)
		{ ?>

	<h2>Record: <?= $record_counter; ?> </h2>
	<ul>
		<li>First Name: <?= $value[0]; ?> </li>
		<li>Last Name: <?= $value[1]; ?> </li>
		<li>Company Name: <?= $value[2]; ?> </li>
		<li>Address: <?= $value[3]; ?> </li>
		<li>City: <?= $value[4]; ?> </li>
		<li>County: <?= $value[5]; ?> </li>
		<li>State: <?= $value[6]; ?> </li>
		<li>Zip: <?= $value[7]; ?> </li>
		<li>Phone 1: <?= $value[8]; ?> </li>
		<li>Phone 2: <?= $value[9]; ?> </li>
		<li>Email: <?= $value[10]; ?> </li>
		<li>Web: <?= $value[11]; ?> </li>
	</ul>
<?php
	}
	$record_counter++;
}
?>
</body>
</html>