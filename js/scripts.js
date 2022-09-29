

// When the user scrolls the page, execute myFunction. Source: W3Schools
window.onscroll = function() { scrollFunction() };
// Get the navbar
var navbar = document.getElementById("navbar");
// Get the offset position of the navbar
var sticky = navbar.offsetTop;
// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function scrollFunction() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky")
	} else {
		navbar.classList.remove("sticky");
	}
}

//shows user name and logout and drk modebuttons 
//when user clicks on profile button on top- 
//right of the navbar in profile page
function expandWindow() {
	var x = document.getElementById("profile-info-container");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
//When user clicks somewhere else info box disapears
document.addEventListener('mouseup', function(e) {
	var container = document.getElementById('profile-info-container');
	if (!container.contains(e.target)) {
		container.style.display = 'none';
	}
});




