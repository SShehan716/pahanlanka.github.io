const imgs1 = document.querySelectorAll('.img-select1 a');
const imgBtns1 = [...imgs1];
let imgId1 = 1;

imgBtns1.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId1 = imgItem.dataset.id;
        slideImage1();
    });
});

function slideImage1(){
    const displayWidth = document.querySelector('.img-showcase1 img:first-child').clientWidth;

    document.querySelector('.img-showcase1').style.transform = `translateX(${- (imgId1 - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage1);


const imgs2 = document.querySelectorAll('.img-select2 a');
const imgBtns2 = [...imgs2];
let imgId2 = 1;
imgBtns2.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId2 = imgItem.dataset.id;
        slideImage2();
    });
});

function slideImage2(){
    const displayWidth = document.querySelector('.img-showcase2 img:first-child').clientWidth;

    document.querySelector('.img-showcase2').style.transform = `translateX(${- (imgId2 - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage2);

const imgs3 = document.querySelectorAll('.img-select3 a');
const imgBtns3 = [...imgs3];
let imgId3 = 1;

imgBtns3.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId3 = imgItem.dataset.id;
        slideImage3();
    });
});

function slideImage3(){
    const displayWidth = document.querySelector('.img-showcase3 img:first-child').clientWidth;

    document.querySelector('.img-showcase3').style.transform = `translateX(${- (imgId3 - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage3);

const imgs4 = document.querySelectorAll('.img-select4 a');
const imgBtns4 = [...imgs4];
let imgId = 1;
imgBtns4.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId4 = imgItem.dataset.id;
        slideImage4();
    });
});

function slideImage4(){
    const displayWidth = document.querySelector('.img-showcase4 img:first-child').clientWidth;

    document.querySelector('.img-showcase4').style.transform = `translateX(${- (imgId4 - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage4);


function form1(){
    var x = document.getElementById("form-container");
        x.style.display = "block";
        window.location.href = "room.html#rForm";
  }



  function msg(){
    var x = document.getElementById("thank-u");
        x.style.display = "none";
  }

  function submitBtn(){
    var x = document.getElementById("thank-u");
    x.style.display = "block";
    var y = document.getElementById("form-container");
    y.style.display = "none";
  }


/*var form = document.getElementById('res-form');

form.addEventListener("submit", e => {

e.preventDefault();

fetch(form.action, {

method: "POST",

body: new FormData(document.getElementById("res-form")),

}).then(

response => response.json()

).then((html) => {
    var x = document.getElementById("thank-u");
    x.style.display = "block";
    var y = document.getElementById("form-container");
    y.style.display = "none";
// you can put any JS code here window.open('_blank');
});

});*/


