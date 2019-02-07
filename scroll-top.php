<!--
<style>
    div {
    position: fixed;
    bottom: 30px;
    right: 30px;
    display: none;
    font-size: 40px;
}
#goup {
    font-family: 'FontAwesome';
    content: "\f0aa";
   
}
    .far fa-arrow-circle-up {
    font-family: 'FontAwesome';
    content: "\f0aa";
    display: inline-block;
    font-size: 20px;
}
</style>
<head>
<link rel="stylesheet" href="css/scroll-top.css">
<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    
</head>
<body style="height: 4000px">
-->
   <div id="goup"><b class="far fa-arrow-circle-up"></b></div>
    <script src="js/scroll-top.php"></script>
    <script>
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
    
    </script>
<!--</body>-->
