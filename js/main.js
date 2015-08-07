$(document).ready(function(){

    function menu() {
        var $menu = $(".scroll-menu");
        if ($(window).width() > 767) {
            $(".b-header.main").css("opacity","1");
            var offset = $(".b-header.main").height(),
            hideOffset = 14;
            if($(".b-main").length > 0) {
                hideOffset = offset;
            } 
            if ( $(this).scrollTop() > offset && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed").slideDown();
            } else if($(this).scrollTop() <= hideOffset && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("default").hide();
            }
        } else {
            $(".b-header.main").css("opacity","0");
            $menu.addClass("fixed").removeClass("default").show();
        }
    }
    function whenResize(){
        if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
        $(".b-content").css("min-height",myHeight-($(".b-footer").height()+$(".b-header").height()) );
        menu();

        if( device.mobile() ){
            if( myHeight < myWidth ){
                $("body").addClass("horizontal");
            }else{
                $("body").removeClass("horizontal");
            }
        }
    }
    $(window).resize(whenResize);
    whenResize();

    $(window).scroll(function(){
        menu();
    });

    $(".menu-mobile.open").click(function() {
        $(".menu-mobile.open").hide();
        $(".menu-mobile.close").show();
        $(".scroll-menu .b-menu").slideDown();
        return false;
    });
    $(".menu-mobile.close").click(function() {
        $(".menu-mobile.open").show();
        $(".menu-mobile.close").hide();
        $(".scroll-menu .b-menu").slideUp();
        return false;
    });
        
    $(".fancy-img").fancybox({
        padding : 0,
        nextEffect : ( device.mobile() || device.tablet() )?"fade":"elastic",
        prevEffect : ( device.mobile() || device.tablet() )?"fade":"elastic"
    });
    $("body").on("click",".fancy-img-thumb", function(){
        $("#bg-img").css("background-image",$(this).parents("li").css("background-image"));
        $("#bg-img a").attr("href",$(this).attr("href"));
        return false;
    });

    $(".fancy-img-big").click(function(){
        $(".fancy-img[href='"+$(this).attr("href")+"']").click();
        return false;
    });


    $("#disp-sel label").click(function() {
        $(this).closest("ul").find("li").removeClass("active");
        $(this).parent().addClass("active").find("input").prop( "checked", true );
        

    })


    $('.b-slider').slick({
      infinite: true,
      speed: 300,
      fade: true,
      cssEase: 'linear',
      prevArrow: '<span class="left-arrow"></span>',
      nextArrow: '<span class="right-arrow"></span>'
    });

    $( ".tumb" ).click(function() {
        if($(".tumb").hasClass("light")) {
            $(".b-slider .slide .b-eyes .eye,#eye-text").fadeOut(function(){
                $("#eye-text").text("5 sec.").fadeIn();
                $(".b-slider .slide .b-eyes .eye").removeClass("tumb-eye").fadeIn();
                $(".displays-cont .back").fadeOut();
            });
            $( ".tumb" ).animate({
                paddingLeft: "4px"
            }, 200 );
            
            $(".tumb").removeClass("light");
            
        } else {
            $(".b-slider .slide .b-eyes .eye,#eye-text").fadeOut(function(){
                $("#eye-text").text("3 sec.").fadeIn();
                $(".b-slider .slide .b-eyes .eye").addClass("tumb-eye").fadeIn();
                $(".displays-cont .back").fadeIn();
            });
            $( ".tumb" ).animate({
                paddingLeft: "62px"
            }, 200 );
            
            $(".tumb").addClass("light");
            
        }
     
    });

    $('#quantity').bind("change keyup input click", function() {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    });
    $("#quantity").keyup(function(){
        if($("#quantity").val()=='0') $("#quantity").val("1");
        $("#quantity").change();
    });
    $("#quantity").focusout(function(){
        if($("#quantity").val()=='') $("#quantity").val("1");
        $("#quantity").change();
    });
    $(".up-arrow").click(function(){
        quantity = $("#quantity").val()*1;
        if(quantity<999) {
            $("#quantity").val(quantity+1);
            $("#quantity").change();
        }
    });
    $(".down-arrow").click(function(){
        quantity = $("#quantity").val()*1;
        if(quantity>1) {
            $("#quantity").val(quantity-1);
            $("#quantity").change();
        }
    });

    $('#quantity').change(function() {
       $("#old-price").text($(this).val()*109);
        $("#new-price").text($(this).val()*89);
    });

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
          $('[placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
              input.removeClass('placeholder');
            }
          }).blur(function() {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
              input.addClass('placeholder');
              input.val(input.attr('placeholder'));
            }
          }).blur().parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
              var input = $(this);
              if (input.val() == input.attr('placeholder')) {
                input.val('');
              }
          })
        });
      }
    }
    $.fn.placeholder();

    var icons = {
        header: "acc-header",
        activeHeader: "acc-header acc-header-active"
    };

    if( $(".accordion").length ){
        $( ".accordion" ).accordion({
            icons: icons,
            active: false,
            collapsible: true,
            heightStyle: "content"
        });
    }

    $("#disp-sel label").click(function(){

        if ( $("#display-1" ).prop( "checked" ) ) {
            $("#quantity").val("1");
            $("#quantity").change();
        }
        if ( $("#display-2" ).prop( "checked" ) ) {
            $("#quantity").val("2");
            $("#quantity").change();
        }
        if ( $("#display-3" ).prop( "checked" ) ) {
            $("#quantity").val("3");
            $("#quantity").change();
        }
    });








});