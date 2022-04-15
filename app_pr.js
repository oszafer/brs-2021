const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector(".nextBtn");
const prevBtn = document.querySelector(".prevBtn");
const pbtn = document.querySelector(".pbtn");
const nbtn = document.querySelector(".nbtn");



slides.forEach(function (slide, index) {
  slide.style.left = `${index * 100}%`;
});
let counter = 0;
nextBtn.addEventListener("click", function () {
  counter++;
  hideButtons();
});

prevBtn.addEventListener("click", function () {
  counter--;
  hideButtons();
});

function hideButtons() {

  if (counter < slides.length - 1) {
    nbtn.style.display = "block";
  } else {
    nbtn.style.display = "none";
  }
  if (counter > 0) {
    pbtn.style.display = "block";
  } else {
    pbtn.style.display = "none";
  }
  slides.forEach(function (slide) {
    slide.style.transform = `translateX(-${counter * 100}%)`;
  });
}

pbtn.style.display = "none";