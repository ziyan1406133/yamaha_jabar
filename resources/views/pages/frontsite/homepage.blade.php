@extends('layouts.frontsite')

@section('head')
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->	

    <!-- HOVER -->
    <link rel="stylesheet" href="{{ asset('js/hover/reset.css') }}">    
    <link rel="stylesheet" href="{{ asset('js/hover/hover_pack.css') }}">
    <script src="{{ asset('js/hover/jquery.min.js') }}"></script>
    <script src="{{ asset('js/hover/hover_pack.js') }}"></script>


    <!-- slider JS files -->    
    <script class="rs-file" src="{{ asset('css/royal/royalslider/jquery-1.8.3.min.js') }}"></script>
    <script class="rs-file" src="{{ asset('css/royal/royalslider/jquery.royalslider.min.js') }}"></script>
    <link class="rs-file" href="{{ asset('css/royal/royalslider/royalsliderc4ca.css?1') }}" rel="stylesheet">

    <!-- syntax highlighter -->
    <script src="{{ asset('css/royal/preview-assets/js/highlight.pack.js') }}"></script>
    <script src="{{ asset('css/royal/preview-assets/js/jquery-ui-1.8.22.custom.min.js') }}"></script>
    <script> hljs.initHighlightingOnLoad();</script>    

    <!-- slider stylesheets -->    
    <link class="rs-file" href="{{ asset('css/royal/royalslider/skins/minimal-white/rs-minimal-white.css') }}" rel="stylesheet">


    <!-- slider css -->
    <style>
    #full-width-slider {
    width: 100%;
    color: #000;
    }
    .coloredBlock {
    padding: 12px;
    background: rgba(255,0,0,0.6);
    color: #FFF;
    width: 200px;
    left: 20%;
    top: 5%;
    }
    .infoBlock {
    position: absolute;
    top: 30px;
    right: 30px;
    left: auto;
    max-width: 25%;
    padding-bottom: 0;
    background: #FFF;
    background: rgba(255, 255, 255, 0.8);
    overflow: hidden;
    padding: 20px;
    }
    .infoBlockLeftBlack {
    color: #FFF;
    background: #000;
    background: rgba(0,0,0,0.75);
    left: 30px;
    right: auto;
    }
    .infoBlock h4 {
    font-size: 20px;
    line-height: 1.2;
    margin: 0;
    padding-bottom: 3px;
    }
    .infoBlock p {
    font-size: 14px;
    margin: 4px 0 0;
    }
    .infoBlock a {
    color: #FFF;
    text-decoration: underline;
    }
    .photosBy {
    position: absolute;
    line-height: 24px;
    font-size: 12px;
    background: #FFF;
    color: #000;
    padding: 0px 10px;
    position: absolute;
    left: 12px;
    bottom: 12px;
    top: auto;
    border-radius: 2px;
    z-index: 25; 
    } 
    .photosBy a {
    color: #000;
    }
    .fullWidth {
    max-width: 100%;
    margin: 0 auto 24px;
    }

    @media screen and (min-width:960px) and (min-height:660px) {
    .heroSlider .rsOverflow,
    .royalSlider.heroSlider {
        height: 350px !important;
    }
    }

    @media screen and (min-width:960px) and (min-height:1000px) {
        .heroSlider .rsOverflow,
        .royalSlider.heroSlider {
            height: 350px !important;
        }
    }
    @media screen and (min-width: 0px) and (max-width: 800px) {
    .royalSlider.heroSlider,
    .royalSlider.heroSlider .rsOverflow {
        height: 300px !important;
    }
    .infoBlock {
        padding: 10px;
        height: auto;
        max-height: 100%;
        min-width: 40%;
        left: 5px;
        top: 5px;
        right: auto;
        font-size: 12px;
    }
    .infoBlock h3 {
        font-size: 14px;
        line-height: 17px;
    }
    }

    </style>



    <style> 
        .captionOrange, .captionBlack
        {
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlack
        {
            font-size:16px;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
        {
            color: #ffffff;
            text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        .bricon
        {
            background: url({{ asset('img/browser-icons.html')}});
        }
    </style>
    <!-- use jssor.slider.min.js instead for release -->
    <!-- jssor.slider.min.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="{{ asset('js/jssor/jssor.core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jssor/jssor.utils.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jssor/jssor.slider.js') }}"></script>
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 3,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 0,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 3

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 300,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 300,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                $SlideHeight: 207,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 15, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 3,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, direction navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $NavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $DirectionNavigatorOptions: {
                    $Class: $JssorDirectionNavigator$,              //[Requried] Class to create direction navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
    </script>



    <script type="text/javascript">
    $(document).ready(function () {

        $('div.kategori1').toggleClass('active');		
        $('div.motor1').toggleClass('active');
            $('div.kategori1').click(function() {
                $('div.kategori1').toggleClass('active');		
                $('div.motor1').toggleClass('active');
                        if($('div.motor2').hasClass('active'))
                        {			
                            $('div.kategori2').toggleClass('active');		
                            $('div.motor2').toggleClass('active');		
                        }
                        if($('div.motor3').hasClass('active'))
                        {			
                            $('div.kategori3').toggleClass('active');		
                            $('div.motor3').toggleClass('active');		
                        }
                        if($('div.motor4').hasClass('active'))
                        {			
                            $('div.kategori4').toggleClass('active');		
                            $('div.motor4').toggleClass('active');		
                        }
                        if($('div.motor5').hasClass('active'))
                        {			
                            $('div.kategori5').toggleClass('active');		
                            $('div.motor5').toggleClass('active');		
                        }
                        if($('div.motor6').hasClass('active'))
                        {			
                            $('div.kategori6').toggleClass('active');		
                            $('div.motor6').toggleClass('active');		
                        }
                        if($('div.motor7').hasClass('active'))
                        {			
                            $('div.kategori7').toggleClass('active');		
                            $('div.motor7').toggleClass('active');		
                        }
                        if($('div.motor8').hasClass('active'))
                        {			
                            $('div.kategori8').toggleClass('active');		
                            $('div.motor8').toggleClass('active');		
                        }
                        if($('div.motor9').hasClass('active'))
                        {			
                            $('div.kategori9').toggleClass('active');		
                            $('div.motor9').toggleClass('active');		
                        }
                        if($('div.motor10').hasClass('active'))
                        {			
                            $('div.kategori10').toggleClass('active');		
                            $('div.motor10').toggleClass('active');		
                        }
                if(!$('div.motor1').hasClass('active'))
                {			
                    $('div.kategori1').toggleClass('active');		
                    $('div.motor1').toggleClass('active');		
                }
            });
            $('div.kategori2').click(function() {
                $('div.kategori2').toggleClass('active');		
                $('div.motor2').toggleClass('active');
                        if($('div.motor1').hasClass('active'))
                        {			
                            $('div.kategori1').toggleClass('active');		
                            $('div.motor1').toggleClass('active');		
                        }
                        if($('div.motor3').hasClass('active'))
                        {			
                            $('div.kategori3').toggleClass('active');		
                            $('div.motor3').toggleClass('active');		
                        }
                        if($('div.motor4').hasClass('active'))
                        {			
                            $('div.kategori4').toggleClass('active');		
                            $('div.motor4').toggleClass('active');		
                        }
                        if($('div.motor5').hasClass('active'))
                        {			
                            $('div.kategori5').toggleClass('active');		
                            $('div.motor5').toggleClass('active');		
                        }
                        if($('div.motor6').hasClass('active'))
                        {			
                            $('div.kategori6').toggleClass('active');		
                            $('div.motor6').toggleClass('active');		
                        }
                        if($('div.motor7').hasClass('active'))
                        {			
                            $('div.kategori7').toggleClass('active');		
                            $('div.motor7').toggleClass('active');		
                        }
                        if($('div.motor8').hasClass('active'))
                        {			
                            $('div.kategori8').toggleClass('active');		
                            $('div.motor8').toggleClass('active');		
                        }
                        if($('div.motor9').hasClass('active'))
                        {			
                            $('div.kategori9').toggleClass('active');		
                            $('div.motor9').toggleClass('active');		
                        }
                        if($('div.motor10').hasClass('active'))
                        {			
                            $('div.kategori10').toggleClass('active');		
                            $('div.motor10').toggleClass('active');		
                        }
                if(!$('div.motor2').hasClass('active'))
                {			
                    $('div.kategori2').toggleClass('active');		
                    $('div.motor2').toggleClass('active');		
                }
            });
            $('div.kategori3').click(function() {
                $('div.kategori3').toggleClass('active');		
                $('div.motor3').toggleClass('active');
                        if($('div.motor1').hasClass('active'))
                        {			
                            $('div.kategori1').toggleClass('active');		
                            $('div.motor1').toggleClass('active');		
                        }
                        if($('div.motor2').hasClass('active'))
                        {			
                            $('div.kategori2').toggleClass('active');		
                            $('div.motor2').toggleClass('active');		
                        }
                        if($('div.motor4').hasClass('active'))
                        {			
                            $('div.kategori4').toggleClass('active');		
                            $('div.motor4').toggleClass('active');		
                        }
                        if($('div.motor5').hasClass('active'))
                        {			
                            $('div.kategori5').toggleClass('active');		
                            $('div.motor5').toggleClass('active');		
                        }
                        if($('div.motor6').hasClass('active'))
                        {			
                            $('div.kategori6').toggleClass('active');		
                            $('div.motor6').toggleClass('active');		
                        }
                        if($('div.motor7').hasClass('active'))
                        {			
                            $('div.kategori7').toggleClass('active');		
                            $('div.motor7').toggleClass('active');		
                        }
                        if($('div.motor8').hasClass('active'))
                        {			
                            $('div.kategori8').toggleClass('active');		
                            $('div.motor8').toggleClass('active');		
                        }
                        if($('div.motor9').hasClass('active'))
                        {			
                            $('div.kategori9').toggleClass('active');		
                            $('div.motor9').toggleClass('active');		
                        }
                        if($('div.motor10').hasClass('active'))
                        {			
                            $('div.kategori10').toggleClass('active');		
                            $('div.motor10').toggleClass('active');		
                        }
                if(!$('div.motor3').hasClass('active'))
                {			
                    $('div.kategori3').toggleClass('active');		
                    $('div.motor3').toggleClass('active');		
                }
            });
            $('div.kategori4').click(function() {
                $('div.kategori4').toggleClass('active');		
                $('div.motor4').toggleClass('active');
                        if($('div.motor1').hasClass('active'))
                        {			
                            $('div.kategori1').toggleClass('active');		
                            $('div.motor1').toggleClass('active');		
                        }
                        if($('div.motor2').hasClass('active'))
                        {			
                            $('div.kategori2').toggleClass('active');		
                            $('div.motor2').toggleClass('active');		
                        }
                        if($('div.motor3').hasClass('active'))
                        {			
                            $('div.kategori3').toggleClass('active');		
                            $('div.motor3').toggleClass('active');		
                        }
                        if($('div.motor5').hasClass('active'))
                        {			
                            $('div.kategori5').toggleClass('active');		
                            $('div.motor5').toggleClass('active');		
                        }
                        if($('div.motor6').hasClass('active'))
                        {			
                            $('div.kategori6').toggleClass('active');		
                            $('div.motor6').toggleClass('active');		
                        }
                        if($('div.motor7').hasClass('active'))
                        {			
                            $('div.kategori7').toggleClass('active');		
                            $('div.motor7').toggleClass('active');		
                        }
                        if($('div.motor8').hasClass('active'))
                        {			
                            $('div.kategori8').toggleClass('active');		
                            $('div.motor8').toggleClass('active');		
                        }
                        if($('div.motor9').hasClass('active'))
                        {			
                            $('div.kategori9').toggleClass('active');		
                            $('div.motor9').toggleClass('active');		
                        }
                        if($('div.motor10').hasClass('active'))
                        {			
                            $('div.kategori10').toggleClass('active');		
                            $('div.motor10').toggleClass('active');		
                        }
                if(!$('div.motor4').hasClass('active'))
                {			
                    $('div.kategori4').toggleClass('active');		
                    $('div.motor4').toggleClass('active');		
                }
            });
            $('div.kategori5').click(function() {
                $('div.kategori5').toggleClass('active');		
                $('div.motor5').toggleClass('active');
                        if($('div.motor1').hasClass('active'))
                        {			
                            $('div.kategori1').toggleClass('active');		
                            $('div.motor1').toggleClass('active');		
                        }
                        if($('div.motor2').hasClass('active'))
                        {			
                            $('div.kategori2').toggleClass('active');		
                            $('div.motor2').toggleClass('active');		
                        }
                        if($('div.motor3').hasClass('active'))
                        {			
                            $('div.kategori3').toggleClass('active');		
                            $('div.motor3').toggleClass('active');		
                        }
                        if($('div.motor4').hasClass('active'))
                        {			
                            $('div.kategori4').toggleClass('active');		
                            $('div.motor4').toggleClass('active');		
                        }
                        if($('div.motor6').hasClass('active'))
                        {			
                            $('div.kategori6').toggleClass('active');		
                            $('div.motor6').toggleClass('active');		
                        }
                        if($('div.motor7').hasClass('active'))
                        {			
                            $('div.kategori7').toggleClass('active');		
                            $('div.motor7').toggleClass('active');		
                        }
                        if($('div.motor8').hasClass('active'))
                        {			
                            $('div.kategori8').toggleClass('active');		
                            $('div.motor8').toggleClass('active');		
                        }
                        if($('div.motor9').hasClass('active'))
                        {			
                            $('div.kategori9').toggleClass('active');		
                            $('div.motor9').toggleClass('active');		
                        }
                        if($('div.motor10').hasClass('active'))
                        {			
                            $('div.kategori10').toggleClass('active');		
                            $('div.motor10').toggleClass('active');		
                        }
                if(!$('div.motor5').hasClass('active'))
                {			
                    $('div.kategori5').toggleClass('active');		
                    $('div.motor5').toggleClass('active');		
                }
            });
            $('div.kategori6').click(function() {
                $('div.kategori6').toggleClass('active');		
                $('div.motor6').toggleClass('active');
                        if($('div.motor1').hasClass('active'))
                        {			
                            $('div.kategori1').toggleClass('active');		
                            $('div.motor1').toggleClass('active');		
                        }
                        if($('div.motor2').hasClass('active'))
                        {			
                            $('div.kategori2').toggleClass('active');		
                            $('div.motor2').toggleClass('active');		
                        }
                        if($('div.motor3').hasClass('active'))
                        {			
                            $('div.kategori3').toggleClass('active');		
                            $('div.motor3').toggleClass('active');		
                        }
                        if($('div.motor4').hasClass('active'))
                        {			
                            $('div.kategori4').toggleClass('active');		
                            $('div.motor4').toggleClass('active');		
                        }
                        if($('div.motor5').hasClass('active'))
                        {			
                            $('div.kategori5').toggleClass('active');		
                            $('div.motor5').toggleClass('active');		
                        }
                        if($('div.motor7').hasClass('active'))
                        {			
                            $('div.kategori7').toggleClass('active');		
                            $('div.motor7').toggleClass('active');		
                        }
                        if($('div.motor8').hasClass('active'))
                        {			
                            $('div.kategori8').toggleClass('active');		
                            $('div.motor8').toggleClass('active');		
                        }
                        if($('div.motor9').hasClass('active'))
                        {			
                            $('div.kategori9').toggleClass('active');		
                            $('div.motor9').toggleClass('active');		
                        }
                        if($('div.motor10').hasClass('active'))
                        {			
                            $('div.kategori10').toggleClass('active');		
                            $('div.motor10').toggleClass('active');		
                        }
                if(!$('div.motor6').hasClass('active'))
                {			
                    $('div.kategori6').toggleClass('active');		
                    $('div.motor6').toggleClass('active');		
                }
            });
            $('div.kategori7').click(function() {
                $('div.kategori7').toggleClass('active');		
                $('div.motor7').toggleClass('active');
                        if($('div.motor1').hasClass('active'))
                        {			
                            $('div.kategori1').toggleClass('active');		
                            $('div.motor1').toggleClass('active');		
                        }
                        if($('div.motor2').hasClass('active'))
                        {			
                            $('div.kategori2').toggleClass('active');		
                            $('div.motor2').toggleClass('active');		
                        }
                        if($('div.motor3').hasClass('active'))
                        {			
                            $('div.kategori3').toggleClass('active');		
                            $('div.motor3').toggleClass('active');		
                        }
                        if($('div.motor4').hasClass('active'))
                        {			
                            $('div.kategori4').toggleClass('active');		
                            $('div.motor4').toggleClass('active');		
                        }
                        if($('div.motor5').hasClass('active'))
                        {			
                            $('div.kategori5').toggleClass('active');		
                            $('div.motor5').toggleClass('active');		
                        }
                        if($('div.motor6').hasClass('active'))
                        {			
                            $('div.kategori6').toggleClass('active');		
                            $('div.motor6').toggleClass('active');		
                        }
                        if($('div.motor8').hasClass('active'))
                        {			
                            $('div.kategori8').toggleClass('active');		
                            $('div.motor8').toggleClass('active');		
                        }
                        if($('div.motor9').hasClass('active'))
                        {			
                            $('div.kategori9').toggleClass('active');		
                            $('div.motor9').toggleClass('active');		
                        }
                        if($('div.motor10').hasClass('active'))
                        {			
                            $('div.kategori10').toggleClass('active');		
                            $('div.motor10').toggleClass('active');		
                        }
                if(!$('div.motor7').hasClass('active'))
                {			
                    $('div.kategori7').toggleClass('active');		
                    $('div.motor7').toggleClass('active');		
                }
            });
            $('div.kategori8').click(function() {
                $('div.kategori8').toggleClass('active');		
                $('div.motor8').toggleClass('active');
                        if($('div.motor1').hasClass('active'))
                        {			
                            $('div.kategori1').toggleClass('active');		
                            $('div.motor1').toggleClass('active');		
                        }
                        if($('div.motor2').hasClass('active'))
                        {			
                            $('div.kategori2').toggleClass('active');		
                            $('div.motor2').toggleClass('active');		
                        }
                        if($('div.motor3').hasClass('active'))
                        {			
                            $('div.kategori3').toggleClass('active');		
                            $('div.motor3').toggleClass('active');		
                        }
                        if($('div.motor4').hasClass('active'))
                        {			
                            $('div.kategori4').toggleClass('active');		
                            $('div.motor4').toggleClass('active');		
                        }
                        if($('div.motor5').hasClass('active'))
                        {			
                            $('div.kategori5').toggleClass('active');		
                            $('div.motor5').toggleClass('active');		
                        }
                        if($('div.motor6').hasClass('active'))
                        {			
                            $('div.kategori6').toggleClass('active');		
                            $('div.motor6').toggleClass('active');		
                        }
                        if($('div.motor7').hasClass('active'))
                        {			
                            $('div.kategori7').toggleClass('active');		
                            $('div.motor7').toggleClass('active');		
                        }
                        if($('div.motor9').hasClass('active'))
                        {			
                            $('div.kategori9').toggleClass('active');		
                            $('div.motor9').toggleClass('active');		
                        }
                        if($('div.motor10').hasClass('active'))
                        {			
                            $('div.kategori10').toggleClass('active');		
                            $('div.motor10').toggleClass('active');		
                        }
                if(!$('div.motor8').hasClass('active'))
                {			
                    $('div.kategori8').toggleClass('active');		
                    $('div.motor8').toggleClass('active');		
                }
            });
            $('div.kategori9').click(function() {
                $('div.kategori9').toggleClass('active');		
                $('div.motor9').toggleClass('active');
                        if($('div.motor1').hasClass('active'))
                        {			
                            $('div.kategori1').toggleClass('active');		
                            $('div.motor1').toggleClass('active');		
                        }
                        if($('div.motor2').hasClass('active'))
                        {			
                            $('div.kategori2').toggleClass('active');		
                            $('div.motor2').toggleClass('active');		
                        }
                        if($('div.motor3').hasClass('active'))
                        {			
                            $('div.kategori3').toggleClass('active');		
                            $('div.motor3').toggleClass('active');		
                        }
                        if($('div.motor4').hasClass('active'))
                        {			
                            $('div.kategori4').toggleClass('active');		
                            $('div.motor4').toggleClass('active');		
                        }
                        if($('div.motor5').hasClass('active'))
                        {			
                            $('div.kategori5').toggleClass('active');		
                            $('div.motor5').toggleClass('active');		
                        }
                        if($('div.motor6').hasClass('active'))
                        {			
                            $('div.kategori6').toggleClass('active');		
                            $('div.motor6').toggleClass('active');		
                        }
                        if($('div.motor7').hasClass('active'))
                        {			
                            $('div.kategori7').toggleClass('active');		
                            $('div.motor7').toggleClass('active');		
                        }
                        if($('div.motor8').hasClass('active'))
                        {			
                            $('div.kategori8').toggleClass('active');		
                            $('div.motor8').toggleClass('active');		
                        }
                        if($('div.motor10').hasClass('active'))
                        {			
                            $('div.kategori10').toggleClass('active');		
                            $('div.motor10').toggleClass('active');		
                        }
                if(!$('div.motor9').hasClass('active'))
                {			
                    $('div.kategori9').toggleClass('active');		
                    $('div.motor9').toggleClass('active');		
                }
            });
            $('div.kategori10').click(function() {
                $('div.kategori10').toggleClass('active');		
                $('div.motor10').toggleClass('active');
                        if($('div.motor1').hasClass('active'))
                        {			
                            $('div.kategori1').toggleClass('active');		
                            $('div.motor1').toggleClass('active');		
                        }
                        if($('div.motor2').hasClass('active'))
                        {			
                            $('div.kategori2').toggleClass('active');		
                            $('div.motor2').toggleClass('active');		
                        }
                        if($('div.motor3').hasClass('active'))
                        {			
                            $('div.kategori3').toggleClass('active');		
                            $('div.motor3').toggleClass('active');		
                        }
                        if($('div.motor4').hasClass('active'))
                        {			
                            $('div.kategori4').toggleClass('active');		
                            $('div.motor4').toggleClass('active');		
                        }
                        if($('div.motor5').hasClass('active'))
                        {			
                            $('div.kategori5').toggleClass('active');		
                            $('div.motor5').toggleClass('active');		
                        }
                        if($('div.motor6').hasClass('active'))
                        {			
                            $('div.kategori6').toggleClass('active');		
                            $('div.motor6').toggleClass('active');		
                        }
                        if($('div.motor7').hasClass('active'))
                        {			
                            $('div.kategori7').toggleClass('active');		
                            $('div.motor7').toggleClass('active');		
                        }
                        if($('div.motor8').hasClass('active'))
                        {			
                            $('div.kategori8').toggleClass('active');		
                            $('div.motor8').toggleClass('active');		
                        }
                        if($('div.motor9').hasClass('active'))
                        {			
                            $('div.kategori9').toggleClass('active');		
                            $('div.motor9').toggleClass('active');		
                        }
                if(!$('div.motor10').hasClass('active'))
                {			
                    $('div.kategori10').toggleClass('active');		
                    $('div.motor10').toggleClass('active');		
                }
            });	});  
    </script>


    <style>
                
            div.kategori1 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori1:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori1.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor1 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor1.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }			
            div.kategori2 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori2:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori2.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor2 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor2.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }			
            div.kategori3 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori3:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori3.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor3 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor3.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }			
            div.kategori4 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori4:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori4.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor4 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor4.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }			
            div.kategori5 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori5:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori5.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor5 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor5.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }			
            div.kategori6 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori6:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori6.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor6 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor6.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }			
            div.kategori7 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori7:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori7.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor7 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor7.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }			
            div.kategori8 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori8:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori8.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor8 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor8.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }			
            div.kategori9 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori9:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori9.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor9 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor9.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }			
            div.kategori10 {
                padding:0px 25px 6px 25px;
                height:100%;
            }		
            
            div.kategori10:hover {
                background-color:rgba(16, 154, 226, 0.3);
            }		
            
            div.kategori10.active {
                background-color:rgba(16, 154, 226, 0.3);
            }
            
            div.motor10 {
                display:none;	
                text-align:center;
                max-height: 0px;
                overflow: hidden;
                padding:0px 10px 0px 10px;
                border-radius:5px;
                margin:10px 0 0 0;
            }

            div.motor10.active {
                display:inline-block;
                max-height: 1000px;	
                padding:5px 10px 5px 10px;				
            }		
    </style>

    <style>	
        #style-1::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border-radius: 8px;
            background-color: #F5F5F5;
        }
        
        #style-1::-webkit-scrollbar
        {
            width: 8px;
            background-color: #F5F5F5;
        }
        
        #style-1::-webkit-scrollbar-thumb
        {
            border-radius: 8px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }

    </style>
