const modalContainer = document.querySelector(".modal-container");
const modalTriggers = document.querySelectorAll(".modal-trigger");

modalTriggers.forEach(trigger => trigger.addEventListener("click", ()=>{
  modalContainer.classList.toggle("active");
}));


$(document).ready(function(){

  let date = new Date();
  let heure = date.getHours();

  if(heure > 7 && heure < 21){
    $("body").css("background-color", "white");
    $(".info").css("color", "black");
    $(".logo-svg").css("display", "block");
    $(".logo-svg-white").css("display", "none");
    $("h1").removeClass("active");
  }else{
    $("body").css("background-color", "black");
    $(".info").css("color", "#929292");
    $(".logo-svg").css("display", "none");
    $(".logo-svg-white").css("display", "block");
    $("h1").addClass("active");
  }

  $(window).resize(function(){
    setTimeout(()=>{
      $(".folder").removeAttr("style");
    }, 400);
  });

  $(function(){
    $(".folder").draggable({
      opacity: ".6",
      containment: "parent",
      revertDuration: 200,
    });
  });
  
});