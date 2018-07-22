$(document).ready(() => {

  var imgDiv = $("<div class='enlarged-img'>");
  $(".enlarge").click(function() {
    $(".modal").css({display: "flex", display: "-webkit-flex"});
    setTimeout(function(){
      $(".modal").css({opacity: "1"});
    }, 50);
    if(this.id == "evolution") {
      // console.log("evolution");
      imgDiv.addClass("evolution");
    } else if(this.id == "vanish") {
      // console.log("vanish");
      imgDiv.addClass("vanish");
    } else if(this.id == "knockoutSound") {
      // console.log("knockoutSound");
      imgDiv.addClass("knockoutSound");
    }
    // imgDiv.appendTo(".modal");
    $(".modal").prepend(imgDiv);
  });

  $(".close-modal").click(function() {
    imgDiv.removeClass();
    imgDiv.addClass("enlarged-img");

    $(".modal").css({display: "none", opacity: "0"})
  })



}); // END $(document).ready
