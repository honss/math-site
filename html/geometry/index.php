<?php include "starter.html"; ?>
<script src="geometry.js"></script>
<?php include "../navbar.html"; ?>
	    <div class="container">
			<h1 class="jumbotron banner-jumbo">Aidan's Geometry Stuff - <a href="instructions.txt">Instructions</a></h1>
			<div class="alert alert-danger" role="alert">
  				Formulas for area and volume have/will be moved to another page due to clutter (check index)
			</div>
			<div class="row">
				<div class="col-md-3 card card-body bg-light card-section">
					<h2 class="form-signing-heading">Pythagorean Theorem</h2>
					<small id="pyth_intructions" class="form-text text-muted">Just enter 2 values</small>
					<div class="input-group mb-4">
						<div class="input-group-prepend">
							<span class="input-group-text">A:</span>
						</div>
						<input type="text" id="pyth_inputa">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">B:</span>
						</div>
						<input type="text" id="pyth_inputb">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">C:</span>
						</div>
						<input type="text" id="pyth_inputc"> 
					</div>
					<p id="pyth_solution">Solution:</p>
					<button onclick="pyth()" class="btn btn-primary btn-block button">Run</button>
				</div>
			    <div class="col-md-3 card card-body bg-light card-section">
                    <h2 class="form-signing-heading">Pythagorean Theorem Converse</h2>
                                <div class="input-group mb-4">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">A:</span>
                                  </div>
                                  <input type="text" id="conv_inputa">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">B:</span>
                                  </div>
                                  <input type="text" id="conv_inputb">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">C:</span>
                                  </div>
                                  <input type="text" id="conv_inputc">
                                </div>
                          <p id="conv_solution">Solution:</p>
                      <button onclick="converse()" class="btn btn-primary btn-block button">Run</button>
              </div>
           </div>
        </div>
    </body>
</html>
