const doc = document;

//Enable Sticky Header
let stickyHeader = doc.querySelector('.js-site-header');
// construct an instance of Headroom, passing the element
let headroom  = new Headroom(stickyHeader);
// initialise
//headroom.init();


let navLinks = doc.querySelectorAll('.js-navigation--main li');
// nav toggle
doc.querySelector('.js-site-navigation-toggle').addEventListener('click', function () {
  this.classList.toggle('collapse');
  doc.querySelector('.js-navigation--main').classList.toggle('is-visible');

  if(doc.querySelector('.js-navigation--main').classList.contains('is-visible')) {
    for(let i = 0; i < navLinks.length; i++) {
      navLinks[i].classList.add('animated', 'fadeInUp', 'show-me');
    }
  } else {
    for(let i = 0; i < navLinks.length; i++) {
      navLinks[i].classList.remove('animated', 'fadeInUp', 'show-me');
    }
  }
});

//arrow to scroll to next section
let scrollBtns = doc.querySelectorAll('.js-scroll-next-btn');

for (let x = 0; x < scrollBtns.length; x++) {
  scrollBtns[x].addEventListener('click', function () {
    jQuery.fn.fullpage.moveSectionDown();
  });
}




//toggle page section
let toggleBtns = doc.querySelectorAll('.js-toggle-section-btn');

for (let i = 0; i < toggleBtns.length; i++) {
  toggleBtns[i].addEventListener('click', function () {
    let newButtons = doc.querySelectorAll('.js-toggle-section-btn[data-section="' + this.getAttribute('data-section') + '"]');

    // update active buttons
    for(let i = 0; i < toggleBtns.length; i++) {
      toggleBtns[i].classList.remove('is-active');
    }

    for(let i = 0; i < newButtons.length; i++) {
      newButtons[i].classList.add('is-active');
    }

    //get index of this and add 1 to trigger the fullpage nav click
    let thisIndex = indexInParent(this);
    thisIndex = thisIndex + 1;

    //trigger click on fullpage nav button
    if(doc.querySelector('#fp-nav')) {
      doc.querySelector('#fp-nav li:nth-child(' + thisIndex  + ' ) a').click();
    }


    // update active section
    doc.querySelector('.js-toggle-section.is-active').classList.remove('is-active');
    doc.querySelector('.js-toggle-section[data-section="' + this.getAttribute('data-section') + '"]').scrollTop = 0;
    doc.querySelector('.js-toggle-section[data-section="' + this.getAttribute('data-section') + '"]').classList.add('is-active');
  });
}

// var to track if hiw intro has already run. we don't want to run it again
var hiwIntroRunBig = false;
var hiwIntroRunSmall = false;
// set up fullPage.js
jQuery(document).ready(function() {
  jQuery('#fullpage').fullpage({
    scrollOverflow: true,
    navigation: true,
    onLeave: function(index, nextIndex, direction){
      fullpageSlideOnLeave(index, nextIndex, direction);
    },
    afterLoad: function( anchorLink, index){
      fullpageSlideAfterLoad(anchorLink, index);
    }
  });
});

function fullpageSlideOnLeave(index,nextIndex, direction) {
  if(doc.querySelector('.js-sub-menu')) {
    doc.querySelector('.js-toggle-section-btn:nth-child(' + nextIndex  + ' )').click();
  }
}

