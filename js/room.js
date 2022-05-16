const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);


function form1(){
    var x = document.getElementById("form-container");
        x.style.display = "block";
  
  }

function thankyou(){
    var x = document.getElementById("thank-u");
        x.style.display = "block";
    var y = document.getElementById("form-container");
        y.style.display = "none";
  }

  function msg(){
    var x = document.getElementById("thank-u");
        x.style.display = "none";
  }


var form = document.getElementById('res-form');

form.addEventListener("submit", e => {

e.preventDefault();

fetch(form.action, {

method: "POST",

body: new FormData(document.getElementById("res-form")),

}).then(

response => response.json()

).then((html) => {

// you can put any JS code here window.open('_blank');
});

});
