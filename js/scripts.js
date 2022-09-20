/**
 * 
 */
//shows an info when user clicks on question mark on signup form
function myFunction() {
	var x = document.getElementById("birthday-info-container");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
//When user clicks somewhere else info box disapears
document.addEventListener('mouseup', function(e) {
	var container = document.getElementById('birthday-info-container');
	if (!container.contains(e.target)) {
		container.style.display = 'none';
	}
});

function genderFunction() {
	var x = document.getElementById("gender-info-container");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

document.addEventListener('mouseup', function(e) {
	var container = document.getElementById('gender-info-container');
	if (!container.contains(e.target)) {
		container.style.display = 'none';
	}
});
//More study needed to go into this in order for the dark mode to presiste
// even when refreshing the page. Changes only, on the user command.
function darkMode() {
	var element = document.body;
	element.classList.toggle("darkmode");
}
//this expands the form when user selects "custom gender"
function expand() {
	if (document.getElementById("other").checked) {
		document.getElementById("toExpand").style.visibility = "visible";
		document.getElementById("toExpand").style.display = "block";
		const list = document.getElementById("myForm").classList;
		list.add("sign-up-form-expanded");
	}
	else if (document.getElementById("female").checked) {
		document.getElementById("toExpand").style.visibility = "hidden";
		document.getElementById("toExpand").style.display = "none";
		const list = document.getElementById("myForm").classList;
		list.remove("sign-up-form-expanded");

	}
	else if (document.getElementById("male").checked) {
		document.getElementById("toExpand").style.visibility = "hidden";
		document.getElementById("toExpand").style.display = "none";
		const list = document.getElementById("myForm").classList;
		list.remove("sign-up-form-expanded");

	}
	else
		return;
}

function expandDrk() {
	if (document.getElementById("other1").checked) {
		document.getElementById("toExpandDark").style.visibility = "visible";
		document.getElementById("toExpandDark").style.display = "block";
		const list = document.getElementById("myForm").classList;
		list.add("sign-up-form-expanded");
	}
	else if (document.getElementById("female1").checked) {
		document.getElementById("toExpandDark").style.visibility = "hidden";
		document.getElementById("toExpandDark").style.display = "none";
		const list = document.getElementById("myForm").classList;
		list.remove("sign-up-form-expanded");

	}
	else if (document.getElementById("male1").checked) {
		document.getElementById("toExpandDark").style.visibility = "hidden";
		document.getElementById("toExpandDark").style.display = "none";
		const list = document.getElementById("myForm").classList;
		list.remove("sign-up-form-expanded");

	}
	else
		return;
}

/** closes the success alert after signup. Source: W3Schools */
// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
	// When someone clicks on a close button
	close[i].onclick = function() {
		// Get the parent of <span class="closebtn"> (<div class="alert">)
		var div = this.parentElement;
		// Set the opacity of div to 0 (transparent)
		div.style.opacity = "0";
		// Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
		setTimeout(function() { div.style.display = "none"; }, 600);
	}
}

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

/*profile top tabs*/
const element1 = document.getElementById("about").classList;
const element2 = document.getElementById("posts").classList;
const element3 = document.getElementById("friends").classList;
const element4 = document.getElementById("photos").classList;
function blueBottom() {
	if (document.getElementById("about")) {
		document.getElementById("about-left-column").style.visibility = "visible";
		element1.add("profile-nav-buttons-blue");
		element1.remove("profile-nav-buttons");
		element2.remove("profile-nav-buttons-blue");
		element3.remove("profile-nav-buttons-blue");
		element4.remove("profile-nav-buttons-blue");
	} else {
		element1.remove("profile-nav-buttons-blue");
		element1.add("profile-nav-buttons");
	}
}

function blueBottom2() {
	if (document.getElementById("posts")) {
		document.getElementById("about-left-column").style.visibility = "hidden";
		document.getElementById("contact-and-basic-info").style.visibility = "hidden";
		document.getElementById("overview1").style.visibility = "hidden";
		document.getElementById("security1").style.visibility = "hidden";
		element2.add("profile-nav-buttons-blue");
		element2.remove("profile-nav-buttons");
		element1.remove("profile-nav-buttons-blue");
		element3.remove("profile-nav-buttons-blue");
		element4.remove("profile-nav-buttons-blue");
	} else {
		element2.remove("profile-nav-buttons-blue");
		element2.add("profile-nav-buttons");
	}
}

function blueBottom3() {
	if (document.getElementById("friends")) {
		document.getElementById("about-left-column").style.visibility = "hidden";
		document.getElementById("contact-and-basic-info").style.visibility = "hidden";
		document.getElementById("overview1").style.visibility = "hidden";
		document.getElementById("security1").style.visibility = "hidden";
		element3.add("profile-nav-buttons-blue");
		element3.remove("profile-nav-buttons");
		element1.remove("profile-nav-buttons-blue");
		element2.remove("profile-nav-buttons-blue");
		element4.remove("profile-nav-buttons-blue");
	} else {
		element3.remove("profile-nav-buttons-blue");
		element3.add("profile-nav-buttons");
	}
}

function blueBottom4() {
	if (document.getElementById("photos")) {
		document.getElementById("about-left-column").style.visibility = "hidden";
		document.getElementById("contact-and-basic-info").style.visibility = "hidden";
		document.getElementById("overview1").style.visibility = "hidden";
		document.getElementById("security1").style.visibility = "hidden";
		element4.add("profile-nav-buttons-blue");
		element4.remove("profile-nav-buttons");
		element1.remove("profile-nav-buttons-blue");
		element2.remove("profile-nav-buttons-blue");
		element3.remove("profile-nav-buttons-blue");
	} else {
		element4.remove("profile-nav-buttons-blue");
		element4.add("profile-nav-buttons");
	}
}

/*changes colors on selected "about buttons" and shows related info*/
const about = document.getElementById("about-left-column").classList;
const ov = document.getElementById("overview").classList;
const c = document.getElementById("contact").classList;
const s = document.getElementById("security").classList;
function changeColors() {
	if (document.getElementById("overview")) {
		document.getElementById("about-left-column").style.visibility = "visible";
		document.getElementById("contact-and-basic-info").style.visibility = "hidden";
		document.getElementById("overview1").style.visibility = "visible";
		document.getElementById("security1").style.visibility = "hidden";
		ov.add("left-columns-buttons-clicked");
		c.remove("left-columns-buttons-clicked");
		s.remove("left-columns-buttons-clicked");
	} else {
		ov.remove("left-columns-buttons-clicked");
		ov.add("left-columns-buttons");
	}
}

function changeColors2() {
	if (document.getElementById("contact")) {
		document.getElementById("about-left-column").style.visibility = "visible";
		document.getElementById("contact-and-basic-info").style.visibility = "visible";
		document.getElementById("overview1").style.visibility = "hidden";
		document.getElementById("security1").style.visibility = "hidden";
		c.add("left-columns-buttons-clicked");
		ov.remove("left-columns-buttons-clicked");
		s.remove("left-columns-buttons-clicked");
	} else {
		c.remove("left-columns-buttons-clicked");
		c.add("left-columns-buttons");
	}
}

function changeColors3() {
	if (document.getElementById("security")) {
		document.getElementById("about-left-column").style.visibility = "visible";
		document.getElementById("security1").style.visibility = "visible";
		document.getElementById("contact-and-basic-info").style.visibility = "hidden";
		document.getElementById("overview1").style.visibility = "hidden";
		s.add("left-columns-buttons-clicked");
		ov.remove("left-columns-buttons-clicked");
		c.remove("left-columns-buttons-clicked");
	} else {
		s.remove("left-columns-buttons-clicked");
		s.add("left-columns-buttons");
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

//Prompts user toupload cover pic
function expandWindow2() {
	var x = document.getElementById("cover-photo-upload");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
//When user clicks somewhere else info box disapears
document.addEventListener('mouseup', function(e) {
	var container = document.getElementById('cover-photo-upload');
	if (!container.contains(e.target)) {
		container.style.display = 'none';
	}
});

//Prompts user to update fname
function editName() {
	var x = document.getElementById("edit-fname");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

//When user clicks somewhere else info box disapears
document.addEventListener('mouseup', function(e) {
	var container = document.getElementById("edit-fname");
	if (!container.contains(e.target)) {
		container.style.display = 'none';
	}
});

function expandEditFname() {
	document.getElementById("edit-fname-expanded").style.visibility = "visible";
	document.getElementById("edit-fname-expanded").style.display = "block";
	const list = document.getElementById("edit-fname").classList;
	list.add("editFname-expanded");
	list.remove("edit-fname");
}

/*Login ajax*/
function loginAjax(form) {
	var user = new Object();
	user.email = form.email.value;
	user.paswd = form.paswd.value;
	var jsonUser = JSON.stringify(user);
	console.log(user.email);
	console.log(user.paswd);
	console.log(jsonUser);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("result").innerHTML = this.responseText;
			//Empty form fields
			form.email.value = "";
			form.paswd.value = "";
		}
	};
	xmlhttp.open("POST", "./rest/services/login", true);
	xmlhttp.setRequestHeader("Content-type", "application/json");
	xmlhttp.send(jsonUser);
}

function AutoRefresh(t) {
	setTimeout("location.reload(true);", t);
}

input.addEventListener("keypress", function(event) {
	if (event.key === "Enter") {
		event.preventDefault();
		document.getElementById("myBtn").click();
	}
});

function editEmail() {
	var x = document.getElementById("edit-email1");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

//When user clicks somewhere else info box disapears
function mouseUp() {
	document.addEventListener('mouseup', function(e) {
		var container = document.getElementById("edit-email1");
		if (!container.contains(e.target)) {
			container.style.display = 'none';
		}
	});
}


function expandEditEmail() {
	document.getElementById("edit-email-expanded").style.visibility = "visible";
	document.getElementById("edit-email-expanded").style.display = "block";
	const list = document.getElementById("edit-email1").classList;
	list.add("editEmail-expanded");
	list.remove("edit-email1");
}

/*function loginAjax(form) {
	var user = new Object();
	user.email = form.email.value;
	user.paswd = form.paswd.value;
	var jsonUser = JSON.stringify(user).serializeArray();

	 $.ajax({type: "POST",
	url:"./login",
	data:jsonUser,
	success:function(result){
	alert("Success");
	}
  });
}*/

function editBasic() {
	var x = document.getElementById("edit-basic");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

//When user clicks somewhere else info box disapears
function mouseUp2() {
	document.addEventListener('mouseup', function(e) {
		var container2 = document.getElementById("edit-basic");
		if (!container2.contains(e.target)) {
			container2.style.display = 'none';
		}
	});
}

function expandEditBasic() {
	document.getElementById("edit-basic-expanded").style.visibility = "visible";
	document.getElementById("edit-basic-expanded").style.display = "block";
	const list = document.getElementById("edit-basic").classList;
	list.add("editBasic-expanded");
	const list1 = document.getElementById("basic-info-form").classList;
	list1.add("basic-info-form");
}

//this expands the form when user selects "custom gender"
function expand2() {
	if (document.getElementById("other").checked) {
		document.getElementById("toExpand").style.visibility = "visible";
		document.getElementById("toExpand").style.display = "block";
		const list = document.getElementById("basic-info-form").classList;
		list.add("basic-info-form-expanded");
		list.remove("basic-info-form")

	}
	else if (document.getElementById("female").checked) {
		document.getElementById("toExpand").style.visibility = "hidden";
		document.getElementById("toExpand").style.display = "none";
		const list = document.getElementById("basic-info-form").classList;
		list.remove("basic-info-form-expanded");
		list.add("basic-info-form");
	}
	else if (document.getElementById("male").checked) {
		document.getElementById("toExpand").style.visibility = "hidden";
		document.getElementById("toExpand").style.display = "none";
		const list = document.getElementById("basic-info-form").classList;
		list.remove("basic-info-form-expanded");
		list.add("basic-info-form");
	}
	else
		return;
}

function editBirthday() {
	var x = document.getElementById("edit-Birthday");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

//When user clicks somewhere else info box disapears
function mouseUp4() {
	document.addEventListener('mouseup', function(e) {
		var container = document.getElementById("edit-Birthday");
		if (!container.contains(e.target)) {
			container.style.display = 'none';
		}
	});
}

function expandEditBirthday() {
	document.getElementById("edit-Birthday-expanded").style.visibility = "visible";
	document.getElementById("edit-Birthday-expanded").style.display = "block";
	const list = document.getElementById("edit-Birthday").classList;
	list.add("editBirthdayExpanded");
	list.remove("edit-email1");
}

function editPaswd() {
	var x = document.getElementById("edit-paswd");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

//When user clicks somewhere else info box disapears
function mouseUp5() {
	document.addEventListener('mouseup', function(e) {
		var container = document.getElementById("edit-paswd");
		if (!container.contains(e.target)) {
			container.style.display = 'none';
		}
	});
}


function expandEditPaswd() {
	document.getElementById("edit-paswd-expanded").style.visibility = "visible";
	document.getElementById("edit-paswd-expanded").style.display = "block";
	const list = document.getElementById("edit-paswd").classList;
	list.add("editEmail-expanded");
	list.remove("edit-paswd");
}

function AutoRefresh(t) {
	setTimeout("location.reload(true);", t);
}

function PswUpdateAlert() {
	alert("Your password has been updated successfully!");
}

function deletionAlert() {
	alert("Your account has been deleted successfully!");
}

input.addEventListener("keypress", function(event) {
	if (event.key === "Enter") {
		event.preventDefault();
		document.getElementById("myBtn").click();
	}
});

function deleteWindow() {
	var x = document.getElementById("delete-account");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

//When user clicks somewhere else info box disapears
function mouseUp6() {
	document.addEventListener('mouseup', function(e) {
		var container = document.getElementById("delete-account");
		if (!container.contains(e.target)) {
			container.style.display = 'none';
		}
	});
}

/*//Upload
const imgDiv = document.querySelector('.cover-photo-block');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

imgDiv.addEventListener('mouseenter', function() {
	uploadBtn.style.display = "block";
});
imgDiv.addEventListener('mouseleave', function() {
	uploadBtn.style.display = "none";
});
file.addEventListener('change', function() {
	const pickedFile = this.files[0];
	if (pickedFile) {
		const reader = new FileReader();
		reader.addEventListener('load', function() {
			img.setAttribute('src', reader.result);
		});
		reader.readAsDataURL(pickedFile);
	}
});*/

function editAll() {
	var x = document.getElementById("edit-all");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}

//When user clicks somewhere else info box disapears
function mouseUp7() {
	document.addEventListener('mouseup', function(e) {
		var container = document.getElementById("edit-all");
		if (!container.contains(e.target)) {
			container.style.display = 'none';
		}
	});
}