function fullpageSlideAfterLoad(anchorLink, index) {
  // videos are on 4, 8 and 9
  // check for how it works page
  if(site_vars.cur_page == 'How it Works' || site_vars.cur_page == 'How SAMi works' || site_vars.cur_page == 'How it works') {

    // fade in left content

    if(!hiwIntroRunBig) {
        // HIW Intro
        //draw intro dots
        createFields(46, 'big');
        distributeFields(46, 'big');
        hiwIntroRunBig = true;

        // animate in steps
        animateSequentialElements(doc.querySelectorAll('.js-hiw-intro-graphic__step[data-size="big"]'), 0, 500, ['bounceIn', 'show-me']);

        // animate in dots
        setTimeout(function () {
          animateSequentialElements(doc.querySelectorAll('.js-hiw-intro-graphic__circle__dot[data-size="big"]'), 0, 50, ['bounceIn', 'show-me']);
        }, 1000);

    }

    doc.querySelector('.js-intro--' + index + '[data-size="big"]').classList.add('fadeInUp', 'show-me');



    // if showing a slide that has a video (steps 3, 7 and 8 - technically 4, 8 and 9 indexes)
    if(index == 4 || index == 8 || index == 9) {
      doc.querySelector('.js-video-player[data-index="' + index + '"][data-size="big"]').play();
    } else {
      // handle code animations
      if(index == 5) {
        animatePhone('.js-phone-animation[data-size="big"]');
      }

      if(index == 6) {
        animateGraph('.js-graph-animation[data-size="big"]');
      }

      if(index == 11) {
        animateIntegrations();
      }
    }
  }

  if(site_vars.cur_page == 'Home') {

      if(index == 1) {
       // doc.querySelector('.js-video-player[data-index="' + index + '"][data-size="big"]').play();
      }

      // counting up
      if(index == 2 || index == 3) {
        setTimeout(function () {
          var numAnim = new CountUp(doc.querySelector('.js-count-up--' + index + '[data-size="big"]'), 5000, doc.querySelector('.js-count-up--' + index+ '[data-size="big"]').getAttribute('data-number'), 0, 2);

          numAnim.start();
        }, 400);
      }

      if(index == 4 || index == 6) {
        doc.querySelector('.js-circle-fill__graphic--' + index + '[data-size="big"]').classList.add('start');
        setTimeout(function () {
          doc.querySelector('.js-circle-fill__number--' + index + '[data-size="big"]').classList.add('fadeIn', 'show-me');
        }, 200);
      }

      if(index == 5) {
        setTimeout(function () {
          doc.querySelector('.js-clock__hour-hand-container[data-size="big"]').classList.add('rotate-me');
          doc.querySelector('.js-clock__minute-hand-container[data-size="big"]').classList.add('rotate-me');
        }, 200);
      }

      if(index == 8) {
        demoAnimations('big');
      }
  }
}



if(doc.querySelector('.js-response-bubble--no[data-size="big"]')) {
//handle 'no' response in demo animation
  doc.querySelector('.js-response-bubble--no[data-size="big"]').addEventListener('click', handleNoDemo.bind(null, 'big'));

  doc.querySelector('.js-response-bubble--no[data-size="small"]').addEventListener('click', handleNoDemo.bind(null, 'small'));
}

function handleNoDemo(size) {

  // bring in initials and thinking bubble
  setTimeout(function () {
    doc.querySelector('.js-speech-bubble-initials--2[data-size="' + size + '"]').classList.add('fadeIn', 'show-me');
    doc.querySelector('.js-thinking-bubble--3[data-size="' + size + '"]').classList.add('fadeIn', 'show-me');
  }, 200);

  // animate thinking bubble
  setTimeout(animateSequentialElements.bind(null, doc.querySelectorAll('.js-thinking-bubble--3[data-size="' + size + '"] .js-thinking-bubble__dot'), 0, 300, ['bounceIn', 'show-me']), 500);

  //hide thinking bubble
  setTimeout(function () {
    doc.querySelector('.js-thinking-bubble--3[data-size="' + size + '"]').classList.add('fadeOut');
  }, 1100);


  // show final reply
  setTimeout(function () {
    doc.querySelector('.js-demo-bubble--3[data-size="' + size + '"]').classList.add('fadeIn', 'show-me');
  }, 1700);

}

