document.addEventListener('DOMContentLoaded', function () {

    var elementsToShow = document.querySelectorAll('.home-article-box');
    // console.log(elementsToShow)
    elementsToShow.forEach(function (element) {
        element.classList.add('no-opacity');
        // console.log('class addded')
    })
    // greating animation-------------
    // var movingLetters = document.querySelectorAll('.rotate-letter');

    // movingLetters.forEach(function (letter) {
    //     letter.classList.add('rotate');

    // });
    // ------------------------

    var scroll = window.requestAnimationFrame ||
        // IE Fallback
        function (callback) {
            window.setTimeout(callback, 10000 / 60)
        };

    // ////////////////////////////////////////////////////////////////////////////////////////////


    function onScroolMove(elemntInveiw, targetedElemnt, animationClass, removableClass, topAndBottom, windowHighetRate) {
        // Detect request animation frame;
        var elementsInveiw = document.querySelectorAll(elemntInveiw);

        // console.log(elementsToShow)
        function loop() {

            elementsInveiw.forEach(function (element) {
                if (isElementInViewport(element)) {
                    element.querySelector(targetedElemnt).classList.add(animationClass);
                    element.querySelector(targetedElemnt).classList.remove(removableClass);
                    // console.log('add class');
                } else {
                    element.querySelector(targetedElemnt).classList.remove(animationClass);
                    element.querySelector(targetedElemnt).classList.add(removableClass);
                    // console.log('remove class');
                }
            });

            scroll(loop);
        }

        // Helper function from: http://stackoverflow.com/a/7557433/274826
        function isElementInViewport(el) {
            // special bonus for those using jQuery
            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }
            var rect = el.getBoundingClientRect();
            // console.log(rect)
            return (
                (rect.top >= topAndBottom &&
                    rect.bottom <= topAndBottom) ||
                (rect.bottom <= (window.innerHeight / windowHighetRate || document.documentElement.clientHeight / windowHighetRate) &&
                    rect.top >= (window.innerHeight / windowHighetRate || document.documentElement.clientHeight / windowHighetRate)) ||
                (rect.top <= topAndBottom &&
                    rect.bottom >= (window.innerHeight / windowHighetRate || document.documentElement.clientHeight / windowHighetRate))
            );
        }
        // make every thing work
        loop();

    }


    function secondAnimationf() {
        var scroll = window.requestAnimationFrame ||
            // IE Fallback
            function (callback) {
                window.setTimeout(callback, 1000 / 60)
            };

        function loop() {

            elementsToShow.forEach(function (element) {
                if (isElementInViewport(element)) {

                    element.classList.add('drop-on-scroll');
                    element.classList.remove('no-opacity');
                } else {
                    // element.classList.remove('drop-on-scroll');
                }
            });

            scroll(loop);
        }

        // Call the loop for the first time
        loop();

        // Helper function from: http://stackoverflow.com/a/7557433/274826
        function isElementInViewport(el) {
            // special bonus for those using jQuery
            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }
            var rect = el.getBoundingClientRect();
            return (
                (rect.top <= 200 &&
                    rect.bottom >= 200) ||
                (rect.bottom >= (window.innerHeight / 2 || document.documentElement.clientHeight / 2) &&
                    rect.top <= (window.innerHeight / 2 || document.documentElement.clientHeight / 2)) ||
                (rect.top >= 200 &&
                    rect.bottom <= (window.innerHeight / 2 || document.documentElement.clientHeight / 2))
            );
        }

    }

    // -------------------function calls------------------------------



    // if(screenWidth<600){
    onScroolMove('.inview-container', '.home-article-box', 'drop-on-scroll', 'no-opacity', 400, 2); //   onScroolMove(elemntInveiw,targetedElemnt, animationClass,removableClass, topAndBottom, windowHighetRate)
    // inveiwMove('.rotate-letter','rotate',300,1);//
    // }
    // secondAnimationf()
    // ---------------------scroll progress bar----------------------------

    var scroll2 = window.requestAnimationFrame ||
        // IE Fallback
        function (callback) {
            window.setTimeout(callback, 10)
        };

    function scrollProgressF() {
        // progress bar
        // https://www.30secondsofcode.org/css/s/scroll-progress-bar
        const scrollProgress = document.getElementById('scroll-progress');

        const height =
            document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollTop =
            document.body.scrollTop || document.documentElement.scrollTop;
        scrollProgress.style.width = `${(scrollTop / height) * 100}%`;
        //rotate eye----------------------
        const eyeRotate = document.querySelector('.rotate.eye');
        eyeRotate.style.transform = `rotate(${(scrollTop / height) *360}deg)`;
        // console.log(`rotate(${(scrollTop / height) *360}deg)`);
    }

    addEventListener('scroll', scrollProgressF);

    // scroll2(scrollProgressF);
    //   ---------------------slider---------------------------
    function headerSlider() {
        jQuery('.slide-nav').on('click', slideAction);

        function slideAction(e) {

            e.preventDefault();


            // get current slide
            var current = jQuery('.flex--active').data('slide');
            console.log(current);
            // get button data-slide
            next = jQuery(this).data('slide');

            jQuery('.slide-nav').removeClass('active');
            jQuery(this).addClass('active');

            if (current === next) {
                return false;
            } else {
                jQuery('.slider__warpper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
                jQuery('.flex--active').addClass('animate--end');
                setTimeout(function () {
                    jQuery('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
                    jQuery('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
                }, 800);
            }
        }

    }
    //   ------------------------------------------

    function jsAutoSlider() {

        var currentSlide = document.querySelector('.flex--active');
        var nextSlide
        var currentSlideNumber = Number(currentSlide.getAttribute('data-slide'));
        if (currentSlideNumber == 5) {
            document.querySelector('.flex--active').setAttribute('data-slide', '0');
        }

        var nexSlideNumber = currentSlideNumber + 1;
        // console.log(nexSlideNumber);
        var allSlides = document.querySelectorAll('.flex__container');

        allSlides.forEach(function (slide) {
            // console.log(slide.getAttribute('data-slide')==nexSlideNumber)
            if (slide.getAttribute('data-slide') == nexSlideNumber) {
                nextSlide = slide;
                console.log(nextSlide)
            }
        })
        nextSlide.classList.add('flex--active');
        currentSlide.classList.remove('flex--active');
        // nextSlide.classList.add('flex--preStart'); //0
        // if (nextSlide.classList.contains('flex--preStart')) {
        //     console.log('yee');
            // nextSlide.classList.add('animate--end')
        // } //1
        jQuery('.slider__warpper').find('.flex__container[data-slide=' + nexSlideNumber + ']').addClass('flex--preStart'); //0
        jQuery('.flex--active').addClass('animate--end'); //1
        setTimeout(function () {
            // console.log('reset')
            jQuery('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active'); //2
            jQuery('.animate--end').addClass('animate--start').removeClass('animate--start flex--active'); //3
            
        // if (nextSlide.classList.contains('flex--preStart')) {
        //     nextSlide.classList.remove('animate--start', 'flex--preStart');
        //     nextSlide.classList.add('flex--active')
        // } //2

        // if (nextSlide.classList.contains('animate--end')) {
        //     nextSlide.classList.add('animate--start');
        //     nextSlide.classList.remove('animate--start', 'flex--active')
        // } //3
        }
        , 800);

    }
    // ---------------------------------------------
    function slideActionNOClick() {

        // console.log('funcion fired')
        // get current slide
        var current = jQuery('.flex--active').data('slide');
        // console.log(current);
        // get button data-slide
        next = jQuery('.flex--active').data('slide') + 1;

        jQuery('.slide-nav').removeClass('active');
        jQuery(next).addClass('active');

        if (current == 5) {
            // console.log('fife')
            current = 1
        }
        //  else {
        jQuery('.slider__warpper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart'); //0
        jQuery('.flex--active').addClass('animate--end'); //1
        setTimeout(function () {
            // console.log('reset')
            jQuery('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active'); //2
            jQuery('.animate--end').addClass('animate--start').removeClass('animate--start flex--active'); //3
        }, 800);
        // }

    }

    var SECONDS_INTERVAL = 6000; // 6s
    var mouseHoverFlag = false;
    jQuery('.header-slider').hover(function () {
        mouseHoverFlag = true;
    }, function () {
        mouseHoverFlag = false;
    });
    setInterval(function () {
        if (!mouseHoverFlag) {
            // slideActionNOClick();
            // jsAutoSlider();
        }
    }, SECONDS_INTERVAL)
    // setInterval(slideActionNOClick, 6000);
    // setTimeout(slideActionNOClick, 3000);
    headerSlider();
    //   setTimeout(() => {console.log("this is the second message")}, 100);
    // ----------- end ------------------
});