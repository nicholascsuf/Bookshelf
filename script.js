//Author: Jin Lu
//Email: jlu28@csu.fullerton.edu
//Date Created: 04-20-2022
//Copyright © Jin Lu. All rights reserved. 


$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
    })
    //typing animation script
    var typed = new Typed(".typing", {
        strings:["Programmer", "CS Student"],
        typeSpeed: 100, 
        backSpeed: 60,
        loop: true
    })
        
});
    

        
      