function demoAnimations(size) {
  // animate thinking bubble
  setTimeout(animateSequentialElements.bind(null, doc.querySelectorAll('.js-thinking-bubble--1[data-size="' + size + '"] .js-thinking-bubble__dot'), 0, 300, ['bounceIn', 'show-me']), 200);

  //hide thinking bubble
  setTimeout(function () {
    doc.querySelector('.js-thinking-bubble--1[data-size="' + size + '"]').classList.add('fadeOut');
  }, 1800);

  // bring in welcome bubble
  setTimeout(function () {
    doc.querySelector('.js-demo-bubble--1[data-size="' + size + '"]').classList.add('fadeIn', 'show-me');
  }, 2400);

  // bring in initials and thinking bubble 2
  setTimeout(function () {
    doc.querySelector('.js-speech-bubble-initials--1[data-size="' + size + '"]').classList.add('fadeIn', 'show-me');
    doc.querySelector('.js-thinking-bubble--2[data-size="' + size + '"]').classList.add('fadeIn', 'show-me');
  }, 4200);

  // animate thinking bubble 2
  setTimeout(animateSequentialElements.bind(null, doc.querySelectorAll('.js-thinking-bubble--2[data-size="' + size + '"] .js-thinking-bubble__dot'), 0, 300, ['bounceIn', 'show-me']), 4500);

  //hide thinking bubble 2
  setTimeout(function () {
    doc.querySelector('.js-thinking-bubble--2[data-size="' + size + '"]').classList.add('fadeOut');
  }, 6100);


  // bring in question bubble
  setTimeout(function () {
    doc.querySelector('.js-demo-bubble--2[data-size="' + size + '"]').classList.add('fadeIn', 'show-me');
  }, 6700);

  // show response bubbles
  setTimeout(animateSequentialElements.bind(null, doc.querySelectorAll('.js-response-bubble[data-size="' + size + '"]'), 0, 300, ['bounceIn', 'show-me']), 8400);
}


// Animations
let integrationsLinesBig = doc.querySelectorAll('.js-integrations-animation__line[data-size="big"]');
let integrationsBubblesBig = doc.querySelectorAll('.js-integrations-animation__dot[data-size="big"]');
let integrationsLinesSmall = doc.querySelectorAll('.js-integrations-animation__line[data-size="small"]');
let integrationsBubblesSmall = doc.querySelectorAll('.js-integrations-animation__dot[data-size="small"]');
let integrationsLinesCounter = 0;
const integrationsLinesOffset  = 250;
let integrationsBubblesCounter = 0;
const integrationsBubblesOffset  = 250;
let integrationsLabelsBig = doc.querySelectorAll('.js-integrations-animation__label[data-size="big"]');
let integrationsLabelsSmall = doc.querySelectorAll('.js-integrations-animation__label[data-size="small"]');

function animateIntegrations() {
  //start drawing lines
  if(window.innerWidth >= 768) {
    animateSequentialElements(integrationsLinesBig, 0, integrationsLinesOffset, ['start']);

    //start popping bubbles in
    setTimeout(function () {
      animateSequentialElements(integrationsBubblesBig, 0, integrationsBubblesOffset, ['bounceIn', 'show-me']);
    }, 350);

    //show section labels
    animateInLabels(integrationsLabelsBig);

  } else {
    animateSequentialElements(integrationsLinesSmall, 0, integrationsBubblesOffset, ['start']);

    //start popping bubbles in
    setTimeout(function () {
      animateSequentialElements(integrationsBubblesSmall, 0, integrationsBubblesOffset, ['bounceIn', 'show-me']);
    }, 350);

    //show section labels
    animateInLabels(integrationsLabelsSmall);
  }
}

function animateInLabels(labels) {
  setTimeout(function () {
    labels[0].classList.add('bounceIn', 'show-me');
  }, 1100);

  setTimeout(function () {
    labels[1].classList.add('bounceIn', 'show-me');
  }, 1950);

  setTimeout(function () {
    labels[2].classList.add('bounceIn', 'show-me');
  }, 2550);

  setTimeout(function () {
    labels[3].classList.add('bounceIn', 'show-me');
  }, 3300);
}

let lineGraphDotCounter = 0;
const lineGraphDotsOffset  = 500;
let lightLine__dots__big = doc.querySelectorAll('.js-graph-animation[data-size="big"] .js-graph-animation__light-line__dot');
let darkLine__dots__big = doc.querySelectorAll('.js-graph-animation[data-size="big"] .js-graph-animation__dark-line__dot');
let lightLine__dots__small = doc.querySelectorAll('.js-graph-animation[data-size="small"] .js-graph-animation__light-line__dot');
let darkLine__dots__small = doc.querySelectorAll('.js-graph-animation[data-size="small"] .js-graph-animation__dark-line__dot');

