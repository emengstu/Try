<html>
<head>
  <title> Form Table </title>
  <?php
      include 'bslinks.php';
      $a= "select * from users order by last_name, first_name";
	/*require_once 'liblogin.php';*/
	
	$conn = new mysqli('localhost', 'root', 'root', 'library');
		if ($conn->connect_error) die($conn->connect_error);
		$result = $conn->query($a);
		$row = null;
  ?>
  <link rel="stylesheet" href="css/main=php.css">
  </head>
  <body>
        <div class="content">
        <div class="container">
            <div class="row">
		           	<h1>Enter User Data</h1><br>
		          	<form action="saveuser.php" method="post" class="form-horizontal">
					<input id="user_id" type="hidden" name="user_id" value="<?=$row['user_id']?>">
				        <div class="form-group">
					      <label for="first_name" class="control-label col-sm-3">users's Name</label>
					      <div class="col-sm-3">
						<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
					</div>
					      <div class="col-sm-4">
						      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
					</div>
						<div class="col-sm-4">
						      <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Chooseuser Name">
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
		    <h2> Users  </h2>
		    <?php if ($result):?>
		    	     < table class= "small table table-condensed table-striped">
				     <thead><tr><th>Name</th><th></thead>
				     <tbody>
					     <?php foreach ($result as $r): ?>
						      <tr><td><a href="Formtable.php?aid=<?=$r['user_id']?>"><?=$r['first_name'] . " " . $r['last_name']?></a></td><td><?=$r['user_name']?></a></td></tr>
		     			     <?php endforeach?>
				     </tbody>
		</table>
	  <?php else:?>
	  	<p> No records </p>
	  <?php endif ?>
	  
				</form>
		</div> <!-- row -->
	</div> <!-- container -->
	</div> <!-- content -->


<?php 
	include 'bsfooter.php';
?>	
</body>
</html>
          
          
          
          
          
          
          
          
          
          
          
