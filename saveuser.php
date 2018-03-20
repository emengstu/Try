<?php 
	
	require_once 'formtbllogin.php';
	$conn = new mysqli($hostname, $user, $pword, $database, 3305, '/Applications/MAMP/tmp/mysql/mysql.sock');
	if ($conn->connect_error) die($conn->connect_error);
	$data['first_name'] = $_POST['first_name'];
	$data['last_name'] = $_POST['last_name'];
        $data['user_name']= $_POST['user_name']
        $data['signup_date'] = $_POST['signup_date'];

 	if ($_POST['user_id']{
		$q = "update 'users'set";
		foreach ($data as $first_name => $postdata) {
			$q .= $firstname. "='" . $postdata.  "',";
	}
	$q = substr ($q,0,-2);
	$q .= " where user_id = " . $_POST['user_id'];
	$tryit = $conn->query($q);
	}else {
		$q = "insert into `users` (`";
		$qd = ") values ('";
		foreach ($data as $first_name => $postdata) {
			$q .= $first_name . "`, `";
			$qd .= $postdata . "', '";
		}
	        $qstr = substr($q,0,-3) . substr($qd,0,-3) . ");";
	        echo $qstr . "<br>";
	        $result = $conn->query($qstr);
	 }
	header('Location:sampleForm.php);
	$q="select * from users";
	
	$result=$conn->query($q);
	if (!$result) die ($conn-> error);
	$rows= $result->num_rows;
	echo "There are". $rows . "rows in the User table. <br>";
	echo "<a href='sampleForm.php'>Add another author... </a><br>";
?>
