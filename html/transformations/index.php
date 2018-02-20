<?php include "starter.html"; ?>
<script src="transformations.js"></script>
<meta name="description" content="Aidan's math calculator stuff, now with extra cheese.">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<?php include "../navbar.html"; ?>
	    <div class="container">
			<h1 class="jumbotron banner-jumbo">Aidan's Transformations Stuff</h1>
			<div class="row">
				<div class="col-md-3 card card-body bg-light card-section">
                    <h2 class="form-signing-heading">Dilations</h2>
                                <div class="input-group mb-4">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Point X:</span>
                                  </div>
                                  <input type="text" id="dil_inputpx">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Point Y:</span>
                                  </div>
                                  <input type="text" id="dil_inputpy">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Center X:</span>
                                  </div>
                                  <input type="text" id="dil_inputcx">
								</div>
								<div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Center Y:</span>
                                  </div>
                                  <input type="text" id="dil_inputcy">
								</div>
								<div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Factor (decimal):</span>
                                  </div>
                                  <input type="text" id="dil_inputf">
                                </div>
                          <p id="dil_solution">Solution:</p>
                      <button onclick="dilation()" class="btn btn-primary btn-block button">Run</button>
              </div>
           </div>
        </div>
    </body>
</html>
