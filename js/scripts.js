
console.log("hello world!");
// later on put everything in a div except maybe the header
// then show it on the $(document).ready function
// see if you can load the navbar in with css so that it comes in
// from the start and do a fade in.




$(document).ready(function() {

  const header = $("#header");
  const heroText = $("#heroText");
  const computer = $("#computerHero");
  const devHover = $("#webdevHover");
  const designHover = $("#designHover");
  const developerTextContainer = $("#developerTextContainer");
  const designerTextContainer = $("#designerTextContainer");
  const loaderWrapper = $("#loaderWrapper");
  const compImgWrapper = $("#compImgWrapper");
  const devIcon = $("#devIcon");
  const designIcon = $("#designIcon");
  const downArrow = $("#downArrow");
  const localWeather = $("#localWeather");
  const letterCounter = $("#letterCounter");
  const reminderBasic = $("#reminderBasic");
  const vanish = $("#vanish");
  const knockoutSound = $("#knockoutSound");
  const evolution = $("#evolution");


  // animations for initial load
  header.addClass("header-animate");
  loaderWrapper.removeClass("loader-wrapper");
  loaderWrapper.css({"opacity": "1"});
  computer.removeClass("computer-hero-hide");
  computer.addClass("computer-hero");

  // display computer screen
  setTimeout(() => {
    heroText.addClass("hero-text-animate");
  }, 1000);

  // display guiding icons & hover effect
  setTimeout(() => {
    devIcon.css({"opacity": "1"});
    designIcon.css({"opacity": "1"});
    downArrow.css({"opacity": "1"});

    devHover.mouseover(()=> {
      console.log("started developer hover");
      developerTextContainer.css({"opacity": "1"}, {"width": "800px"}, {"margin-right": "0"});
      computer.css({"transform":  "translateX(85px)"});
      designIcon.css({"opacity":"0"});
      devIcon.css({"opacity":"0"});
    });

     devHover.mouseout(() => {
      console.log("ended developer hover");
      developerTextContainer.css({"opacity": "0"}, {"width": "20%"}, {"margin-right": "1%"});
      computer.css({"transform": "translateX(0)"});
      designIcon.css({"opacity":"1"});
      devIcon.css({"opacity":"1"});
    });

    designHover.mouseover(()=> {
      console.log("started designer hover");
      designerTextContainer.css({"opacity": "1"}, {"width": "800px"}, {"margin-left": "0"});
      computer.css({"transform":  "translateX(-85px)"});
      devIcon.css({"opacity":"0"});
      designIcon.css({"opacity":"0"});
    });

     designHover.mouseout(() => {
      console.log("ended designer hover");
      designerTextContainer.css({"opacity": "0"}, {"width": "20%"}, {"margin-left": "1%"});
      computer.css({"transform": "translateX(0)"});
      devIcon.css({"opacity":"1"});
      designIcon.css({"opacity":"1"});
    });

  }, 3000); // END display guiding icons & hover effect

  // reduce opacity on non highlighted single work cards
  // top row
  localWeather.hover(() => {
    letterCounter.css({"opacity": ".5"});
    reminderBasic.css({"opacity": ".5"});
  }, () => {
    letterCounter.css({"opacity": "1"});
    reminderBasic.css({"opacity": "1"});
  });

  letterCounter.hover(() => {
    localWeather.css({"opacity": ".5"});
    reminderBasic.css({"opacity": ".5"});
  }, () => {
    localWeather.css({"opacity": "1"});
    reminderBasic.css({"opacity": "1"});
  });

  reminderBasic.hover(() => {
    letterCounter.css({"opacity": ".5"});
    localWeather.css({"opacity": ".5"});
  }, () => {
    letterCounter.css({"opacity": "1"});
    localWeather.css({"opacity": "1"});
  });

  // bottom row
  vanish.hover(() => {
    knockoutSound.css({"opacity": ".5"});
    evolution.css({"opacity": ".5"});
  }, () => {
    knockoutSound.css({"opacity": "1"});
    evolution.css({"opacity": "1"});
  });

  knockoutSound.hover(() => {
    vanish.css({"opacity": ".5"});
    evolution.css({"opacity": ".5"});
  }, () => {
    vanish.css({"opacity": "1"});
    evolution.css({"opacity": "1"});
  });

  evolution.hover(() => {
    vanish.css({"opacity": ".5"});
    knockoutSound.css({"opacity": ".5"});
  }, () => {
    vanish.css({"opacity": "1"});
    knockoutSound.css({"opacity": "1"});
  });
}); // END $(document).ready
