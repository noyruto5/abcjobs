$(document).ready(function(){

	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}

	/*
	*	Codes for sms modal
	*/
	// Get the modal
	var modal1 = document.getElementById('myModal1');
	var modal2 = document.getElementById('myModal2');

	// Get the button that opens the modal
	var btn1 = document.getElementById("btn-reject");
	var btn2 = document.getElementById("btn-accept");

	// Get the <span> element that closes the modal
	var span1 = document.getElementById("modal1-close");
	var span2 = document.getElementById("modal2-close");

	// When the user clicks on the button, open the modal 
	btn1.onclick = function() {
	    modal1.style.display = "block";
	}

	btn2.onclick = function() {
	    modal2.style.display = "block";
	}

	// // When the user clicks on <span> (x), close the modal
	span1.onclick = function() {
	    modal1.style.display = "none";
	}

	span2.onclick = function() {
	    modal2.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal1) {
	        modal1.style.display = "none";
	    } else if (event.target == modal2) {
	    	modal2.style.display = "none";
	    }
	}

	
});

