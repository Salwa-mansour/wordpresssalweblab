const arrowPointer = document.querySelector('.start-shaking span');
const yourHand = document.querySelector('.your-hand');
const myHand = document.querySelector('.my-hand');
const salamHand = document.querySelector('.shake-hands');
const salamText = document.querySelector('.meet');


meeting();

function meeting() {
   
    let isMoving = 0;

    // interval1 = setInterval(salamReset, 3000);

    yourHand.addEventListener("click",alSalamAlaikum )

    function alSalamAlaikum() {
        
        

        // setInterval(function(){window.requestAnimationFrame(salamReset)} ,4000)  
        isMoving = 1;
        yourHand.classList.remove('salam-animation-reverce')
        yourHand.classList.add('salam-animation');
        myHand.classList.remove('salam-animation-reverce');
        myHand.classList.add('salam-animation');
        salamHand.classList.add('salam-animation');
        salamText.classList.add('salam-animation');
        // isMoving = 0;
        if (isMoving===1) {
          
            arrowPointer.style.animation='unset';
         
        } 
    // salamAnimationInerval = setInterval(function(){window.requestAnimationFrame(salamReset)} ,3000)    
    salamAnimationInerval = setInterval(salamReset ,3000)    
  
  
    }
  
    function salamReset(){
       
        isMoving =0;
        yourHand.classList.add('salam-animation-reverce')
        yourHand.classList.remove('salam-animation');
        
        myHand.classList.add('salam-animation-reverce');
        myHand.classList.remove('salam-animation');
        salamHand.classList.remove('salam-animation');
        salamText.classList.remove('salam-animation');
        if (isMoving===0) {
          console.log('salamReset')
            arrowPointer.style.animation='arrow-bounce .5s ease .1s infinite';
            
        } 
        //    yourHand.classList.remove('salam-animation-reverce');
        //    myHand.classList.remove('salam-animation-reverce');
        // window.requestAnimationFrame(salamReset)
        clearInterval(salamAnimationInerval);
    }
   
//clearInterval(interval1)//execute once;
} 
