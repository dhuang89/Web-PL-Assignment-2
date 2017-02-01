//Dennis Huang dlh4fx

window.onload = function () {
    document.getElementById("short_answer").style.display="none";
    document.getElementById("true_false").style.display="none";
    document.getElementById("multiple_choice").style.display="none";
}



function formSelect() {
	var value = document.getElementById("questions").value;

	if (value == "short") {
		document.getElementById("short_answer").style.display="block";
		document.getElementById("true_false").style.display="none";
		document.getElementById("multiple_choice").style.display="none";
	}

	else if (value == "truefalse") {
		document.getElementById("short_answer").style.display="none";
		document.getElementById("true_false").style.display="block";
		document.getElementById("multiple_choice").style.display="none";
	}

	else if (value == "mul") {
		document.getElementById("short_answer").style.display="none";
		document.getElementById("true_false").style.display="none";
		document.getElementById("multiple_choice").style.display="block";
	}
		
	
	
}