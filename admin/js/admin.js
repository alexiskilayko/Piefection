var user = document.getElementById('users-div');
var uploads = document.getElementById('uploads-div');
var slideshow = document.getElementById('slideshow-div');

function toggleUsers() {
	if (user.style.display == "none") {
		user.style.display = "block";
		uploads.style.display = "none";
		slideshow.style.display = "none";
	} 
}
function toggleUploads() {
	if (uploads.style.display == "none") {
		user.style.display = "none";
		uploads.style.display = "block";
		slideshow.style.display = "none";
	}
}
function toggleSlideshow() {
	if (slideshow.style.display == "none") {
		user.style.display = "none";
		uploads.style.display = "none";
		slideshow.style.display = "block";
	}
}
