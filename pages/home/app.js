const modalContainer = document.querySelector(".modal-container");
const modalTriggers = document.querySelectorAll(".modal-trigger");

modalTriggers.forEach(trigger => trigger.addEventListener("click", ()=>{
  modalContainer.classList.toggle("active");
}));


$(document).ready(function(){

  $(window).resize(function(){
    setTimeout(()=>{
      $(".folder").removeAttr("style");
    }, 400);
  });

  $(function(){
    $(".folder").draggable({
      containment: "parent",
      revertDuration: 200,
    });
  });
  
});