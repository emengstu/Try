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
						<input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name">
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name">
					</div>
				</div>
				<div class="form-group">
					<label for="address1" class="control-label col-sm-3">Address</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="address1" name="address1" placeholder="Address Line 1">
					</div>
				</div>
				<div class="form-group">
					<label for="address2" class="control-label col-sm-3"></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="address2" name="address2" placeholder="Address Line 2">
					</div>
				</div>
			</form>
          
          
          
          
          
          
          
          
          
          
          
          <div class="row">
                  <h1> Enter Data <h1><br>
                  <form> action="saveAuthor.php" method="post" class="form-horizontal">
                    <div class="from-group">
                    <label for="first_name">Enter your first name:</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id= "first_name" name="firstname" placeholder="first name"<br>
                   </div>
            </div>
            
                 <label for="last_name">Enter your last name:</label>
                 <>
   <input type="text" name="lastname"><br>
   <label for="signup_date">Enter a date:</label>
   <input type="date" name="signup_date"><br>
   <input type="submit" value= "Submit">
 
</form>
                 
  
