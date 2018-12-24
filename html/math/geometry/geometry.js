function increment($type) {
        $.post("../statistics/inputhandler.php", {type: $type});
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
	increment('pythagorean_converse');
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
		increment('pythagorean_theorem');
    }
