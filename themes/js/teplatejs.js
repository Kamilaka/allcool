$(function(){
	//################################ INDEX

    if ( $('#owl-hits-block').length ) {
        hitsOwlB = $('#owl-hits-block');
        // Иницализация самого слайдера.
        hitsOwlB.owlCarousel({            
            loop: true,
            dots: false,
            nav: false,         
            autoplay: false,
            items:1, 
            margin: 15,           
            smartSpeed:500,
            responsiveClass:true,
            responsive:{
                0:{                                     
                    items:1
                },
                620:{                                   
                    items:2
                },                
                992:{                                   
                    items:3
                },
                1360:{                                   
                    items:4
                },
                1600:{                                   
                    items:5
                }
            }
        });

        //Переключатели слайдера
        $('#nav-buttons-1 .owl-next').click(function() {
            hitsOwlB.trigger('next.owl.carousel', [300]);
        });

        $('#nav-buttons-1 .owl-prev').click(function() {
            hitsOwlB.trigger('prev.owl.carousel', [300]);
        });
    } 

    //----------------------------
    if ( $('#owl-new-block').length ) {
        newsOwlB = $('#owl-new-block');
        // Иницализация самого слайдера.
        newsOwlB.owlCarousel({            
            loop: true,
            dots: false,
            nav: false,         
            autoplay: false,
            items:1, 
            margin: 15,           
            smartSpeed:500,
            responsiveClass:true,
            responsive:{
                0:{                                     
                    items:1
                },
                620:{                                   
                    items:2
                },                
                992:{                                   
                    items:3
                },
                1360:{                                   
                    items:4
                },
                1600:{                                   
                    items:5
                }
            }
        });

        //Переключатели слайдера
        $('#nav-buttons-2 .owl-next').click(function() {
            newsOwlB.trigger('next.owl.carousel', [300]);
        });

        $('#nav-buttons-2 .owl-prev').click(function() {
            newsOwlB.trigger('prev.owl.carousel', [300]);
        });
    } 

    $(".drop-block-header").click(function(){
        var $_this = $(this);
        var slidDrop = $_this.data("target");
      if( $(slidDrop).hasClass("active") ){       
        return false;
      }
      else{        
        $(".drop-block-body").removeClass("active");
        $(".drop-block-header").removeClass("active");
        $(slidDrop).addClass("active").slideDown(300, function(){           
             $(".drop-block-body").not(slidDrop).slideUp(300,  function(){
                $_this.addClass("active");
            });             
        });
       
      } 
      return false;
    });  
});

;(function($) {
    $(function() {
        $('.poup-konsul').bind('click', function(e) {
            e.preventDefault();
            $('#poup-konsul-block').bPopup({
		    speed: 400,
		    transition: 'slideIn',
		    transitionClose: 'slideBack',
	    });
        });
     });
 })(jQuery);