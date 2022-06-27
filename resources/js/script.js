$('.ucitavanje').css("visibility","visible");
$(document).ready(function(){
    $('.ucitavanje').css("visibility","hidden");

    var h = -(parseInt($(".proizvod").css('margin-top')) + $(".akcija").outerHeight())+'px';
    var menubtn = parseInt($("#menu-btn").parent().outerHeight())+'px';
    $('.dropdown-menu').css('margin-top',menubtn);
    $('.akcija').css("top",h);
    $('.akcija').css("z-index",-1);
    //prelazak misa preko proizvoda
    $('.product').hover(function(){
        $(this).find('.opis').css("visibility","hidden");
       // $(this).find('.akcija').css("visibility","visible");
       // $(this).find('.akcija').css("width","100%");
       $(this).find('.akcija').css("top","0");
       $(this).find('.akcija').css("z-index","5");
    }, function(){        
        $(this).find('.opis').css("visibility","visible");
      //  $(this).find('.akcija').css("visibility","hidden");
      //  $(this).find('.akcija').css("width","0%");
      $(this).find('.akcija').css("top",h);
      $(this).find('.akcija').css("z-index","-1");
    });

    //detalji slike
    $('.zumiraj').on('click', function(){
        let img = $(this).parent().parent().parent().find('img').attr('src');

        img = img.replace('_thumb','');
        Swal.fire({
            padding: '4em',
            width: '80%',
            imageUrl: img,
            imageWidth: 1920,

            showCloseButton: true,
            focusConfirm: false,
            showCancelButton: false,
            showConfirmButton: false
          });
        //$('.img_details').find('img').attr('src',img);
        //$('.img_details').css('visibility','visible')
    });
    $('.img_close').on('click', function(){
        $('.img_details').css('visibility','hidden')
    });

    $('.product').on('click', function(){
        
    });

    $('#user-menu-button').on('click',function(){
        $('#dropd').toggleClass('show');
    });

  /*  $('.add').on('click',function(){
        //let add = ('');
        let kol = parseInt($('#kosarica > span > span').text());
        kol += 1;
        $('#kosarica > span > span').text(kol);
    })*/

    $('#kosarica').on('click',function(){
        $('#shopping_cart').toggleClass('show');
    });
    $('#btnclose, #cart_shop_button').on('click', function(){$('#shopping_cart').toggleClass('show');});
    $('.heart').on('click', function(){$(this).toggleClass('like');});
    $('#menu-btn').on('click',function(){
        $('.dropdown-menu').toggleClass('hidden');
    });

    $('.dropdown-item:first').on('click',function(){
        swal("Hello world!");
        $('body').toggleClass('light');
    });

    $('.btns').hover(function(){
        $(this).find('.add').toggleClass('mb-4');
        $(this).find('.heart').toggleClass('mb-8');
        $(this).find('.usporedi').toggleClass('mb-12');
        $(this).find('.zumiraj').toggleClass('mb-8');

    }, function(){ 
        $(this).find('.add').toggleClass('mb-4');
        $(this).find('.heart').toggleClass('mb-8');
        $(this).find('.usporedi').toggleClass('mb-12');       
        $(this).find('.zumiraj').toggleClass('mb-8');
    });

    $('.btns > div:first-child').on('click',function(){
        window.location = $(this).parent().parent().find('a').attr('href');
    });
    
    $('.pg-num').on('click',function(){
        $('.pg-num').removeClass('z-10 bg-indigo-50 border-indigo-500 text-indigo-600');
        $(this).addClass('z-10 bg-indigo-50 border-indigo-500 text-indigo-600');
    });

    


})