<?php 
	
	require_once 'formtbllogin.php';
	$conn = new mysqli($hostname, $user, $pword, $database, 3305, '/Applications/MAMP/tmp/mysql/mysql.sock');
	if ($conn->connect_error) die($conn->connect_error);
	$data['first_name'] = $_POST['first_name'];
	$data['last_name'] = $_POST['last_name'];
  $data['signup_date'] = $_POST['signup_date'];
	$q = "insert into `authors` (`";
	$qd = ") values ('";
	foreach ($data as $fldName => $postdata) {
		$q .= $fldName . "`, `";
		$qd .= $postdata . "', '";
	}
	$qstr = substr($q,0,-3) . substr($qd,0,-3) . ");";
	echo $qstr . "<br>";
	$result = $conn->query($qstr);
	$q = "select * from authors";
	$result = $conn->query($q);
	if (!$result) die($conn->error);
	$rows = $result->num_rows;
	echo "There are " . $rows . " rows in the Authors table. <br>";
	echo "<a href='sampleForm.php'>Add another author... </a><br>";
?>
