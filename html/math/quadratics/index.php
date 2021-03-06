<?php include "starter.html"; ?>
<meta name="description" content="Aidan's math calculator stuff, now with extra cheese.">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<?php include "../navbar.html"; ?>
	    <div class="container">
			<h1 class="jumbotron banner-jumbo">Aidan's Quadratics Stuff - <a href="instructions.txt">Instructions</a></h1>
			<div class="row">
				<div class="col-md-3 card card-body bg-light card-section">
					<h2 class="form-signing-heading">Quadratic Formula</h2>
					<div class="input-group mb-4">
					  <div class="input-group-prepend">
						<span class="input-group-text">A:</span>
					  </div>
					  <input type="text" id="quad_inputa">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">B:</span>
					  </div>
					  <input type="text" id="quad_inputb">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">C:</span>
					  </div>
					  <input type="text" id="quad_inputc">
                  </div>
					  <p id="quad_solution">Solution:</p>
					  <p id="quad_vertex">Vertex: </p>
                      <button onclick="quadratic()" class="btn btn-primary btn-block button">Run</button>
				</div>
				<div class="col-md-3 card card-body bg-light card-section">
					<h2 class="form-signing-heading">Function Finder # 1</h2>
					<div class="input-group mb-4">
					  <div class="input-group-prepend">
						<span class="input-group-text">Vertex X:</span>
					  </div>
					  <input type="text" id="func1_input1x">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">Vertex Y:</span>
					  </div>
					  <input type="text" id="func1_input1y">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">Point X:</span>
					  </div>
					  <input type="text" id="func1_input2x">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">Point Y:</span>
					  </div>
					  <input type="text" id="func1_input2y">
					</div>
					  <p id="func1_solution">Equation:</p>
                      <button onclick="func1()" class="btn btn-primary btn-block button">Run</button>
				</div>
				<div class="col-md-3 card card-body bg-light card-section">
					<h2 class="form-signing-heading">Function Finder # 2</h2>
					<div class="input-group mb-4">
					  <div class="input-group-prepend">
						<span class="input-group-text">Zero 1 X:</span>
					  </div>
					  <input type="text" id="func2_inputx1">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">Zero 2 X:</span>
					  </div>
					  <input type="text" id="func2_inputx2">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">Point X:</span>
					  </div>
					  <input type="text" id="func2_inputpx">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">Point Y:</span>
					  </div>
					  <input type="text" id="func2_inputpy">
					</div>
					  <p id="func2_solution">Equation:</p>
                      <button onclick="func2()" class="btn btn-primary btn-block button">Run</button>
				</div>
			</div>
			<div class="row second-row">
			    <div class="col-md-3 card card-body bg-light card-section">
                    <h2 class="form-signing-heading">Completing the Square</h2>
                                <div class="input-group mb-4">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">A:</span>
                                  </div>
                                  <input type="text" id="square_inputa">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">B:</span>
                                  </div>
                                  <input type="text" id="square_inputb">
                                </div>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">C:</span>
                                  </div>
                                  <input type="text" id="square_inputc">
                                </div>
                          <p id="square_solution">Solution:</p>
                      <button onclick="square()" class="btn btn-primary btn-block button">Run</button>
                </div>
				<div class="col-md-4 card card-body bg-light card-section">
					<h2 class="form-signing-heading">Y-Solver</h2>
						<div class="input-group mb-4">
							<div class="input-group-prepend">
								<span class="input-group-text">A:</span>
							</div>
							<input type="text" id="ysolve_inputa">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">B:</span>
							</div>
							<input type="text" id="ysolve_inputb">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">C:</span>
							</div>
							<input type="text" id="ysolve_inputc">
						</div>				
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">X:</span>
							</div>
							<input type="text" id="ysolve_inputx">
						</div>
						<small id="" class="form-text text-muted">Outputs Y for an X</small>
						<p id="ysolve_solution">Solution:</p>
									<button onclick="ysolve()" class="btn btn-primary btn-block button">Run</button>
				</div>
				<div class="col-md-3 card card-body bg-light card-section">
					<h2 class="form-signing-heading">Function Combiner</h2>
					<div class="input-group mb-4">
					  <div class="input-group-prepend">
						<span class="input-group-text">A #1:</span>
					  </div>
					  <input type="text" id="comb_inputa1">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">B #1:</span>
					  </div>
					  <input type="text" id="comb_inputb1">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">C #1:</span>
					  </div>
					  <input type="text" id="comb_inputc1">
					</div>	
					<hr class="card-splitter">
					<div class="input-group mb-4">
					  <div class="input-group-prepend">
						<span class="input-group-text">A #2:</span>
					  </div>
					  <input type="text" id="comb_inputa2">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">B #2:</span>
					  </div>
					  <input type="text" id="comb_inputb2">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
						<span class="input-group-text">C #2:</span>
					  </div>
					  <input type="text" id="comb_inputc2">
					</div>
					<p id="comb_solution">Solution:</p>
                    <button onclick="func_combiner()" class="btn btn-primary btn-block button">Run</button>
				</div>
			</div>
        </div>
    </body>
</html>
