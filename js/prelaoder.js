

const caoMoji=['(＠＾▽＾＠);','(* ^ ^ *);','（>﹏<）;','( *﹏* );','( ^_* );',
                '(o^▽^o);','ヽ(o^ ^o)ﾉ;','(◕‿◕);','(✯◡✯);'];
// const random= Math.floor(Math.random() * caoMoji.length-1)
const preloaderElemnt =document.querySelector('.preloader-caoMoji');
const waitingDots =document.querySelectorAll('.loader-dot');
const preloadContainter = document.querySelector('.preloader');

function isLoading(){
   
    const random= Math.floor(Math.random() * caoMoji.length)
    preloaderElemnt.innerHTML=`${caoMoji[random]}`
    // preloaderElemnt.classList.add('show');
     console.log(random)
}
let load = setInterval(isLoading,1000)


function doneLoading(){
    waitingDots.forEach((dot)=>{
        dot.style.animation = "unset";
    })
    clearInterval(load);
    preloadContainter.style.display = "none"
}


 window.onload = doneLoading
    