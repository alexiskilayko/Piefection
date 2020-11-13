/* opening tabs */ 

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

/* slide show */

function nextSlide() {
	crtSlideToShow = crtSlideToShow + 1;
	if (crtSlideToShow >= slides.length) { crtSlideToShow = 0; };
	showCurrentSlide();
}

function prevSlide() {
	crtSlideToShow = crtSlideToShow - 1; 
	if (crtSlideToShow < 0) {crtSlideToShow = slides.length - 1};
	showCurrentSlide();
}

function currentSlide(n) {
	crtSlideToShow = n;
	showCurrentSlide();
}

function showCurrentSlide() {
	// slideIndex: the active among mySlide and dots
	var i;
	// hide all div mySlide
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	}
	// deactivate all div dot
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	// activate current slide and dot
	slides[crtSlideToShow].style.display = "block";  
	dots[crtSlideToShow].className += " active";
}
