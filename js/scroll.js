document.addEventListener('DOMContentLoaded', function () {

    var rotatedTitle = document.querySelector('.section-title');
    var rotatedTitle2 = document.querySelector('.widget-contact h2');
    var rotatedTitle3 = document.querySelector('.wpcf7 input[type="text"]');
    var rotatedTitle4 = document.querySelector('.wpcf7-textarea');
    var rotatedReverce1 = document.querySelector('.widget-contact p');
    var rotatedReverce2 = document.querySelector('.wpcf7 input[type="email"] ');

    // rotatedTitle.forEach(function (element) {
    // rotatedTitle.classList.add('inial-rotate');
    rotatedTitle2.classList.add('inial-rotate');
    rotatedTitle3.classList.add('inial-rotate');
    rotatedTitle4.classList.add('inial-rotate');
    rotatedReverce1.classList.add('inial-rotate-reverce');
    rotatedReverce2.classList.add('inial-rotate-reverce');

    // })
    // greating animation-------------
    // var movingLetters = document.querySelectorAll('.rotate-letter');

    // movingLetters.forEach(function (letter) {
    //     letter.classList.add('rotate');

    // });
    // ------------------------

    var scroll = window.requestAnimationFrame = window.requestAnimationFrame
    || window.mozRequestAnimationFrame
    || window.webkitRequestAnimationFrame
    || window.msRequestAnimationFrame
    || function(f){return setTimeout(f, 1000/60)} // simulate calling code 60 

    // ////////////////////////////////////////////////////////////////////////////////////////////


    function onScroolMove(elemntInveiw, targetedElemnt, animationClass, removableClass, topAndBottom, windowHighetRate) {
        // Detect request animation frame;
        var elementsInveiw = document.querySelectorAll(elemntInveiw);

        // console.log(elementsInveiw)
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



    // -------------------function calls------------------------------

    onScroolMove('.inview-container', '.home-article-box', 'box-inview-position', 'no-opacity', 400, 2); //   onScroolMove(elemntInveiw,targetedElemnt, animationClass,removableClass, topAndBottom, windowHighetRate)
    // onScroolMove('.more-link', '.more-link', 'hide', 'noh', 400, 2); //   onScroolMove(elemntInveiw,targetedElemnt, animationClass,removableClass, topAndBottom, windowHighetRate)
    // onScroolMove('#articles', '.section-title', 'title-slide-in', 'noh', 500, 2); //   onScroolMove(elemntInveiw,targetedElemnt, animationClass,removableClass, topAndBottom, windowHighetRate)

    // ---------------------scroll progress bar----------------------------

    var scroll2 = window.requestAnimationFrame ||
        // IE Fallback
        function (callback) {
            window.setTimeout(callback, 10)
        };

    // -----------------------------

    function scrolltextrotate(elemnt, topInPixels,speed=1) {
        // this funcion is rotating text in seemless motion with scroll 
        const textToRotate = document.querySelector(elemnt);
        var widowHight = document.documentElement.clientHeight; //screen highet
        const scrollTop = textToRotate.getBoundingClientRect(); //top position accourding to the viewport damintions

        //  console.log(textToRotate.style.transform)
        if (scrollTop.top > topInPixels) {
            // 1
            textToRotate.style.transform = `translateX(${250-(1-scrollTop.top / widowHight) *250}px) rotate(${((scrollTop.top /widowHight)*speed) *8}deg)`;
            // console.log(`translateX(${250-(1-scrollTop.top / widowHight) *250}px)`)
            textToRotate.style.opacity = `${20+(1-scrollTop.top / widowHight) *80}%`;


        } else {
            // 1
            textToRotate.style.transform = `translateX(0) rotate(0deg)`;
            textToRotate.style.opacity = `100%`;
            //    console.log('hme')
        }
    }
    // ---------------------------
    function scrolltextrotateReverce(elemnt, topINPixels) {
        // this funcion is rotating text in seemless motion with scroll 
        const textToRotate = document.querySelector(elemnt);
        var widowHight = document.documentElement.clientHeight; //screen highet
        const scrollTop = textToRotate.getBoundingClientRect(); //top position accourding to the viewport damintions

        //  console.log(scrollTop.top)
        if (scrollTop.top > topINPixels) {
            // 1
            textToRotate.style.transform = `translateX(${-250+(1-scrollTop.top / widowHight) *250}px) rotate(${360-((scrollTop.top /widowHight) *8)}deg)`;
            // console.log( `rotate(${(scrollTop.top /widowHight) *15}deg)`)
            // textToRotate.style.transform = `translateX(${80+(1-scrollTop.top / widowHight) *20}%)`;
            textToRotate.style.opacity = `${20+(1-scrollTop.top / widowHight) *80}%`;

        } else {
            // 1
            textToRotate.style.transform = `rotate(360deg) translateX(0)`;
            textToRotate.style.opacity = `100%`;

        }
    }

    // ---------------------------
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
        // -----------------------------------------------
        // scrolltextrotate('.section-title', 0,2);
        scrolltextrotate('.widget-contact h2', 200);
        scrolltextrotateReverce('.widget-contact p', 300);
        scrolltextrotate('.wpcf7 input[type="text"]', 400);
        scrolltextrotateReverce('.wpcf7 input[type="email"]', 550);
        scrolltextrotate('.wpcf7-textarea', 600);
        //  ----------------------
        scroll(scrollProgressF);

    }

scrollProgressF();

    // addEventListener('scroll', scrollProgressF);
    // addEventListener('scroll',scrolltextrotate);
    // scroll2(scrollProgressF);
    // -----------------------skill borgress circle animation-----------------
    function onScroolprogress(elemntInveiwClass, animationClass) {
        var elementsToShow = document.querySelectorAll(elemntInveiwClass);

        function loop() {

            Array.prototype.forEach.call(elementsToShow, function (element) {
                if (isElementInViewport(element)) {
                    // element.classList.add(animationClass);
                    if(element.classList.contains('html')||element.classList.contains('css')){
                        element.style.animation='conic-change90 .5s linear .3s 1 normal forwards';
                    }else if(element.classList.contains('javascript')){
                        element.style.animation='conic-change50 .5s linear .3s 1 normal forwards';
                    }else if(element.classList.contains('wordpress')){
                        element.style.animation='conic-change80 .5s linear .3s 1 normal forwards';
                    }
                    // --
                } else {
                    element.style.animation='unset';
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
                (rect.top <= 0 &&
                    rect.bottom >= 0) ||
                (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
                (rect.top >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
            );
        }
    }
    onScroolprogress('.borgress-circle', 'inview')
    // ----------- end ------------------
});