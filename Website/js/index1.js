$(document).ready(function(){
	// Declaring the amount of employees
	var numberOfEmployees = $(".teamMember").length;
	// Set a random number between 1 and the numberOfEmployees
	var randomNum = Math.floor((Math.random() * numberOfEmployees) + 1);
	// Targets the specific employee and highlights them
	$(".teamMember:nth-child("+randomNum+")").addClass("randomMember");		

	// Loop through and change highlighted employee every 3.5 seconds
	setInterval(function(){
		// Removes all highlighting
		$(".teamMember").removeClass("randomMember");
		// Repeats the above to highlight new random employee
		randomNum = Math.floor((Math.random() * numberOfEmployees) + 1);
		$(".teamMember:nth-child("+randomNum+")").addClass("randomMember");		
	},3500);
		
});