function animateGraph(whichGraph) {
  let darkLine = doc.querySelector(whichGraph + ' .js-graph-animation__dark-line');
  let darkLine__number = doc.querySelector(whichGraph + ' .js-graph-animation__dark-line__number');

  let lightLine = doc.querySelector(whichGraph + ' .js-graph-animation__light-line');
  let lightLine__number = doc.querySelector(whichGraph + ' .js-graph-animation__light-line__number');


  // have dark number fade/zoom in
  setTimeout(function(){
    darkLine__number.classList.add('zoomIn', 'show-me');
  }, 300);

  // have light number fade/zoom in
  setTimeout(function(){
    lightLine__number.classList.add('zoomIn', 'show-me');
  }, 1100);

  // start light & dark lines animating
  setTimeout(function(){
    darkLine.classList.add('start');
    lightLine.classList.add('start');
  }, 2200);

  // add dots to line
  if(window.innerWidth >= 768) {
    setTimeout(function () {
      animateSequentialElements(lightLine__dots__big, lineGraphDotCounter, lineGraphDotsOffset, ['pulse', 'show-me']);
      animateSequentialElements(darkLine__dots__big, lineGraphDotCounter, lineGraphDotsOffset, ['pulse', 'show-me']);
    }, 2740);

  } else {
    setTimeout(function () {
      animateSequentialElements(lightLine__dots__small, lineGraphDotCounter, lineGraphDotsOffset, ['pulse', 'show-me']);
      animateSequentialElements(darkLine__dots__small, lineGraphDotCounter, lineGraphDotsOffset, ['pulse', 'show-me']);
    }, 2740);
  }
}


function animatePhone(whichPhone) {
  let phone =  doc.querySelector(whichPhone + ' .js-animation__phone');
  let people = doc.querySelector(whichPhone + ' .js-animation__people');
  let dottedLines = doc.querySelectorAll(whichPhone + ' .js-phone-dotted-line');
  let dotCounter = 0;

  phone.classList.add('bounceInUp', 'show-me');

  // delay and then show people
  setTimeout(function () {
    people.classList.add('bounceInUp','show-me');
  }, 800);

  // delay and then "ring" phone
  setTimeout(function () {
    phone.classList.remove('bounceInUp');
    phone.classList.add('tada');
  }, 2000);

  //draw dashed line

  setTimeout(function () {
    animateSequentialElements(dottedLines, dotCounter, 150, ['bounceIn', 'show-me']);
  }, 2900);

  // delay and then show people
  setTimeout(function () {
    people.classList.remove('bounceInUp');
    people.classList.add('bounce');
  }, 4050);
}


// Helpers
function animateSequentialElements(elementsArray, counter, timeoutOffset, classesToAdd) {
  elementsArray[counter].classList.add(...classesToAdd);

  counter++;

  if(counter < elementsArray.length) {
    setTimeout(animateSequentialElements.bind(null, elementsArray, counter, timeoutOffset, classesToAdd), timeoutOffset);
  } else {
    counter = 0;
  }
}

function indexInParent(node) {
  let children = node.parentNode.childNodes;
  let num = 0;
  for (let i=0; i<children.length; i++) {
    if (children[i]==node) return num;
    if (children[i].nodeType==1) num++;
  }
  return -1;
}


//draw a circle with elements
function createFields(numDots, size) {
  var container = jQuery('.js-hiw-intro-graphic__circle[data-size="' + size + '"]');
  for(var i = 0; i < numDots; i++) {
    jQuery('<div class="c-hiw-intro-graphic__circle__dot js-hiw-intro-graphic__circle__dot animated"  data-size="' + size + '"><img class="js-hiw-intro-graphic__circle__dot__img"  data-size="' + size + '" src="' + site_vars.theme_url + 'i/hiw/animations/step4/Kencor_HowItWorks_step4_dot.svg" /></div>', {
    }).appendTo(container);
  }
}

