$(function(){
    $(".close-btn-1").click(function(){
        $(".menu-left-1").toggleClass("menu-open-1");
        $(this).toggleClass("open-btn-1");
       });
    });

$('ul#father>li').hover(function(){
     $(this).find('ul.son-1').show(400);
},function(){
      $(this).find('ul.son-1').hide(400);

  });