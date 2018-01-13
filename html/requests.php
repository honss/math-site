<?php include "starter.html"; ?>
<?php include "navbar.html"; ?>
		<hr>
		<div class="container">
			<div class="card">
				<div class= "card-header">
				Requests for Me
				</div>
				<div class="card-body bg-light">
					<form action="RequestFormHandler.php"method="post">
					  <div class="form-group">
						<label for="exampleInputName">Name</label>
						<input type="text" name="Name" class="form-control" id="Name" aria-describedby="nameHelp" placeholder="Enter name">
						<small id="nameHelp" class="form-text text-muted">Completely optional.</small>
					  </div>
					  <div class="form-group">
						<label for="exampleInputMessage">Message</label>
						<input type="text" name="Message" class="form-control" id="Message" placeholder="Message">
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					  <hr>
					  <p>Basically anything you want to be added. (Showing work is <b>waaaaaay</b> to boring for me to consider)</p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>