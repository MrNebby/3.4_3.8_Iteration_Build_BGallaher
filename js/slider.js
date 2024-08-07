// setting up an index
let slideIndex = 1;
showSlides(slideIndex);

// function to change slides by 1
function plusSlides(n) {
	showSlides(slideIndex += n);
}

// function to change to specific slide
function currentSlide(n) {
	showSlides(slideIndex = n);
}

// function to display wanted slide
function showSlides(n) {
	let i;
	let slides = document.getElementsByClassName("slides");
	let dots = document.getElementsByClassName("dot");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
}