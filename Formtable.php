<html>
<head>
  <title> Form Table </title>
  <?php
      include 'bslinks.php';
	$a= "select * from authors order by last_name, first_name";
	require_once 'liblogin.php';
	$conn = new mysqli($hostname, $user, $pword, $database, 3305, '/Applications/MAMP/tmp/mysql/mysql.sock');
	if ($conn->connect_error)die($conn->connect_error);
  ?>
  <link rel="stylesheet" href="css/main=php.css">
  </head>
  <body>
        <div class="content">
        <div class="container">
            <div class="row">
		           	<h1>Enter Author Data</h1><br>
		          	<form action="saveAuthor.php" method="post" class="form-horizontal">
				        <div class="form-group">
					      <label for="first_name" class="control-label col-sm-3">Author's Name</label>
					      <div class="col-sm-3">
						<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
					</div>
				</div>
				<div class="form-group">
					<label for "signup_date" class="control-label col-sm-3"> Date</label> 
					<div class="col-sm-4">
						<input type="date" class="form-control" id="signup_date" name="signup_date">
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value= "Submit" class="btn btn-warning pull-right">
					</div>
				
		    </form>
		    <h2> Current Authors </h2>
		    <?php
		    	foreach($result as $r){
				echo"<p>". $r['first_name']."</p>";
			}
		    ?>
		    </form>
		</body>
		</html>		
          
          
          
          
          
          
          
          
          
          
          
          
