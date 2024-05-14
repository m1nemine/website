// script.js
var mainimg=document.querySelector('#slayt')
var images=['images/gorsel1.jpg','images/gorsel2.jpg','images/gorsel3.jpg','images/gorsel4.jpg']
var num=0;
const auto=true;
const IntervalTime=5000;
let slideInterval


function next(){
  num++
  if(num>=images.length){
    num=0;
    mainimg.src=images[num]
  }
  else{
    mainimg.src=images[num]
  }
}

function back(){
  num--
  if(num<0){
    num=images.length-1
    mainimg.src=images[num]
  }
  else{
    mainimg.src=images[num]
  }
}

if(auto){
  slideInterval=setInterval(next,IntervalTime)
}


$(document).ready(function(){
  $('#menu-btn').click(function(){
      $('.header .navbar').toggle();
  });
});


$(window).on('resize', function() {
  var win = $(this); // this = window
  if (win.width() >= 800) {
      $('#menu-btn').trigger('click');
  }
});
// Trigger resize event immediately
$(window).on('resize', function() {
  var win = $(this); // this = window
  if (win.width() >= 800 && !$('.header .navbar').is(':visible')) {
      $('#menu-btn').trigger('click');
  }
});