document.addEventListener('DOMContentLoaded', function () {

  let header = document.querySelectorAll('.header');

  let pageUpbutt = document.createElement('button');

  let burgerButton = document.querySelector('.burger');
  let closeOpenMenuButton = document.querySelector('.header__close-button')

  burgerButton.onclick = function() {
    document.querySelector('.header').classList.add('active');
  }
  closeOpenMenuButton.onclick = function() {
    document.querySelector('.header').classList.remove('active');
  }

  //-----------------------Media Query 1

  const mediaQuery = window.matchMedia('(min-width: 1230px)')
  function handleTabletChange(e) {

    if (e.matches) {

      //___________________________Header Hidden
      header.forEach((item, index) => {
        if (index != 0) {
          item.style.display = 'flex';
        }
      })

      let fullPage = document.getElementById('fullpage');
      let fullPageRegular = document.getElementById('fullpage-no-scroll');


      //__________________________Initial FullPage

      if (fullPage) {
        new fullpage(fullPage, {
          navigation: true,
          navigationPosition: 'right',
          autoScrolling: true,
          scrollOverflow: true,
          fitToSection: true,
          touchSensitivity: 100,
          bigSectionsDestination: 'top',

          onLeave: function (section, origin, destination, direction) {
            var loadedSlide = this;

            let scroller = document.querySelectorAll('.fp-scroller');

            scroller.forEach((item, index) => {
              item.style.transform = "translate(0px, 0px) translateZ(0px)";
            })


            let activeSlide = document.querySelector('.pagination-page--active');
            activeSlide.innerHTML = origin.index + 1;
          }
        });
      }


      //__________________________Initial FullPage Regular
      if (fullPageRegular) {


        new fullpage(fullPageRegular, {
          navigation: false,
          autoScrolling: false,
          fitToSection: false,

          onLeave: function (section, origin, destination, direction) {
            var loadedSlide = this;

            let scroller = document.querySelectorAll('.fp-scroller');

            scroller.forEach((item, index) => {
              item.style.transform = "translate(0px, 0px) translateZ(0px)";
            })


            let activeButton = document.querySelectorAll('.page-navigation__button');

            activeButton.forEach((item, index) => {
              item.classList.remove('page-navigation__button--active');
            })

            activeButton[origin.index].classList.add("page-navigation__button--active")

          }
        })

        //__________________________Navigation-Regular

        let pageNavigation = document.querySelectorAll('.page-navigation__button');
        let fbtable = document.querySelectorAll('.fp-tableCell');

        fbtable.forEach((item, index) => {
          item.style.display = "unset";
        })


        if (pageNavigation) {

          pageNavigation.forEach((item, index) => {
            item.addEventListener('click', function (e) {
              fullpage_api.moveTo(index + 1);
            })
          });
        }

      }



      //__________________________Navigation
      let nav = document.querySelector('.fp-right')

      if (nav) {
        pageUpbutt.className = "page-up";
        pageUpbutt.innerHTML = "НАВЕРХ";

        let paginationPage = document.createElement('div');
        paginationPage.className = "pagination-page";
        paginationPage.innerHTML = "<span class=\"pagination-page--active\">1</span><span class=pagination-page--all>/9</span> ";
        nav.append(paginationPage)
        nav.append(pageUpbutt)


        let pageUp = document.querySelector('.page-up');
        pageUp.addEventListener('click', function (e) {
          fullpage_api.moveTo(1);
        });

      }

    }
  }
  mediaQuery.addListener(handleTabletChange);
  handleTabletChange(mediaQuery);

  //-----------------------Media Query 2

  const mediaQuery1 = window.matchMedia('(max-width: 1230px)')
  function handleTabletChange1(e) {

    if (e.matches) {
      console.log('Media Query Matched!')

      let header = document.querySelectorAll('.header');
      header.forEach((item, index) => {
        if (index != 0) {
          item.style.display = 'none';
          console.log('hello');
        }
      })

      fullpage_api.destroy('all');
    }
  }
  mediaQuery1.addListener(handleTabletChange1);
  handleTabletChange1(mediaQuery1);

  //-----------------------Popup

  const enterToProfile = document.querySelectorAll('.leave-request')
  const popupBlock = document.querySelectorAll('.popup__block')
  const popupClose = document.querySelectorAll('.popup__close')
  const popup = document.querySelectorAll('.popup')
  let nav = document.querySelector('.fp-right')

  window.onclick = function (event) {

    popup.forEach((item, index) => {
      if (event.target == item) {

        if (nav) {
          fullpage_api.setAllowScrolling(true);
          nav.classList.remove('dsp-n')
        }

        popupBlock.forEach((item, index) => {
          item.classList.remove("popup__block--open")
          popup[index].classList.remove("popup--open");
        })

        const body = document.body;
        const scrollY = body.style.top;
        body.style.top = '';
        body.classList.remove('stop-scroll');
        window.scrollTo(0, parseInt(scrollY || '0') * -1);
      }
    })
  }

  // document.querySelector('.privacy-policy').onclick = function () {
  //   document.querySelector('.privacy-policy').parentNode.querySelector('input').value = !document.querySelector('.privacy-policy').parentNode.querySelector('input').value;
  // };

  enterToProfile.forEach((item, index) => {
    item.addEventListener('click', () => {

      if (nav) {
        fullpage_api.setAllowScrolling(false);
        nav.classList.add('dsp-n')
      }

      popupBlock.forEach((item, index) => {
        item.classList.add("popup__block--open")
        popup[index].classList.add("popup--open");
      })

      const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
      const body = document.body;
      console.dir(body)
      body.style.top = `-${scrollY}`;
      body.classList.add('stop-scroll');


    })
  })

  popupClose.forEach((item, index) => {
    item.addEventListener('click', () => {

      if (nav) {
        fullpage_api.setAllowScrolling(true);
        nav.classList.remove('dsp-n')
      }

      popupBlock.forEach((item, index) => {
        item.classList.remove("popup__block--open")
        popup[index].classList.remove("popup--open");
      })

      const body = document.body;
      const scrollY = body.style.top;
      body.style.top = '';
      body.classList.remove('stop-scroll');
      window.scrollTo(0, parseInt(scrollY || '0') * -1);
    })
  })

  window.addEventListener('scroll', () => {
    document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
  });

  //---------------------------Dual Switcher



  function dualSwitcher(switcherCategory) {

    if (switcherCategory) {
      let catalog = switcherCategory.querySelectorAll('.list-item');
      let description = switcherCategory.querySelectorAll('.description-item');
      catalog.forEach((item, index) => {

        item.addEventListener('click', () => {

          catalog.forEach((item, index) => {
            item.classList.remove('list-item--active')
          })

          item.classList.add('list-item--active')

          description.forEach((item) => {
            item.classList.remove('dsp-f')
          })
          description[index].classList.add('dsp-f')
        })
      })
    }

  }


  dualSwitcher(document.querySelector("#crane-switcher"));
  dualSwitcher(document.querySelector("#services"));



  //---------------------------Review Slider

  function sliderNavigation(nextRevButt, prevRevButt, sw) {

    if (nextRevButt, prevRevButt) {

      nextRevButt.addEventListener('click', () => {
        sw.slideNext();
      })

      prevRevButt.addEventListener('click', () => {
        sw.slidePrev();
      })
    }
  }

  sliderNavigation(document.querySelector('.review-next--regular'), document.querySelector('.review-prev--regular'), swiperRegular)
  sliderNavigation(document.querySelector('.review-next'), document.querySelector('.review-prev'), swiper)



})

//---------------------------Swiper Review Init

const swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },

  width: 290,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    // when window width is >= 320px

    380: {
      width: 320,
    },

    580: {
      width: 450,
    },

    1480: {
      width: 580,
    }

  }
});


const swiperRegular = new Swiper(".mySwiper-Regular", {
  pagination: {
    el: ".swiper-pagination--regular",
    type: "fraction",
  },
  width: 290,

  breakpoints: {
    // when window width is >= 320px

    380: {
      width: 320,
    },

    580: {
      width: 450,
    },

    1480: {
      width: 945,
    }

  }
});


