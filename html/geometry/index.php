<?php include "starter.html"; ?>
<script src="geometry.js"></script>
<?php include "../navbar.html"; ?>
	    <div class="container">
			<h1 class="jumbotron banner-jumbo">Aidan's Geometry Stuff - <a href="instructions.txt">Instructions</a></h1>
			<div class="row">
				<div class="col-md-3 card card-body bg-light card-section">
					<h2 class="form-signing-heading">Circle Area</h2>
					<div class="input-group mb-4">
					  <div class="input-group-prepend">
						<span class="input-group-text">r:</span>
					  </div>
					  <input type="text" id="circ_inputr">
					</div>
					  <p id="circ_area">Area:</p>
                      <button onclick="circ_area()" class="btn btn-primary btn-block button">Run</button>
				</div>				
				<div class="col-md-3 card card-body bg-light card-section">
					<h2 class="form-signing-heading">Sphere Volume</h2>
					<div class="input-group mb-4">
					  <div class="input-group-prepend">
						<span class="input-group-text">r:</span>
					  </div>
					  <input type="text" id="sphere_inputr">
					</div>
					  <p id="sphere_area">Area:</p>
                      <button onclick="sphere_area()" class="btn btn-primary btn-block button">Run</button>
				</div>
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
			</div>
			
			<div class="row second-row">
			    <div class="col-md-3 card card-body bg-light card-section">
                    <h2 class="form-signing-heading">Triangle Area</h2>
                                <div class="input-group mb-4">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Base:</span>
                                  </div>
                                  <input type="text" id="tri_inputb">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Height:</span>
                                  </div>
                                  <input type="text" id="tri_inputh">
                                </div>
                          <p id="tri_area">Area:</p>
                      <button onclick="tri_area()" class="btn btn-primary btn-block button">Run</button>
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
              <div class="col-md-3 card card-body bg-light card-section">
                    <h2 class="form-signing-heading">Cone Volume</h2>
                                <div class="input-group mb-4">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Radius:</span>
                                  </div>
                                  <input type="text" id="cone_inputr">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Height:</span>
                                  </div>
                                  <input type="text" id="cone_inputh">
                                </div>
                                 <p id="cone_solution">Volume:</p>
                      <button onclick="cone_area()" class="btn btn-primary btn-block button">Run</button>
                </div>
	    </div>
        </div>
    </body>
</html>
