var doc = document;

//Enable Sticky Header
var stickyHeader = doc.querySelector('.js-site-header');
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(stickyHeader);
// initialise
//headroom.init();


//toggle page section
var toggleBtns = doc.querySelectorAll('.js-toggle-section-btn');

for (var i = 0; i < toggleBtns.length; i++) {
  toggleBtns[i].addEventListener('click', function () {
    var newButtons = doc.querySelectorAll('.js-toggle-section-btn[data-section="' + this.getAttribute('data-section') + '"]');

    // update active buttons
    for(var i = 0; i < toggleBtns.length; i++) {
      toggleBtns[i].classList.remove('is-active');
    }

    for(var i = 0; i < newButtons.length; i++) {
      newButtons[i].classList.add('is-active');
    }

    //get index of this and add 1 to trigger the fullpage nav click
    var thisIndex = indexInParent(this);
    thisIndex = thisIndex + 1;

    //trigger click on fullpage nav button
    doc.querySelector('#fp-nav li:nth-child(' + thisIndex  + ' ) a').click();

    // update active section
    doc.querySelector('.js-toggle-section.is-active').classList.remove('is-active');
    doc.querySelector('.js-toggle-section[data-section="' + this.getAttribute('data-section') + '"]').scrollTop = 0;
    doc.querySelector('.js-toggle-section[data-section="' + this.getAttribute('data-section') + '"]').classList.add('is-active');
  });
}


// scroll and make sticky sections
//window.addEventListener('scroll', _.throttle(checkOffset, 10));

// keep track of previous scrollTop
var lastScrollTop = 0;
// limit scroll up firing infinite
/*
 function checkOffset() {
 var newScrollTop = window.pageYOffset || document.documentElement.scrollTop;


 // check scroll direction
 if(newScrollTop > lastScrollTop) {
 // scrolling down
 var el = doc.querySelector('.js-toggle-section.is-next');
 var rect = el.getBoundingClientRect();
 var elTop = rect.top;

 // check to see if next element reaches top of screen
 if(elTop <= 0) {
 // if element reaches top
 //   remove previous active class
 //   add active class and remove is-next class
 doc.querySelector('.js-toggle-section.is-active').classList.remove('is-active');

 doc.querySelector('.js-toggle-section.is-next').classList.add('is-active');
 doc.querySelector('.js-toggle-section.is-next').classList.remove('is-next');

 //remove previous is-previous class
 // doc.querySelector('.js-toggle-section.is-previous').classList.remove('is-previous');

 // add is-previous class to next element if it exists
 if(doc.querySelector('.js-toggle-section.is-active').previousElementSibling) {
 doc.querySelector('.js-toggle-section.is-active').previousElementSibling.classList.add('is-previous');

 // remove previous from prior previous element
 if( doc.querySelector('.js-toggle-section.is-active').previousElementSibling.previousElementSibling) {
 doc.querySelector('.js-toggle-section.is-active').previousElementSibling.previousElementSibling.classList.remove('is-previous');
 }
 }

 // add is-next class to next element if it exists
 if(doc.querySelector('.js-toggle-section.is-active').nextElementSibling) {
 doc.querySelector('.js-toggle-section.is-active').nextElementSibling.classList.add('is-next');
 }
 }
 } else {
 // scrolling up

 if(doc.querySelector('.js-toggle-section.is-previous')) {
 var prevEl = doc.querySelector('.js-toggle-section.is-previous');
 var elRect = prevEl.getBoundingClientRect();
 var curTop = elRect.height;
 }

 // if((lastScrollTop - newScrollTop) !== curTop) {

 // if at bottom of screen and start to scroll up,
 //    we have to fire off class changes
 if((!doc.querySelector('.js-toggle-section.is-active').nextElementSibling )) {
 scrollUp();
 } else {
 // if the new scrollTop (newScrollTop) is equal to the height of is-previous element,
 //   time to update the new classes
 if(newScrollTop < curTop) {
 scrollUp();
 }
 }
 // }
 }

 lastScrollTop = newScrollTop;
 }


 var scrollToView = false;

 function scrollUp() {
 doc.querySelector('.js-toggle-section.is-active').classList.add('prior');
 //remove is-active from currently active el
 doc.querySelector('.js-toggle-section.is-active').classList.remove('is-active');

 if(scrollToView === false) {

 scrollToView = true;
 }

 if(!checkVisible(doc.querySelector('.js-toggle-section.prior'))) {
 scrollToView = false;
 doc.querySelector('.js-toggle-section.prior').scrollIntoView();
 doc.querySelector('.js-toggle-section.prior').classList.remove('prior');
 }

 //add active to prior is-previous el
 doc.querySelector('.js-toggle-section.is-previous').classList.add('is-active');

 doc.querySelector('.js-toggle-section.is-active').classList.remove('is-previous');

 if(doc.querySelector('.js-toggle-section.is-active').previousElementSibling) {
 doc.querySelector('.js-toggle-section.is-active').previousElementSibling.classList.add('is-previous');
 }

 doc.querySelector('.js-toggle-section.is-active').nextElementSibling.classList.add('is-next');

 }

 */
