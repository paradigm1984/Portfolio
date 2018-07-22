$(document).ready(() => {
  // still have to code out
  const hamburger = $("#hamburger");
  const logo = $("#logo")
  const menuLarge = $("#menuLarge");
  const social = $("#social");


  var checkWidth = () => {
    if($(window).innerWidth() > 750) {
    // big
    console.log("big");
    hamburger.css({display: "none"});
    logo.css({display: "inherit"});
    menuLarge.css({display: "inherit"});
    social.css({display: "inherit"});
    } else {
    console.log("small");
    hamburger.css({display: "block"});
    menuLarge.css({display: "none"});
    social.css({display: "none"});
    logo.css({display: "none"});
    }
  }

  checkWidth();

  $(window).bind('resize',function(){
      checkWidth();
  });
}); // END $(document).ready
