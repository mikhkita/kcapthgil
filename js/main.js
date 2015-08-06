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
            $( ".tumb" ).animate({
                paddingLeft: "4px"
            }, 200 );
            $(".tumb").removeClass("light");
            $(".displays-cont .back").fadeOut();
        } else {

            $( ".tumb" ).animate({
                paddingLeft: "62px"
            }, 200 );
            $(".tumb").addClass("light");
            $(".displays-cont .back").fadeIn();
        }
     
    });

    $('#quantity').bind("change keyup input click", function() {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    });
    $("#quantity").keyup(function(){
        if($("#quantity").val()=='0') $("#quantity").val("1");
    });
    $("#quantity").focusout(function(){
        if($("#quantity").val()=='') $("#quantity").val("1");
    });
    $(".up-arrow").click(function(){
        quantity = $("#quantity").val()*1;
        if(quantity<999) {
            $("#quantity").val(quantity+1);
        }
    });
    $(".down-arrow").click(function(){
        quantity = $("#quantity").val()*1;
        if(quantity>1) {
            $("#quantity").val(quantity-1);
        }
    });
	// var myPlace = new google.maps.LatLng(55.754407, 37.625151);
 //    var myOptions = {
 //        zoom: 16,
 //        center: myPlace,
 //        mapTypeId: google.maps.MapTypeId.ROADMAP,
 //        disableDefaultUI: true,
 //        scrollwheel: false,
 //        zoomControl: true
 //    }
 //    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

 //    var marker = new google.maps.Marker({
	//     position: myPlace,
	//     map: map,
	//     title: "Ярмарка вакансий и стажировок"
	// });

    //  var options = {
    //     $AutoPlay: true,                                
    //     $SlideDuration: 500,                            

    //     $BulletNavigatorOptions: {                      
    //         $Class: $JssorBulletNavigator$,             
    //         $ChanceToShow: 2,                           
    //         $AutoCenter: 1,                            
    //         $Steps: 1,                                  
    //         $Lanes: 1,                                  
    //         $SpacingX: 10,                              
    //         $SpacingY: 10,                              
    //         $Orientation: 1                             
    //     }
    // };

    // var jssor_slider1 = new $JssorSlider$("slider1_container", options);

});