function checkVisible(elm) {
  var rect = elm.getBoundingClientRect();
  var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
  return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
}

var videoPlayers = doc.querySelectorAll('.js-video-player');

var isHowItWorks = true;

// set up fullPage.js
jQuery(document).ready(function() {
  jQuery('#fullpage').fullpage({
    parallax: true,
    parallaxKey: 'YWx2YXJvdHJpZ28uY29tXzlNZGNHRnlZV3hzWVhnPTFyRQ==',
    parallaxOptions: {type: 'cover'},
    scrollOverflow: true,
    // menu: '.js-sub-menu',
    navigation: true,
    onLeave: function(index, nextIndex, direction){
      if(window.innerWidth >= 768) {
        doc.querySelector('.js-toggle-section-btn:nth-child(' + nextIndex  + ' )').click();
      }
    },
    afterLoad: function( anchorLink, index){
      // videos are on 4, 8 and 9
      // check for how it works page
      if(site_vars.cur_page == 'How it works' || site_vars.cur_page == 'How SAMi works') {
        // if showing a slide that has a video (steps 3, 7 and 8 - technically 4, 8 and 9 indexes)
        if(index == 4 || index == 8 || index == 9) {
          // check window size to determine which video to play
          if(window.innerWidth >= 768) {
            doc.querySelector('.js-video-player[data-index="' + index + '"][data-size="big"]').play();
          } else {
            doc.querySelector('.js-video-player[data-index="' + index + '"][data-size="small"]').play();
          }
        } else {
          // handle code animations
          // small screens
          if(window.innerWidth < 768) {
            //step 4
            if(index == 5) {
              animatePhone('.js-phone-animation[data-size="small"]');
            }

            if(index == 6) {
              animateGraph('.js-graph-animation[data-size="small"]');
            }
          } else {
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
      }
    }
  });
});

var integrationsLinesBig = doc.querySelectorAll('.js-integrations-animation__line[data-size="big"]');
var integrationsBubblesBig = doc.querySelectorAll('.js-integrations-animation__dot[data-size="big"]');
var integrationsLinesCounter = 0;
var integrationsLinesOffset  = 250;
var integrationsBubblesCounter = 0;
var integrationsBubblesOffset  = 250;

function animateIntegrations() {
  //start drawing lines
  if(window.innerWidth >= 768) {
    animateIntegrations__lines(integrationsLinesBig);

    //start popping bubbles in
    setTimeout(function () {
      animateIntegrations__bubbles(integrationsBubblesBig);
    }, 350);
  } else {
    animateIntegrations__lines(integrationsLinesSmall);

    //start popping bubbles in
    setTimeout(function () {
      animateIntegrations__bubbles(integrationsBubblesSmall);
    }, 350);
  }



}

function animateIntegrations__lines(integrationsLines) {
// if small screen, apply animation to small screen section
  if(window.innerWidth >= 768) {
    integrationsLines[integrationsLinesCounter].classList.add('start');
  } else {
    integrationsLines[integrationsLinesCounter].classList.add('start');
  }

  integrationsLinesCounter++;
  if(integrationsLinesCounter < integrationsLines.length) {
    setTimeout(animateIntegrations__lines.bind(null, integrationsLines), integrationsLinesOffset);
  } else {
    integrationsLinesCounter = 0;
  }
}

function animateIntegrations__bubbles(integrationsBubbles) {
  if(window.innerWidth >= 768) {
    integrationsBubbles[integrationsBubblesCounter].classList.add('bounceIn', 'show-me');
  } else {
    integrationsBubbles[integrationsBubblesCounter].classList.add('bounceIn', 'show-me');
  }

  integrationsBubblesCounter++;
  if(integrationsBubblesCounter < integrationsBubbles.length) {
    setTimeout(animateIntegrations__bubbles.bind(null, integrationsBubbles), integrationsBubblesOffset);
  } else {
    integrationsBubblesCounter = 0;
  }
}



function animateGraph(whichGraph) {

  var darkLine = doc.querySelector(whichGraph + ' .js-graph-animation__dark-line');
  var darkLine__number = doc.querySelector(whichGraph + ' .js-graph-animation__dark-line__number');

  var lightLine = doc.querySelector(whichGraph + ' .js-graph-animation__light-line');
  var lightLine__number = doc.querySelector(whichGraph + ' .js-graph-animation__light-line__number');


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
  setTimeout(animateGraphDots, 2740);

}

var lineGraphDotCounter = 0;
var lineGraphDotsOffset  = 500;
var lightLine__dots__big = doc.querySelectorAll('.js-graph-animation[data-size="big"] .js-graph-animation__light-line__dot');
var darkLine__dots__big = doc.querySelectorAll('.js-graph-animation[data-size="big"] .js-graph-animation__dark-line__dot');
var lightLine__dots__small = doc.querySelectorAll('.js-graph-animation[data-size="small"] .js-graph-animation__light-line__dot');
var darkLine__dots__small = doc.querySelectorAll('.js-graph-animation[data-size="small"] .js-graph-animation__dark-line__dot');


// loop through all dots applying pulse class
function animateGraphDots() {
  // if small screen, apply animation to small screen section
  if(window.innerWidth >= 768) {
    lightLine__dots__big[lineGraphDotCounter].classList.add('pulse', 'show-me');
    darkLine__dots__big[lineGraphDotCounter].classList.add('pulse', 'show-me');
  } else {
    lightLine__dots__small[lineGraphDotCounter].classList.add('pulse', 'show-me');
    darkLine__dots__small[lineGraphDotCounter].classList.add('pulse', 'show-me');
  }

  lineGraphDotCounter++;
  if(lineGraphDotCounter < lightLine__dots__big.length) {
    setTimeout(animateGraphDots, lineGraphDotsOffset);
  } else {
    lineGraphDotCounter = 0;
  }
}


function animatePhone(whichPhone) {
  var phone =  doc.querySelector(whichPhone + ' .js-animation__phone');
  var people = doc.querySelector(whichPhone + ' .js-animation__people');
  var dottedLines = doc.querySelectorAll(whichPhone + ' .js-phone-dotted-line');
  var dotCounter = 0;

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
    if(dotCounter < dottedLines.length) {
      phoneDotInterval = setInterval(function () {
        if(dotCounter >= dottedLines.length) {
          clearInterval(phoneDotInterval);
          return;
        }
        dottedLines[dotCounter].classList.add('bounceIn', 'show-me');
        dotCounter++;
      }, 150);
    } else {
      clearInterval(phoneDotInterval);
    }
  }, 2900);

  // delay and then show people
  setTimeout(function () {
    people.classList.remove('bounceInUp');
    people.classList.add('bounce');
  }, 4050);

}

//arrow to scroll to next section
var scrollBtns = doc.querySelectorAll('.js-scroll-next-btn');

for (var x = 0; x < scrollBtns.length; x++) {
  scrollBtns[x].addEventListener('click', function () {
    jQuery.fn.fullpage.moveSectionDown();
  });
}
function indexInParent(node) {
  var children = node.parentNode.childNodes;
  var num = 0;
  for (var i=0; i<children.length; i++) {
    if (children[i]==node) return num;
    if (children[i].nodeType==1) num++;
  }
  return -1;
}


function isElementInViewport (el) {
  var rect = el.getBoundingClientRect();

  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
    rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
  );
}



/*lineGraphInterval =  setInterval(function () {
 if(lineGraphDotCounter >= lightLine__dots.length) {
 clearInterval(lineGraphInterval);
 }
 lightLine__dots[lineGraphDotCounter].classList.add('pulse', 'show-me');
 lineGraphDotsOffset = lineGraphDotsOffset + 300;
 lineGraphDotCounter++;
 }, lineGraphDotsOffset); */

/* setTimeout(function () {
 lightLine__dots[1].classList.add('pulse', 'show-me');
 }, 3500); */