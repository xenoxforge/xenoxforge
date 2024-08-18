var width = 100,
perfData = window.performance.timing, 
EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
time = parseInt((EstimatedTime/1000)%60)*100;

$(".loadbar").animate({
width: width + "%"
}, time);


$(".glow").animate({
width: width + "%"
}, time);


var PercentageID = $("#precent"),
start = 0,
end = 100,
durataion = time;
animateValue(PercentageID, start, end, durataion);

function animateValue(id, start, end, duration) {

var range = end - start,
  current = start,
  increment = end > start? 1 : -1,
  stepTime = Math.abs(Math.floor(duration / range)),
  obj = $(id);

var timer = setInterval(function() {
current += increment;
$(obj).text(current + "%");

if (current == end) {
  clearInterval(timer);
}
}, stepTime);
}



const scrollButton = document.getElementById('atom_scroll');
const targetElement = document.getElementById('atom_init');

scrollButton.addEventListener('click', () => {
targetElement.scrollIntoView({ behavior: 'smooth' });
});
const lazyLoadImages = document.querySelectorAll(".lazy-load");

function lazyLoad() {
lazyLoadImages.forEach((img) => {
  if (isElementInViewport(img)) {
    const dataSrc = img.getAttribute("data-src");
    if (dataSrc) {
      img.setAttribute("src", dataSrc);
      img.removeAttribute("data-src");
    }
    img.classList.add("animate__animated", "animate__fadeIn");
    img.style.opacity = "1";
    img.style.visibility = "visible";
  }
});
}

window.addEventListener("scroll", lazyLoad);
window.addEventListener("load", lazyLoad);

function isElementInViewport(el) {
const rect = el.getBoundingClientRect();
return (
  rect.top >= 0 &&
  rect.left >= 0 &&
  rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
  rect.right <= (window.innerWidth || document.documentElement.clientWidth)
);
}

const atom11Images = document.querySelectorAll(".hex");

function isElementInViewport(el) {
const rect = el.getBoundingClientRect();
return (
  rect.top >= 0 &&
  rect.left >= 0 &&
  rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
  rect.right <= (window.innerWidth || document.documentElement.clientWidth)
);
}

function handleScroll() {
atom11Images.forEach((img) => {
  if (isElementInViewport(img)) {
    img.classList.add("anihhmate__animated", "animate__fadeIn");
    img.style.opacity = "1";
    img.style.visibility = "visible";
  }
});
}

window.addEventListener("scroll", handleScroll);


window.addEventListener("load", handleScroll);