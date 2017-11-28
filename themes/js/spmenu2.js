$(function(){
    width = Math.min($(window).width(), window.innerWidth); 
    height = window.innerHeight;   
    $(".nav-link").click(function(){
        if($(this).hasClass("has-child")){                  
            if( $(this).hasClass("hover-link") ){
                return true;
            }
            else{
                if( $(this).parents(".navbar-step-in").length && !$(this).parents(".navbar-step-2").length )
                {
                    $(".navbar-step-2").removeClass("open-nav");
                    $(".navbar-step-in .nav-link").removeClass("hover-link");
                }
                else if( !$(this).parents(".navbar-step-2").length )
                {
                    $(".navbar-step-in").removeClass("open-nav");
                    $(".nav-link").removeClass("hover-link");
                }
                $(".nav-0").addClass("open-nav");

                var navH = parseInt( $(".nav-0").height() ) + 'px';
                $(".navbar-step-in").css({
                    "min-height": navH,
                });

                var open_block = $(this).data("target");
                $(this).addClass("hover-link");
                $(open_block).addClass("open-nav");

                return false;
            }
            
        }
        else{
            if( $(this).parents(".navbar-step-in").length && !$(this).parents(".navbar-step-2").length )
            {
                $(".navbar-step-2").removeClass("open-nav");
                $(".navbar-step-in .nav-link").removeClass("hover-link");
            }
            else if( !$(this).parents(".navbar-step-2").length )
            {
                $(".navbar-step-in").removeClass("open-nav");
                $(".nav-link").removeClass("hover-link");
            }
            return true;
        }
    }); 

    $(".close-btn").click(function(){
        if( $(this).parents(".navbar-step-in").hasClass("navbar-step-2") ){
            $(this).parents(".navbar-step-2").removeClass("open-nav");
            $(".navbar-step-in .nav-link").removeClass("hover-link");
        }
        else{
            $(".navbar-step-2").removeClass("open-nav");
            $(this).parents(".navbar-step-in").removeClass("open-nav");                 
            $(".vertical-nav").removeClass("open-nav");
            $(".nav-link").removeClass("hover-link");
        }
        return false;
    });   

//############################################
    $(".navbar-toggler").click(function(){
        var navBar = $(this).data("target");
        $(navBar).toggleClass("show");
        $(this).toggleClass("collapsed");        
    });

    var $div = $("#navbarSupportedContent");
    var observer = new MutationObserver(function(mutations) {
      mutations.forEach(function(mutation) {
        if (mutation.attributeName === "class") {
          if( $("#navbarSupportedContent").hasClass("show") ){
                $(".navbar-toggler").html('<img src="/bitrix/templates/.default/assets/img/menu/close-icon.png" alt="close">');
                $(".nav-0").addClass("open-nav");
                $("#feedback-container").removeClass("hidden");
            } 
            else{
                $(".navbar-toggler").html('<span class="fa fa-bars"></span>');
                $(".vertical-nav").removeClass("open-nav");
                $(".navbar-step-in").removeClass("open-nav");        
                $(".nav-link").removeClass("hover-link");
                $("#feedback-container").addClass("hidden");
          } 
        }
      });
    });
    observer.observe($div[0], {
      attributes: true
    });   

    $("div.wrapper").click(function(){
         width = Math.min($(window).width(), window.innerWidth);
         if( width < 992 ){
            if( $(".navbar-toggler").hasClass("collapsed") ){
                $(".navbar-toggler").trigger("click");
            }            
        }
        else{
            if( $(".navbar-step-in").hasClass("open-nav") ){
                $(".navbar-step-in .close-btn").trigger("click");
            }
        }        
    });

   /*getBasketMobile();
    if(width>991){

        $(".mCustomScrollbar").css({
            "height" : height - 200 + 'px',
        });

        $(".mCustomScrollbar").mCustomScrollbar({
            axis:"y",
            theme:"light"
        });
    }*/   
});
/*
function getBasketMobile(){
    $.ajax({
        type:"POST",
        url:arOptimusOptions['SITE_DIR']+"ajax/show_basket_top_mob.php",
        data:'',
        success: function(data){  
            var prodCount =  parseInt(data);     
            if( prodCount>0 ){
                $("#cartCount").html(prodCount);
            }
        }
    });
}*/