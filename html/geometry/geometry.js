function circ_area() {
	var r = document.getElementById("circ_inputr").value;
	document.getElementById("circ_area").innerHTML = "Area: "+Math.PI*Math.pow(r,2);
}
function cone_area() {
	var r = document.getElementById("cone_inputr").value;
	var h = document.getElementById("cone_inputh").value;
	var solution = Math.PI*Math.pow(r,2)*h/3
	document.getElementById("cone_solution").innerHTML = "Volume: "+solution;
}

function sphere_area() {
	var r = document.getElementById("sphere_inputr").value;
	var area = (4/3)*Math.PI*Math.pow(r,2);
	document.getElementById("sphere_area").innerHTML = "Area: "+area;
} 
function tri_area() {
	var b = document.getElementById("tri_inputb").value;
	var h = document.getElementById("tri_inputh").value;
	document.getElementById("tri_area").innerHTML = "Area: "+0.5*b*h;
}
function converse() {
        var a = parseFloat(document.getElementById("conv_inputa").value);
        var b = parseFloat(document.getElementById("conv_inputb").value);
        var c = parseFloat(document.getElementById("conv_inputc").value);
        var checkab = Math.pow(a,2)+Math.pow(b,2); 
	var checkc =  Math.pow(c,2);	
	if(checkab<checkc) {var conv_solution = "Solution: Obtuse Triangle";};
	if(checkab>checkc) {var conv_solution = "Solution: Acute Triangle";};
	if(checkab==checkc) {var conv_solution = "Solution: Right Triangle";};
        document.getElementById("conv_solution").innerHTML = conv_solution;
}

function pyth() {
        var a = parseFloat(document.getElementById("pyth_inputa").value);
        var b = parseFloat(document.getElementById("pyth_inputb").value);
        var c = parseFloat(document.getElementById("pyth_inputc").value);
        if(isNaN(a)) {
            var first = -1*Math.pow(b,2);
            var second = Math.pow(c,2);
            var pyth_solutiona = first+second;
	    var temp = first+second;
            document.getElementById("pyth_solution").innerHTML = "Solution: "+Math.sqrt(pyth_solutiona)+", or sqrt("+pyth_solutiona+")";
        }
        if(isNaN(b)) {
            var first = -1*Math.pow(a,2);
            var second = Math.pow(c,2);
            var pyth_solutionb = first+second;
            document.getElementById("pyth_solution").innerHTML = "Solution: "+Math.sqrt(pyth_solutionb)+", or sqrt("+pyth_solutionb+")";
        }
        if(isNaN(c)) {
            var pyth_solutionc = Math.pow(a,2)+Math.pow(b,2);
            document.getElementById("pyth_solution").innerHTML = "Solution: "+Math.sqrt(pyth_solutionc)+", or sqrt("+pyth_solutionc+")";
        }

    }
