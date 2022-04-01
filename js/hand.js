const arrowPointer = document.querySelector('.start-shaking span');
const yourHand = document.querySelector('.your-hand');
const myHand = document.querySelector('.my-hand');
const salamHand = document.querySelector('.shake-hands');
const salamText = document.querySelector('.meet');


greeting();

function greeting() {
   
    let isMoving = 0;
    let clickcount = 0;    // interval1 = setInterval(salamReset, 3000);

    yourHand.addEventListener("click",alSalamAlaikum );
    myHand.addEventListener("click",alSalamAlaikum);

    function alSalamAlaikum() {
    
        // setInterval(function(){window.requestAnimationFrame(salamReset)} ,4000)  
        isMoving = 1;
        clickcount++;
      
        yourHand.classList.remove('salam-animation-reset')
        yourHand.classList.add('salam-animation');
        myHand.classList.remove('salam-animation-reset');
        myHand.classList.add('salam-animation');
        salamHand.classList.add('salam-animation');
        salamText.classList.add('salam-animation');
        
          // isMoving = 0;
          if (isMoving===1) {
            arrowPointer.classList.remove('puppy-arrow');
           
         
        } 
        salamAnimationInerval = setInterval(salamReset ,3000) ;

        if(clickcount === 1){
            salamText.innerHTML ="nice to meet you (*^^*);";
        }else if(clickcount === 2){
            salamText.innerHTML = "whatsup friend (o^▽^o);";
        }else if(clickcount === 3){
            salamText.innerHTML ='wanna talk more!  (✯◡✯);<a href="#contact-me" class="">click here </a>';
             clickcount =0;
        }
        // if(clickcount === 3){
        //        salamText.addEventListener("mouseover",()=>{
        //         console.log('hoverd')
        //     clearInterval(salamAnimationInerval);
        //     console.log(clickcount)
        //     })
        //     salamText.addEventListener("mouseleave",()=>{
        //         setInterval(salamReset ,3000) ;
        //         console.log('blured')
        //     })
         
        // }
      
    // salamAnimationInerval = setInterval(function(){window.requestAnimationFrame(salamReset)} ,3000)    
  
  
  
    }
  
    function salamReset(){
       
        isMoving =0;
        yourHand.classList.add('salam-animation-reset')
        yourHand.classList.remove('salam-animation');
        
        myHand.classList.add('salam-animation-reset');
        myHand.classList.remove('salam-animation');
        salamHand.classList.remove('salam-animation');
        salamText.classList.remove('salam-animation');
        if (isMoving===0) {
        //   console.log('salamReset')
            arrowPointer.classList.add('puppy-arrow');
            
            
        } 
        //    yourHand.classList.remove('salam-animation-reverce');
        //    myHand.classList.remove('salam-animation-reverce');
        // window.requestAnimationFrame(salamReset)
        // -- clearing the interval so the reset function doesn't conflict with user click at some point 
        // AKA performing the reset just once after the animation is performed
        clearInterval(salamAnimationInerval);
    }
   
//clearInterval(interval1)//execute once;
} 
