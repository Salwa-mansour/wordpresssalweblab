var elementsToShow = document.querySelectorAll('.home-article-box');
console.log(elementsToShow)
elementsToShow.forEach(function(element){
    element.classList.add('no-opacity');
    console.log('class addded')
})

document.addEventListener('DOMContentLoaded', function () {


    var screenWidth = window.innerWidth // The browser viewport width (including vertical scroll bar, includes padding but not border or margin)
        ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;

    var scroll = window.requestAnimationFrame ||
        // IE Fallback
        function (callback) {
            window.setTimeout(callback, 1000 / 60)
        };

    // ////////////////////////////////////////////////////////////////////////////////////////////
    function onScroolMove(targetedElemnts, animationClass, topAndBottom, windowHighetRate) {
        // Detect request animation frame

        var elementsToShow = document.querySelectorAll(targetedElemnts);
        // console.log(elementsToShow)
        function loop() {

            elementsToShow.forEach(function (element) {
                if (isElementInViewport(element)) {
                    element.classList.add(animationClass);
                    console.log('add class');
                } else {
                    element.classList.remove(animationClass);
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


        // Helper function from: http://stackoverflow.com/a/7557433/274826
        function isElementInViewport(el) {

            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }
            var rect = el.getBoundingClientRect();
            // console.log(rect)
            return (
                (rect.top <= topAndBottom &&
                    rect.bottom >= topAndBottom) ||
                (rect.bottom >= (window.innerHeight / windowHighetRate || document.documentElement.clientHeight / windowHighetRate) &&
                    rect.top <= (window.innerHeight / windowHighetRate || document.documentElement.clientHeight / windowHighetRate)) ||
                (rect.top >= topAndBottom &&
                    rect.bottom <= (window.innerHeight / windowHighetRate || document.documentElement.clientHeight / windowHighetRate))
            );
        }

        loop();
    }


 

    // Detect request animation frame
    // var elementsToShow = document.querySelectorAll('.home-article-box');
    // elementsToShow.forEach(function(element){
    //     element.classList.add('.no-opacity');
    // })
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
                (rect.bottom >= (window.innerHeight /2 || document.documentElement.clientHeight /2) &&
                    rect.top <= (window.innerHeight /2 || document.documentElement.clientHeight /2)) ||
                (rect.top >= 200 &&
                    rect.bottom <= (window.innerHeight /2 || document.documentElement.clientHeight /2))
            );
        }

    }
// -------------------function calls------------------------------
    secondAnimationf()


       // if(screenWidth<600){
    // onScroolMove('.home-article-box','drop-on-scroll',0,2);//   onScroolMove(targetedElemnts,animationClass,topAndBottom,windowHighetRate)
    // }
    // ----------- end ------------------
});