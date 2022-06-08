$(document).ready(function(){

    $(window).resize(function(){
        setTimeout(()=>{
          $(".toile").removeAttr("style");
        }, 400);
    });
  
    $(function(){
      $(".toile").draggable({
        containment: "parent",
        revertDuration: 200,
      });
    });
    
});