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

    <style>

        div.kategori {
            padding:0px 25px 6px 25px;
            height:100%;
        }		
        
        div.kategori:hover {
            background-color:rgba(16, 154, 226, 0.3);
        }		
        
        div.kategori.active {
            background-color:rgba(16, 154, 226, 0.3);
        }
        
        div.motor {
            display:none;	
            text-align:center;
            max-height: 0px;
            overflow: hidden;
            padding:0px 10px 0px 10px;
            border-radius:5px;
            margin:10px 0 0 0;
        }

        div.motor.active {
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
                    @foreach ($categories as $category)
                    <td>						
                        <div class="kategori" data-cat_id="{{ $category->id }}">
                            <img src="{{ asset($category->image) }}" style="margin-top:6px;">
                        </div>
                    </td>
                        @if (!$loop->last)
                            <td>
                                <div>
                                    <img src="{{ asset('images/cat-separator.png') }}">
                                </div>
                            </td>
                        @endif
                    @endforeach				
                </tr>
                </table>
            </div>	
            <div style="background-image:url({{ asset('images/bg-cat2-right.png') }});height:40px;background-repeat:no-repeat;width:145px;display:inline-block;vertical-align:middle;padding:13px 20px 0px 0;text-align:right;position:relative;z-index:10;">		
                <img src="{{ asset('images/home-text-right.png') }}">
            </div>	
        </div>	
        </a>
        @foreach ($categories as $category)
            <div class="motor {{ $loop->first ? 'active' : '' }}" id="motor_{{ $category->id }}" style="top:-25px;position:relative;overflow-x:auto;width:80%;padding:0 50px 0 50px;">
                <center>
                    <table border=0 align=center style="margin:0px 0 0px 0;">
                        <tr>
                            @foreach ($category->products as $product)
                                <td width=120px valign=top align=center style="padding:0 10px 0 10px;">
                                    <a href="{{ route('produk.show', $product->id) }}" target="_top">
                                    <div>
                                        <img u="image" src="{{ asset($product->slider) }}"/>
                                    </div>
                                    <div style="display:table;font-family:ralewaybold;font-size:11px;line-height:14px;color:#222222;padding:10px 0px 0px 0px;position:relative;z-index:21;">
                                        {{ $product->name }}
                                    </div>	
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                    </table>
                </center>
            </div>
        @endforeach
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
            
            <table width=960px cellpadding=0 cellspacing=0 style="margin:20px 0 0 0;">
            <tr>
                <td valign=top>
                
                        <div style="background-image:url({{ asset('images/bg-titlehome.png') }});width:468px;font-family:oswaldbold;font-size:15px;color:#ffffff;border-radius:5px 5px 0 0;height:32px;text-align:center;line-height:32px;">
                            Our Products
                        </div>
                        <a href="{{ route('produk.index') }}">
                        <div style="background-image:url({{ asset('data/home_link/1.jpg') }});width:468px;height:230px;text-align:center;">
                        </div>
                        </a>								
                </td>
                <td valign=top style="padding:0 10px 0 10px;">
                
                        <div style="background-image:url({{ asset('images/bg-titlehome.png') }});width:230px;font-family:oswaldbold;font-size:15px;color:#ffffff;border-radius:5px 5px 0 0;height:32px;text-align:center;line-height:32px;">
                            Dealers Networks
                        </div>
                        <a href="{{ route('network.index') }}">
                        <div style="background-image:url({{ asset('data/home_link/2.jpg') }});width:230px;height:230px;text-align:center;">
                            <img src="{{ asset('images/btn-dealer.png') }}" style="margin-top:100px;">
                        </div>
                        </a>		
                </td>
                <td valign=top>				
                
                        <div style="background-image:url({{ asset('images/bg-titlehome.png') }});width:230px;font-family:oswaldbold;font-size:15px;color:#ffffff;border-radius:5px 5px 0 0;height:32px;text-align:center;line-height:32px;">
                            Contact Us
                        </div>					
                            <a href="{{ route('contact_us') }}">
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
    

    <script>
        $('.kategori').click(function() {
            const id = $(this).data('cat_id');
            $('.motor').removeClass('active');
            $('#motor_'+id).addClass('active');
        });	
    </script>
@endsection