@endsection

@section('content')
    <hr style="border:0px solid;border-bottom:0px solid #c8c8c8;padding:0 0 0 0;margin:0 0 0 0;">	</div>	
        <a name="slider">
        <div style="background-image:url({{ asset('images/bg.html') }});width:960px;">	
            <div class="sliderContainer fullWidth clearfix" style="width:100%;position:relative;z-index:1">
                <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
                
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/80.png') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/78.jpg') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/76.jpg') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/74.jpg') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/73.jpg') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/71.jpg') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/72.png') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/53.jpg') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/69.jpg') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>
                        <div class="rsContent" data-rsDelay="3000">											
                            <div style="background-image:url({{ asset('data/banner_pic/79.png') }});height:350px;background-size:cover;background-position:center center;">
                            </div>
                        </div>	
                </div>
            </div>		
        </div>
            
        <div style="background-image:url({{ asset('images/bg-cat1.png') }});padding:6px 0 0px 0;background-repeat:repeat-x;background-position:center center;top:-45px;position:relative;">			
            <div style="background-image:url({{ asset('images/bg-cat2-left.png') }});height:40px;background-repeat:no-repeat;width:145px;display:inline-block;vertical-align:middle;padding:13px 0 0px 20px;text-align:left;position:relative;z-index:10;">	
                <img src="{{ asset('images/product-text-left.png') }}">
            </div>	
            <div style="background-image:url({{ asset('images/bg-cat4.png') }});height:56px;padding:0 0 10px 0;background-repeat:no-repeat;width:476px;display:inline-block;vertical-align:middle;margin:0 -40px 0 -40px;position:relative;z-index:20;">	
                <table cellpadding=0 cellspacing=0>			
                <tr>
                
                        <td>						
                            <div class="kategori1">
                                <img src="{{ asset('data/cat_pic/1.png') }}" style="margin-top:6px;">
                            </div>
                        </td>
                            <td>
                                <div>
                                    <img src="{{ asset('images/cat-separator.png') }}">
                                </div>
                            </td>
                        <td>						
                            <div class="kategori2">
                                <img src="{{ asset('data/cat_pic/2.png') }}" style="margin-top:6px;">
                            </div>
                        </td>
                            <td>
                                <div>
                                    <img src="{{ asset('images/cat-separator.png') }}">
                                </div>
                            </td>
                        <td>						
                            <div class="kategori3">
                                <img src="{{ asset('data/cat_pic/3.png') }}" style="margin-top:6px;">
                            </div>
                        </td>
                            <td>
                                <div>
                                    <img src="{{ asset('images/cat-separator.png') }}">
                                </div>
                            </td>
                        <td>						
                            <div class="kategori4">
                                <img src="{{ asset('data/cat_pic/4.png') }}" style="margin-top:6px;">
                            </div>
                        </td>								
                </tr>
                </table>
            </div>	
            <div style="background-image:url({{ asset('images/bg-cat2-right.png') }});height:40px;background-repeat:no-repeat;width:145px;display:inline-block;vertical-align:middle;padding:13px 20px 0px 0;text-align:right;position:relative;z-index:10;">		
                <img src="{{ asset('images/home-text-right.png') }}">
            </div>	
        </div>	
        </a>
        
                <div class="motor1" id="style-1" style="top:-25px;position:relative;overflow-x:auto;width:80%;padding:0 50px 0 50px;">
                    <center>
                    <table border=0 align=center style="margin:0px 0 0px 0;">
                    <tr>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/88/All-New-NMAX-155-Connected/ABS.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/88.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                All New NMAX 155 Connected/ABS
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/86/All-New-NMAX-155-Standard-Version.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/86.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                All New NMAX 155 Standard Version
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/83/FreeGo.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/83.html') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                FreeGo
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/82/LEXI-S.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/82.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                LEXI S
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/80/MIO-S---SMART-SHOPISTICATED.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/80.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                MIO S - SMART SHOPISTICATED
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/79/ALL-NEW-XRIDE-125CC.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/79.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                ALL NEW XRIDE 125CC
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/75/AEROX-155VVA-S-VERSION.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/75.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                AEROX 155VVA S-VERSION
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/74/AEROX-155VVA-R-VERSION.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/74.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                AEROX 155VVA R-VERSION
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/73/AEROX-155VVA.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/73.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                AEROX 155VVA
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/76/All-New-Soul-GT-AKS-SSS.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/76.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                All New Soul GT AKS SSS
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/72/MIO-M3-125-DENGAN-SSS-AKS.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/72.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                MIO M3 125 DENGAN SSS AKS
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/68/Mio-Z-.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/68.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                Mio Z 
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/51/New-Fino-125-Bluecore.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/51.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                New Fino 125 Bluecore
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/34/NMAX.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/34.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                NMAX
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/22/Mio-M3-Blue-Core.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/22.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                Mio M3 Blue Core
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/29/All-New-Soul-GT.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/29.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                All New Soul GT
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/50/X-Ride.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/50.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                X-Ride
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/81/NMAX-2018.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/81.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                NMAX 2018
                            </div>	
                            </a>
                        </td>
                    </tr>
                    </table>
                    </center>
                </div>
                <div class="motor2" id="style-1" style="top:-25px;position:relative;overflow-x:auto;width:80%;padding:0 50px 0 50px;">
                    <center>
                    <table border=0 align=center style="margin:0px 0 0px 0;">
                    <tr>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/30/MX-KING-150.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/30.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                MX KING 150
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/44/Vega-RR.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/44.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                Vega RR
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/46/Jupiter-Z1.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/46.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                Jupiter Z1
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/48/Force.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/48.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                Force
                            </div>	
                            </a>
                        </td>
                    </tr>
                    </table>
                    </center>
                </div>
                <div class="motor3" id="style-1" style="top:-25px;position:relative;overflow-x:auto;width:80%;padding:0 50px 0 50px;">
                    <center>
                    <table border=0 align=center style="margin:0px 0 0px 0;">
                    <tr>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/87/WR-155-R.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/87.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                WR 155 R
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/85/XSR-155.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/85.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                XSR 155
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/84/MT-25-2019.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/84.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                MT-25 2019
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/78/ALL-NEW-VIXON.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/78.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                ALL NEW VIXON
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/77/ALL-NEW-R-15.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/77.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                ALL NEW R-15
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/70/Xabre.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/70.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                Xabre
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/35/New-Vixion-Advance.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/35.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                New Vixion Advance
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/45/BYSON.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/45.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                BYSON
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/36/R-15.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/36.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                R 15
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/31/R-25.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/31.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                R 25
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/39/Scorpio.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/39.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                Scorpio
                            </div>	
                            </a>
                        </td>
                    </tr>
                    </table>
                    </center>
                </div>
                <div class="motor4" id="style-1" style="top:-25px;position:relative;overflow-x:auto;width:80%;padding:0 50px 0 50px;">
                    <center>
                    <table border=0 align=center style="margin:0px 0 0px 0;">
                    <tr>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/40/R15-GP-Series.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/40.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                R15 GP Series
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/41/R25-GP-Series.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/41.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                R25 GP Series
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/42/Vixion-Advance-GP-Series.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/42.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                Vixion Advance GP Series
                            </div>	
                            </a>
                        </td>
                        <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                            <a href="product-detail/43/Jupiter-MX-King-150-Movistar.html" target="_top">
                            <div>
                                <img u="image" src="{{ asset('data/product_home/43.png') }}"/>
                            </div>
                            <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                Jupiter MX King 150 Movistar
                            </div>	
                            </a>
                        </td>
                    </tr>
                    </table>
                    </center>
                </div>	
        
        
        <div style="background-image:url({{ asset('images/bg-home.png') }});height:129px;">
        
                <table style="height:129px;width:960px;" cellpadding=0 cellspacing=0 border=0>
                <tr>
                    <td valign=center>
                        <div style="font-family:oswaldbold;font-size:32px;color:#ffffff;">
                            Yamaha Semakin Di depan
                        </div>
                        <div style="font-family:arial;font-weight:bold;font-size:20px;color:#ffffff;">
                            2019 New Model Yamaha 
                        </div>
                        <div style="font-family:open sans;font-weight:600;font-size:15px;color:#ffffff;">
                            
                        </div>
                    </td>
                    <td valign=center align=center style="padding:0 0 0 20px;">
                        <img src="{{ asset('data/home_pic/1.png') }}">
                        <div style="font-family:ralewaysemibold;font-size:13px;color:#fefefe;margin:10px 0 0 0;text-transform:uppercase;">
                            Trusted
                        </div>
                    </td>
                    <td valign=center align=center style="padding:0 0 0 20px;">
                        <img src="{{ asset('data/home_pic/2.png') }}">
                        <div style="font-family:ralewaysemibold;font-size:13px;color:#fefefe;margin:10px 0 0 0;text-transform:uppercase;">
                            Experienced
                        </div>
                    </td>
                    <td valign=center align=center style="padding:0 0 0 20px;">
                        <img src="{{ asset('data/home_pic/3.png') }}">
                        <div style="font-family:ralewaysemibold;font-size:13px;color:#fefefe;margin:10px 0 0 0;text-transform:uppercase;">
                            Innovation
                        </div>
                    </td>
                    <td valign=center align=center style="padding:0 0 0 20px;">
                        <img src="{{ asset('data/home_pic/4.png') }}">
                        <div style="font-family:ralewaysemibold;font-size:13px;color:#fefefe;margin:10px 0 0 0;text-transform:uppercase;">
                            Reliable
                        </div>
                    </td>
                </tr>
                </table>		
        </div>
        
        <div style="width:100%;background-image:url({{ asset('images/bg-corak.png') }});background-repeat:no-repeat;background-size:100% auto;padding:15px 0 40px 0;">				
            <div style="width:960px;background-color:rgba(255,255,255,0.5);padding:15px 0 0px 0;">
                <div style="font-family:oswaldbold;color:#2e6a97;font-size:20px;margin-bottom:10px;">
                    NEWS & EVENTS
                </div>
                
                <div id="slider1_container" style="border:0px solid #222;position: relative; top: 0px; left: 0px; width: 935px; height: 215px;margin:0 0 0 0;">
                    <div u="slides" style="cursor: move;  width: 940px; height: 215px; overflow: hidden;">
                
                            <div style="border:4px solid #ededed;">
                                <a href="news-detail/154/Terus-Prioritaskan-Konsumen-Yamaha-Kembali-dengan-Berbagai-Promo.html">							
                                    <div style="background-image:url({{ asset('data/news_thumb/154.png') }});height:70px;background-size:cover;background-position:center center;background-repeat:no-repeat;">									
                                    </div>
                                </a>
                                <div style="padding:10px 10px 0 10px;">
                                    <div style="font-family:oswaldbold;font-size:18px;color:#2e6a97;text-align:left;margin:5px 0 0 0;text-transform:uppercase;height:28px;overflow:hidden;">
                                        Terus Prioritaskan Konsumen, Yamaha Kembali dengan Berbagai Promo
                                    </div>
                                    <div style="font-family:open sans;font-weight:600;font-size:11px;color:#363636;text-align:left;height:45px;overflow:hidden;">
                                        Memasuki kondisi new normal, PT Surya Timur Sakti Jatim (Yamaha Jatim) semakin gencar memberikan promo spesial bagi seluruh masyarakat. Berbagai penawaran menarik bisa dimanfaatkan konsumen yang ingin membeli motor pada bulan Juli ini, mulai dari uang muka ringan hingga potongan angsuran untuk berbagai unit motor Yamaha.
                                    </div>
                                    <table width=100% cellpadding=0 cellspacing=0 style="margin:10px 0 5px 0;">
                                    <tr>
                                        <td align=left>									
                                            <div style="font-family:open sans;font-weight:600;font-size:11px;color:#3d3d3d;text-transform:uppercase;">
                                                Surabaya - 14/07/2020
                                            </div>
                                        </td>
                                        <td align=right>	
                                            <a href="news-detail/154/Terus-Prioritaskan-Konsumen-Yamaha-Kembali-dengan-Berbagai-Promo.html">							
                                            <div class="transp" style="font-family:oswaldbold;font-size:12px;color:#2e6a97;background-image:url({{ asset('images/arrow-blue.png') }});background-repeat:no-repeat;background-position:center left;width:70px;">
                                                READ MORE
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            <div style="border:4px solid #ededed;">
                                <a href="news-detail/153/Peduli-Kesehatan-Yamaha-Jatim-Adakan-Rapid-Test-Untuk-Seluruh-Karyawan.html">							
                                    <div style="background-image:url({{ asset('data/news_thumb/153.jpg') }});height:70px;background-size:cover;background-position:center center;background-repeat:no-repeat;">									
                                    </div>
                                </a>
                                <div style="padding:10px 10px 0 10px;">
                                    <div style="font-family:oswaldbold;font-size:18px;color:#2e6a97;text-align:left;margin:5px 0 0 0;text-transform:uppercase;height:28px;overflow:hidden;">
                                        Peduli Kesehatan, Yamaha Jatim Adakan Rapid Test Untuk Seluruh Karyawan
                                    </div>
                                    <div style="font-family:open sans;font-weight:600;font-size:11px;color:#363636;text-align:left;height:45px;overflow:hidden;">
                                        Pandemi Corona yang belum selesai menyebabkan masyarakat terus merasa khawatir akan penularannya. Namun di sisi lain, kegiatan sehari-hari juga harus berjalan agar roda perekonomian tetap berputar. Sebagai prioritas utama, PT Surya Timur Sakti Jatim (Yamaha Jatim) berinisiatif mengadakan rapid test untuk seluruh karyawannya.
                                    </div>
                                    <table width=100% cellpadding=0 cellspacing=0 style="margin:10px 0 5px 0;">
                                    <tr>
                                        <td align=left>									
                                            <div style="font-family:open sans;font-weight:600;font-size:11px;color:#3d3d3d;text-transform:uppercase;">
                                                Surabaya - 12/07/2020
                                            </div>
                                        </td>
                                        <td align=right>	
                                            <a href="news-detail/153/Peduli-Kesehatan-Yamaha-Jatim-Adakan-Rapid-Test-Untuk-Seluruh-Karyawan.html">							
                                            <div class="transp" style="font-family:oswaldbold;font-size:12px;color:#2e6a97;background-image:url({{ asset('images/arrow-blue.png') }});background-repeat:no-repeat;background-position:center left;width:70px;">
                                                READ MORE
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            <div style="border:4px solid #ededed;">
                                <a href="news-detail/151/Special-Sale-Suku-Cadang-Yamaha-di-Bulan-Juli.html">							
                                    <div style="background-image:url({{ asset('data/news_thumb/151.jpg') }});height:70px;background-size:cover;background-position:center center;background-repeat:no-repeat;">									
                                    </div>
                                </a>
                                <div style="padding:10px 10px 0 10px;">
                                    <div style="font-family:oswaldbold;font-size:18px;color:#2e6a97;text-align:left;margin:5px 0 0 0;text-transform:uppercase;height:28px;overflow:hidden;">
                                        Special Sale Suku Cadang Yamaha di Bulan Juli
                                    </div>
                                    <div style="font-family:open sans;font-weight:600;font-size:11px;color:#363636;text-align:left;height:45px;overflow:hidden;">
                                        Untuk menjaga performa motor Yamaha tetap tangguh, menggunakan suku cadang asli menjadi hal wajib yang dilakukan para rider Yamaha. Penggunaan suku cadang yang tidak orisinil justru bisa menyebabkan motor lebih cepat rusak. Demi mendukung para rider untuk menggunakan yang asli, kali ini Yamaha Jatim memberikan diskon spesial untuk pembelian semua suku cadang.
                                    </div>
                                    <table width=100% cellpadding=0 cellspacing=0 style="margin:10px 0 5px 0;">
                                    <tr>
                                        <td align=left>									
                                            <div style="font-family:open sans;font-weight:600;font-size:11px;color:#3d3d3d;text-transform:uppercase;">
                                                Surabaya - 02/07/2020
                                            </div>
                                        </td>
                                        <td align=right>	
                                            <a href="news-detail/151/Special-Sale-Suku-Cadang-Yamaha-di-Bulan-Juli.html">							
                                            <div class="transp" style="font-family:oswaldbold;font-size:12px;color:#2e6a97;background-image:url({{ asset('images/arrow-blue.png') }});background-repeat:no-repeat;background-position:center left;width:70px;">
                                                READ MORE
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            <div style="border:4px solid #ededed;">
                                <a href="news-detail/149/Antusiasme-Meningkat-Yamaha-Beri-Keuntungan-Lebih-Bagi-A-Gen-125.html">							
                                    <div style="background-image:url({{ asset('data/news_thumb/149.jpg') }});height:70px;background-size:cover;background-position:center center;background-repeat:no-repeat;">									
                                    </div>
                                </a>
                                <div style="padding:10px 10px 0 10px;">
                                    <div style="font-family:oswaldbold;font-size:18px;color:#2e6a97;text-align:left;margin:5px 0 0 0;text-transform:uppercase;height:28px;overflow:hidden;">
                                        Antusiasme Meningkat, Yamaha Beri Keuntungan Lebih Bagi A-Gen 125
                                    </div>
                                    <div style="font-family:open sans;font-weight:600;font-size:11px;color:#363636;text-align:left;height:45px;overflow:hidden;">
                                        Setelah diluncurkan pertama kali pada bulan Mei, antusiasme masyarakat untuk bergabung menjadi A-Gen 125 semakin hari semakin meningkat. Melihat hal ini, PT Surya Timur Sakti Jatim (Yamaha Jatim) melakukan inovasi pada programnya dengan peningkatan jumlah insentif bagi setiap agen.
                                    </div>
                                    <table width=100% cellpadding=0 cellspacing=0 style="margin:10px 0 5px 0;">
                                    <tr>
                                        <td align=left>									
                                            <div style="font-family:open sans;font-weight:600;font-size:11px;color:#3d3d3d;text-transform:uppercase;">
                                                Surabaya - 23/06/2020
                                            </div>
                                        </td>
                                        <td align=right>	
                                            <a href="news-detail/149/Antusiasme-Meningkat-Yamaha-Beri-Keuntungan-Lebih-Bagi-A-Gen-125.html">							
                                            <div class="transp" style="font-family:oswaldbold;font-size:12px;color:#2e6a97;background-image:url({{ asset('images/arrow-blue.png') }});background-repeat:no-repeat;background-position:center left;width:70px;">
                                                READ MORE
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            <div style="border:4px solid #ededed;">
                                <a href="news-detail/150/Yamaha-Promo-Besar-Besaran-Tawarkan-Diskon-Angsuran-Hingga-Bunga-0.html">							
                                    <div style="background-image:url({{ asset('data/news_thumb/150.jpg') }});height:70px;background-size:cover;background-position:center center;background-repeat:no-repeat;">									
                                    </div>
                                </a>
                                <div style="padding:10px 10px 0 10px;">
                                    <div style="font-family:oswaldbold;font-size:18px;color:#2e6a97;text-align:left;margin:5px 0 0 0;text-transform:uppercase;height:28px;overflow:hidden;">
                                        Yamaha Promo Besar-Besaran, Tawarkan Diskon Angsuran Hingga Bunga 0%
                                    </div>
                                    <div style="font-family:open sans;font-weight:600;font-size:11px;color:#363636;text-align:left;height:45px;overflow:hidden;">
                                        Kebutuhan akan kendaraan pribadi saat ini semakin meningkat. Apalagi kondisi new normal yang menghimbau masyarakat untuk selalu menjaga jarak juga semakin gencar digalakkan. Untuk tetap memenuhi kebutuhan konsumen, PT Surya Timur Sakti Jatim (STSJ) memberikan berbagai penawaran spesial pembelian unit-unit Yamaha mulai dari potongan angsuran hingga bunga cicilan 0%.
                                    </div>
                                    <table width=100% cellpadding=0 cellspacing=0 style="margin:10px 0 5px 0;">
                                    <tr>
                                        <td align=left>									
                                            <div style="font-family:open sans;font-weight:600;font-size:11px;color:#3d3d3d;text-transform:uppercase;">
                                                Surabaya - 19/06/2020
                                            </div>
                                        </td>
                                        <td align=right>	
                                            <a href="news-detail/150/Yamaha-Promo-Besar-Besaran-Tawarkan-Diskon-Angsuran-Hingga-Bunga-0.html">							
                                            <div class="transp" style="font-family:oswaldbold;font-size:12px;color:#2e6a97;background-image:url({{ asset('images/arrow-blue.png') }});background-repeat:no-repeat;background-position:center left;width:70px;">
                                                READ MORE
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            <div style="border:4px solid #ededed;">
                                <a href="event-detail/45/Permudah-Konsumen-Yamaha-Luncurkan-Yamaha-Kaltim-Official-di-Tokopedia.html">							
                                    <div style="background-image:url({{ asset('data/event_thumb/45.jpg') }});height:70px;background-size:cover;background-position:center center;background-repeat:no-repeat;">									
                                    </div>
                                </a>
                                <div style="padding:10px 10px 0 10px;">
                                    <div style="font-family:oswaldbold;font-size:18px;color:#2e6a97;text-align:left;margin:5px 0 0 0;text-transform:uppercase;height:28px;overflow:hidden;">
                                        Permudah Konsumen, Yamaha Luncurkan Yamaha Kaltim Official di Tokopedia
                                    </div>
                                    <div style="font-family:open sans;font-weight:600;font-size:11px;color:#363636;text-align:left;height:45px;overflow:hidden;">
                                        Kabar gembira untuk teman-teman pengendara motor se-Kalimantan Timur! Kebutuhan masyarakat akan moda transportasi roda dua semakin meningkat. Melihat kebutuhan ini, PT. Surya Timur Sakti Jatim selaku dealer utama motor Yamaha di Kalimantan Timur baru saja meluncurkan official store Yamaha Kaltim di Tokopedia.
                                    </div>
                                    <table width=100% cellpadding=0 cellspacing=0 style="margin:10px 0 5px 0;">
                                    <tr>
                                        <td align=left>									
                                            <div style="font-family:open sans;font-weight:600;font-size:11px;color:#3d3d3d;text-transform:uppercase;">
                                                Kalimantan Timur - 11/06/2020
                                            </div>
                                        </td>
                                        <td align=right>	
                                            <a href="event-detail/45/Permudah-Konsumen-Yamaha-Luncurkan-Yamaha-Kaltim-Official-di-Tokopedia.html">							
                                            <div class="transp" style="font-family:oswaldbold;font-size:12px;color:#2e6a97;background-image:url({{ asset('images/arrow-blue.png') }});background-repeat:no-repeat;background-position:center left;width:70px;">
                                                READ MORE
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>									
                    </div>

                    <style>
                        /* jssor slider direction navigator skin 03 css */
                        /*
                        .jssord03l              (normal)
                        .jssord03r              (normal)
                        .jssord03l:hover        (normal mouseover)
                        .jssord03r:hover        (normal mouseover)
                        .jssord03ldn            (mousedown)
                        .jssord03rdn            (mousedown)
                        */
                        .jssord03l, .jssord03r, .jssord03ldn, .jssord03rdn
                        {
                            position: absolute;
                            cursor: pointer;
                            display: block;
                            background: {{ asset('img/d03.html') }} no-repeat;
                            overflow:hidden;
                        }
                        .jssord03l { background-position: -3px -33px; }
                        .jssord03r { background-position: -63px -33px; }
                        .jssord03l:hover { background-position: -123px -33px; }
                        .jssord03r:hover { background-position: -183px -33px; }
                        .jssord03ldn { background-position: -243px -33px; }
                        .jssord03rdn { background-position: -303px -33px; }
                    </style>
                    <!-- Arrow Left -->
                    <span u="arrowleft" class="jssord03l" style="background: {{ asset('images/btn-newsprev.png') }} no-repeat;width: 44px; height: 44px; top: 0px; left: -40px;">
                    </span>
                    <!-- Arrow Right -->
                    <span u="arrowright" class="jssord03r" style="background: {{ asset('images/btn-newsnext.png') }} no-repeat;width: 44px; height: 44px; top: 0px; right: -42px">
                    </span>
                    <script>
                        jssor_slider1_starter('slider1_container');
                    </script>
                </div>
                <!-- Jssor Slider End -->
                <img width=0 height=0 />
            </div>
            
            <table width=960px cellpadding=0 cellspacing=0 style="margin:20px 0 0 0;">
            <tr>
                <td valign=top>
                
                        <div style="background-image:url({{ asset('images/bg-titlehome.png') }});width:468px;font-family:oswaldbold;font-size:15px;color:#ffffff;border-radius:5px 5px 0 0;height:32px;text-align:center;line-height:32px;">
                            Photo Gallery
                        </div>
                        <a href="gallery-2.html">
                        <div style="background-image:url({{ asset('data/home_link/1.jpg') }});width:468px;height:230px;text-align:center;">
                        </div>
                        </a>								
                </td>
                <td valign=top style="padding:0 10px 0 10px;">
                
                        <div style="background-image:url({{ asset('images/bg-titlehome.png') }});width:230px;font-family:oswaldbold;font-size:15px;color:#ffffff;border-radius:5px 5px 0 0;height:32px;text-align:center;line-height:32px;">
                            Dealers Networks
                        </div>
                        <a href="dealer-2.html">
                        <div style="background-image:url({{ asset('data/home_link/2.jpg') }});width:230px;height:230px;text-align:center;">
                            <img src="{{ asset('images/btn-dealer.png') }}" style="margin-top:100px;">
                        </div>
                        </a>		
                </td>
                <td valign=top>				
                
                        <div style="background-image:url({{ asset('images/bg-titlehome.png') }});width:230px;font-family:oswaldbold;font-size:15px;color:#ffffff;border-radius:5px 5px 0 0;height:32px;text-align:center;line-height:32px;">
                            Upcoming Events
                        </div>					
                            <a href="event-detaila916.html?id=44">
                            <div style="background-image:url({{ asset('data/event_thumb/44.jpg') }});width:230px;height:230px;background-size:cover;background-position:center center;">
                            </div>
                            </a>			</td>
            </tr>
            </table>
        </div>		
        
        
    <hr style="border:0px solid;border-bottom:1px solid #efefef">
        
    <table width=960px style="margin-top:-20px;margin-bottom:20px;">
    <tr>
        <td align=center valign=top>
            <div style="font-family:open sans;font-size:13px;color:#272727;margin:0 0 10px 0;">
                PARTNER LINK:
            </div>
            
                    <a href="http://www.yamaha-friends.com/" target="_blank">
                        <img src="{{ asset('data/partner_pic/1.png') }}" width=178px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://yamaha-kaltim.co.id/" target="_blank">
                        <img src="{{ asset('data/partner_pic/2.png') }}" width=178px style="margin:0 0 10px 0;">
                    </a>		
        </td>
        <td align=center valign=top>
            <div style="font-family:open sans;font-size:13px;color:#272727;margin:0 0 10px 0;">
                YAMAHA AFFILIATES:
            </div>
            
                    <a href="http://www.baf.co.id/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/1.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://indomobilfinance.com/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/2.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://www.adira.co.id/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/3.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://www.otofinance.co.id/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/4.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://www.wom.co.id/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/5.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>	</td>
    </tr>
    </table>
