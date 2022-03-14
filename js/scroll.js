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

    onScroolMove('.inview-container', '.home-article-box', 'drop-on-scroll', 'no-opacity', 400, 2); //   onScroolMove(elemntInveiw,targetedElemnt, animationClass,removableClass, topAndBottom, windowHighetRate)
    onScroolMove('#articles', '.section-title', 'title-slide-in', 'noh', 500, 2); //   onScroolMove(elemntInveiw,targetedElemnt, animationClass,removableClass, topAndBottom, windowHighetRate)
    
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
  
    // ----------- end ------------------
});