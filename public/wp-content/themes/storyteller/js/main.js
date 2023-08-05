function openSideMenu() {
    document.getElementById("side-menu").style.width = "250px";
    document.querySelector(".side-nav-links").style.display = "block";
}

function closeSideMenu() {
    document.getElementById("side-menu").style.width = "0";
    document.querySelector(".side-nav-links").style.display = "none";
    closeForms();
}

const videoElement = document.querySelector("#video");
const videoPlayerElement = document.querySelector("#video-player");

function playVideo(e) {
    videoElement.src = e;
    videoPlayerElement.style.display = "block";
}

function stopVideo() {
    videoElement.pause();
    videoPlayerElement.style.display = "none";
}

const link = document.querySelector('.link');


const contactForm = document.querySelector('.contact-form');
const applicationForm = document.querySelector('.become-a-mentor-form');


function displayContactForm() {
    contactForm.style.display = 'block';
}

function displayApplicationForm() {
    applicationForm.style.display = 'block';
}

function closeForms() {
    contactForm.style.display = 'none';
    applicationForm.style.display = 'none';
}
