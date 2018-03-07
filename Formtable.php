<html>
<head>
  <title> Form Table </title>
  <?php
      include 'bslinks.php';
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
				
		    </form>
		    
		</body>
		</html>		
          
          
          
          
          
          
          
          
          
          
          
          