function distributeFields(numDots, size) {
  let circleWidth = doc.querySelector('.js-hiw-intro-graphic__circle[data-size="' + size + '"]').offsetWidth;
  let circleHeight =  doc.querySelector('.js-hiw-intro-graphic__circle[data-size="' + size + '"]').offsetHeight;
  let circleWidthCalculated = Math.floor(circleWidth / 2);

  let rotationIncrement = 360 / numDots;
  let rotationStarter = rotationIncrement;
  let rotationCounter = rotationIncrement;

  let radius =  (circleWidthCalculated - (circleWidthCalculated * .45)) ;
  let fields = jQuery('.c-hiw-intro-graphic__circle__dot[data-size="' + size + '"]'), container = jQuery('.js-hiw-intro-graphic__circle[data-size="' + size + '"]'),
    width = container.width(), height = container.height(),
    angle = 5, step = (2*Math.PI) / fields.length;
  fields.each(function() {
    let x = Math.round(width/2 + radius * Math.cos(angle) - jQuery(this).width()/2);
    let y = Math.round(height/2 + radius * Math.sin(angle) - jQuery(this).height()/2);


    jQuery(this).css({
      left: ((x / circleWidth) * 100) + '%',
      top: ((y / circleHeight) * 100) + '%',
      //transform: 'rotate(' + (rotationStarter + rotationCounter) + 'deg)'
    });

    jQuery(this).find('.js-hiw-intro-graphic__circle__dot__img[data-size="' + size + '"]').css({
      transform: 'rotate(' + (rotationStarter + rotationCounter) + 'deg)'
    });
    rotationCounter += rotationIncrement;
    angle += step;
  });
}

function isTouchDevice() {
  return 'ontouchstart' in document.documentElement;
}

function isElementInViewport (el) {

  //special bonus for those using jQuery
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }

  var rect = el.getBoundingClientRect();

  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
    rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
  );
}




// check if elements are visible (for small screens)
// Home Checks
jQuery('.js-count-up--2').viewportChecker({
  callbackFunction: function() {
    setTimeout(function () {
      var numAnim = new CountUp(doc.querySelector('.js-count-up--2[data-size="small"]'), 5000, doc.querySelector('.js-count-up--2[data-size="small"]').getAttribute('data-number'), 0, 2);

      numAnim.start();
    }, 400);
  }
});


jQuery('.js-count-up--3').viewportChecker({
  callbackFunction: function() {
    setTimeout(function () {
      var numAnim = new CountUp(doc.querySelector('.js-count-up--3[data-size="small"]'), 5000, doc.querySelector('.js-count-up--3[data-size="small"]').getAttribute('data-number'), 0, 2);

      numAnim.start();
    }, 400);
  }
});

jQuery('.js-demo-kickoff').viewportChecker({
  callbackFunction: function() {
    demoAnimations('small');
  }
});


// HIW Checks
// Intro
jQuery('.js-hiw-intro').viewportChecker({
  callbackFunction: function() {
    if(!hiwIntroRunSmall) {
      // HIW Intro
      //draw intro dots
      createFields(46, 'small');
      distributeFields(46, 'small');
      hiwIntroRunSmall = true;

      // animate in steps
      animateSequentialElements(doc.querySelectorAll('.js-hiw-intro-graphic__step[data-size="small"]'), 0, 700, ['bounceIn', 'show-me']);

      // animate in dots
      setTimeout(function () {
        animateSequentialElements(doc.querySelectorAll('.js-hiw-intro-graphic__circle__dot[data-size="small"]'), 0, 50, ['bounceIn', 'show-me']);
      }, 1000);
    }
  }
});

//Videos
jQuery('.js-video-player[data-index="4"][data-size="small"]').viewportChecker({
  callbackFunction: function() {
    jQuery('.js-video-player[data-index="4"][data-size="small"]').play();
  }
});

jQuery('.js-video-player[data-index="8"][data-size="small"]').viewportChecker({
  callbackFunction: function() {
    jQuery('.js-video-player[data-index="8"][data-size="small"]').play();
  }
});

jQuery('.js-video-player[data-index="9"][data-size="small"]').viewportChecker({
  callbackFunction: function() {
    jQuery('.js-video-player[data-index="9"][data-size="small"]').play();
  }
});


//Phone
jQuery('.js-phone-animation[data-size="small"]').viewportChecker({
  callbackFunction: function() {
    animatePhone('.js-phone-animation[data-size="small"]');
  }
});

//Graph
jQuery('.js-graph-animation[data-size="small"]').viewportChecker({
  callbackFunction: function() {
    animateGraph('.js-graph-animation[data-size="small"]');
  }
});

//Integrations
jQuery('.js-integrations-animation').viewportChecker({
  callbackFunction: function() {
    animateIntegrations();
  }
});
