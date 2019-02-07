var myButton = document.getElementById('goup');
window.onscroll = function(){
    
    'use strict';
    if (window.pageYOffset >=600){
        
        myButton.style.display = 'block';
        
    }else{
        myButton.style.display = 'none';
    }
};

myButton.onclick = function (){
    
    'use strict';
    
    window.scrollTo(0, 0);
};