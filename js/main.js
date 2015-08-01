$(document).ready(function(){	

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
    }
    $(window).resize(whenResize);
    whenResize();


    var $menu = $(".b-header");

    $(window).scroll(function(){
        if ( $(this).scrollTop() > $(".b-header").height() && $menu.hasClass("default") ){
            $menu.removeClass("default").addClass("fixed");
        } else if($(this).scrollTop() <= $(".b-header").height() && $menu.hasClass("fixed")) {
            $menu.removeClass("fixed").addClass("default");
        }
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