

    $('.hamburger-menu-link').on('click',function(){ // кликаем на кнопку бургера
      $('.mobile').slideToggle(); // меню открывается
    }); 
    
    $('.mobile__close-link').on('click', function(){ // кликаем на кнопку крестика
        $('.mobile').slideToggle(); // меню закрывается
      });



      ////////////////////

      $(".hamburger-menu-link").click(function() {
        $(".mobile").toggleClass("open_menu");
      });
      
      $(document).mouseup(function(e) {
        var $target = $(e.target);
        if ($target.closest(".header").length == 0 && $target.closest(".mobile__close-link").length == 0) {
          $(".mobile").removeClass("open_menu");
        }
      });
