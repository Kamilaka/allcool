$(function(){
    width = Math.min($(window).width(), window.innerWidth);
    height = window.innerHeight;

    $(".nav-0").css({
        "min-height": height,
    });

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
                $(".navbar-toggler").html('<img src="themes/img/menu/close-icon.png" alt="close">');
            } 
            else{
                $(".navbar-toggler").html('<span class="fa fa-bars"></span>');
                $(".vertical-nav").removeClass("open-nav");
                $(".navbar-step-in").removeClass("open-nav");        
                $(".nav-link").removeClass("hover-link");
          } 
        }
      });
    });
    observer.observe($div[0], {
      attributes: true
    });   

});