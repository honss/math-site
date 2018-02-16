<?php include "starter.html"; ?>
<script src="areas.js"></script>
<meta name="description" content="Aidan's math calculator stuff, now with extra cheese.">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<?php include "../navbar.html"; ?>
	    <div class="container">
			<h1 class="jumbotron banner-jumbo">Aidan's Boring Area/Volume Stuff</h1>
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
					<p id="sphere_volume">Area:</p>
		            <button onclick="sphere_volume()" class="btn btn-primary btn-block button">Run</button>
				</div>
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

			</div>

			<div class="row second-row">
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
                	<button onclick="cone_volume()" class="btn btn-primary btn-block button">Run</button>
                </div>
	    		<div class="col-md-3 card card-body bg-light card-section">
                    			<h2 class="form-signing-heading">Cylinder Volume</h2>
                                <div class="input-group mb-4">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Radius:</span>
                                  </div>
                                  <input type="text" id="cyl_inputr">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Height:</span>
                                  </div>
                                  <input type="text" id="cyl_inputh">
                                </div>
                                <p id="cyl_solution">Volume:</p>
                      			<button onclick="cyl_volume()" class="btn btn-primary btn-block button">Run</button>
			   </div>
			   <div class="col-md-3 card card-body bg-light card-section">
                    			<h2 class="form-signing-heading">Square Pyramid Volume</h2>
                                <div class="input-group mb-4">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Side #1:</span>
                                  </div>
                                  <input type="text" id="sqr_pyr_inputs1">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Side #2:</span>
                                  </div>
                                  <input type="text" id="sqr_pyr_inputs2">
								</div>
								<div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Height:</span>
                                  </div>
                                  <input type="text" id="sqr_pyr_inputh">
                                </div>
                                <p id="sqr_pyr_volume">Volume:</p>
                      			<button onclick="sqr_pyr_volume()" class="btn btn-primary btn-block button">Run</button>
        	  </div>
	    </div>
      </div>
  </body>
</html>