@endsection

@section('foot')
    <script id="addJS">jQuery(document).ready(function($) {
    $('#full-width-slider').royalSlider({
        arrowsNav: true,
        loop: true,
        keyboardNavEnabled: true,
        controlsInside: false,
        imageScaleMode: 'fill',
        arrowsNavAutoHide: false,
        autoScaleSlider: false, 
        autoScaleSliderWidth: false,     
        autoScaleSliderHeight: false,
        controlNavigation: 'bullets',
        thumbsFitInViewport: false,
        navigateByClick: true,
        startSlideId: 0,
        autoScaleSlider: true,
        autoPlay: {
            // autoplay options go gere
            enabled: true,
            pauseOnHover: false
        },
        block: {
            // animated blocks options go gere
            fadeEffect: false,
            moveEffect: 'left',
            speed: 4000
        },
        transitionType:'move',
        globalCaption: false,
        deeplinking: {
        enabled: true,
        change: false
        },
        
        imgWidth: 1293,
        imgHeight: 471
    });
    });
    </script>


    <script src="{{ asset('jquery/animation/plugins.js') }}"></script>
    <script src="{{ asset('jquery/animation/jquery.appear.js') }}"></script>
    <script src="{{ asset('jquery/animation/jquery.validate.js') }}"></script>
    <script src="{{ asset('jquery/animation/theme.js') }}"></script>
@endsection