window.onload = function () {
  var slider1 = new Slider({
    sliderContainer: ".slider-1",
    images: ".slider-1 .modal-img-1 img",
    btnPrev: ".slider-1 .buttons .prev",
    btnNext: ".slider-1 .buttons .next",
    auto: false,
    rate: 2000,
  });
};

window.onload = function () {
  var slider1_1 = new Slider({
    sliderContainer: ".slider-1-1",
    images: ".slider-1-1 .modal-img-1 img",
    btnPrev: ".slider-1-1 .buttons-1 .prev-1",
    btnNext: ".slider-1-1 .buttons-1 .next-1",
    auto: true,
    rate: 100000,
  });
};

function Slider(obj) {
  this.sliderContainer = document.querySelector(obj.sliderContainer);
  this.images = this.sliderContainer.querySelectorAll(obj.images);
  this.auto = obj.auto;
  this.btnPrev = this.sliderContainer.querySelector(obj.btnPrev);
  this.btnNext = this.sliderContainer.querySelector(obj.btnNext);
  this.rate = obj.rate || 1000;
  var i = 0;
  var slider = this;

  this.prev = function () {
    slider.images[i].classList.remove("shown-1");
    i--;
    if (i < 0) {
      i = slider.images.length - 1;
    }
    slider.images[i].classList.add("shown-1");
  };

  this.next = function () {
    slider.images[i].classList.remove("shown-1");
    i++;
    if (i >= slider.images.length) {
      i = 0;
    }
    slider.images[i].classList.add("shown-1");
  };

  this.btnPrev.onclick = this.prev;
  this.btnNext.onclick = this.next;

  if (this.auto) {
    setInterval(this.next, this.rate);
  }
}

// ----------------------------------------------------
