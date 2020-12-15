@extends('layouts.frontsite')

@section('head')
    <style>
        @media screen and (min-width: 992px) {
            .color-list {
                padding-left: 100px;
                padding-right: 100px;
            }
        }
    </style>
@endsection


@section('content')
<hr style="border:0px solid;border-bottom:0px solid #c8c8c8;padding:0 0 0 0;margin:0 0 0 0;">	</div>
	
	<a name="top">
	</a>
	<div style="background-image:url('images/bg.html');">	
		<div class="sliderContainer fullWidth clearfix" style="width:100%;position:relative;z-index:1">
			<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
			
					<div class="rsContent">
						<img class="rsImg" src="{{ asset($produk->cover) }}" alt="" />		
					</div>			</div>
		</div>		
	</div>
	
	
	
	<div style="background-image:url('images/bg3.png');padding:0px 0 30px 0;">
		<div style="background-image:url({{ asset('images/line.png') }});background-repeat:no-repeat;background-position:center center;width:914px;height:90px;margin:-60px 0 30px 0;position:relative;z-index:40;padding:20px 0 20px 0;">	
			<table width=800px border=0>
			<tr>
				<td valign=center style="padding:10px 0 0 0;">
				<img src="{{ asset($produk->logo) }}" height=65px>					
				</td>
				<td align=center valign=top style="padding:33px 0 0 0;">
					<a href="#features">
					<div style="font-family:oswaldbold;font-size:15px;color:#ffffff;">
						FEATURES
					</div>
					</a>
				</td>
				<td align=center valign=top style="padding:33px 0 0 0;">
					<a href="#specs">
					<div style="font-family:oswaldbold;font-size:15px;color:#ffffff;">
						SPECS
					</div>
					</a>
				</td>
				<td align=center valign=top style="padding:33px 0 0 0;">
					<a href="#colors">
					<div style="font-family:oswaldbold;font-size:15px;color:#ffffff;">
						COLORS
					</div>
					</a>
				</td>
				<td align=center valign=top style="padding:33px 0 0 0;">
					<a href="#tvc">
					<div style="font-family:oswaldbold;font-size:15px;color:#ffffff;">						
						TVC
					</div>
					</a>
				</td>
				<td align=right valign=top style="padding:33px 0 0 0;">
					<a href="{{ route('produk.index') }}">
						<img src="{{ asset('images/btn-detailback.png') }}">
					</a>
				</td>
			</tr>
			</table>
		</div>
	
		{{-- <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 720px; height: 423px;margin:0px 0 0 0;">
			<!-- Slides Container -->
			<div u="slides" style="cursor: move;  width: 720px; height: 423px; overflow: hidden;">
			
					<div>
						<img u="image" src="{{ asset($produk->cover) }}"/>
					</div>			</div>

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
					background: url({{ asset('img/d03.html') }}) no-repeat;
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
			<span u="arrowleft" class="jssord03l" style="background: url({{ asset('images/btn-prev.png') }}) no-repeat;width: 15px; height: 26px; top: 0px; left: -28px;">
			</span>
			<!-- Arrow Right -->
			<span u="arrowright" class="jssord03r" style="background: url({{ asset('images/btn-next.png') }}) no-repeat;width: 15px; height: 26px; top: 0px; right: -28px">
			</span>
			<script>
				jssor_slider1_starter('slider1_container');
			</script>
		</div>
		<!-- Jssor Slider End -->
		<img width=0 height=0 />
	</div> --}}
	
	<a name="features">
	<div style="background-image:url('images/bg2.png');padding:20px 0 20px 0;">			
		<table>
		<tr>
			<td>
				<img src="{{ asset('images/icon-title.png') }}">
			</td>
			<td>
				<div style="font-family:oswald;font-size:25px;color:#185698;text-transform:uppercase;">
					{{ $produk->name }} <font style="color:#2f2f2f;">FEATURES</font>
				</div>
			</td>
			<td>
				<img src="{{ asset('images/icon-title.png') }}">
			</td>
		</tr>
		</table>
		
		<table cellpadding=10 style="width:960px;">
	<tr>
            @foreach ($produk->features as $feature)
                <td align=center valign=top>
                    <img src="{{ asset($feature->image) }}" width=310px>
                    <div style="font-family:open sans;font-weight:600;font-size:20px;width:300px;color:#2d2d2d;margin:5px 0 0 0;">
                        {{ $feature->name }}
                    </div>
                </td>
            @endforeach
		</table>
		
		<a href="#top">
		<div style="margin:30px 0 0 0;">
			<img src="{{ asset('images/btn-detailtop.png') }}">		
		</div>
		</a>
	</div>
	</a>
	
	@if ($produk->spec !== null)
        <a name="specs">
            <div style="background-image:url({{ asset('images/bg3.png') }});padding:30px 0 30px 0;">
                <table>
                <tr>
                    <td>
                        <img src="{{ asset('images/icon-title.png') }}">
                    </td>
                    <td>
                        <div style="font-family:oswald;font-size:25px;color:#185698;text-transform:uppercase;">
                            {{ $produk->name }} <font style="color:#2f2f2f;">SPECS</font>
                        </div>
                    </td>
                    <td>
                        <img src="{{ asset('images/icon-title.png') }}">
                    </td>
                </tr>
                </table>
                <div style="width:960px;">
                    <img src="{{ asset($produk->spec) }}" style="margin-top:10px;width:100%;">
                </div>
                <a href="#top">
                <div style="margin:30px 0 0 0;">
                    <img src="{{ asset('images/btn-detailtop.png') }}">		
                </div>
                </a>
            </div>
        </a>	
    @endif
				
	
	<a name="colors">
	<div style="background-color:#f6f6f6;padding:30px 0 30px 0;">
		<table style="margin:0 0 20px 0;">
		<tr>
			<td>
				<img src="{{ asset('images/icon-title.png') }}">
			</td>
			<td>
				<div style="font-family:oswald;font-size:25px;color:#185698;text-transform:uppercase;">
					{{ $produk->name }} <font style="color:#2f2f2f;">COLORS</font>
				</div>
			</td>
			<td>
				<img src="{{ asset('images/icon-title.png') }}">
			</td>
		</tr>
		</table>
		

        <body style="background-color:#f6f6f6;">
        <center>
            {{-- <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 900px; height: 323px;margin:0 0 0 0;">
                <!-- Slides Container -->
                <div u="slides" style="cursor: move;  width: 900px; height: 323px; overflow: hidden;"> --}}
                    <div class="row color-list">
                        @foreach ($produk->colors as $color)
                        <div class="col-md-2 col-sm-4 col-2">
                            <div>
                                <div>
                                    <img u="image" src="{{ asset($color->image) }}"/>
                                </div>
                                <table>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/square-black.png') }}">
                                    </td>
                                    <td>
                                        <div style="font-family:open sans;font-weight:600;font-size:18px;color:#000000;">
                                            {{ $color->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('images/square-black.png') }}">
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        @endforeach
                    </div>
                {{-- </div>
        
            
                <!-- navigator container -->
        
                <!-- Navigator Skin End -->
        
                <!-- Direction Navigator Skin Begin -->
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
                        background: url(img/d03.html) no-repeat;
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
                <span u="arrowleft" class="jssord03l" style="background: url(images/btn-prev.png) no-repeat;width: 15px; height: 26px; top: 0px; left: -28px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssord03r" style="background: url(images/btn-next.png) no-repeat;width: 15px; height: 26px; top: 0px; right: -28px">
                </span>
                <script>
                    jssor_slider1_starter('slider1_container');
                </script>
            </div>
            <!-- Jssor Slider End --> --}}
            <img width=0 height=0 />
        </center>

		<a href="#top">
		<div style="margin:30px 0 0 0;">
			<img src="{{ asset('images/btn-detailtop.png') }}">		
		</div>
		</a>
	</div>
	</a>
    
    @if ($produk->tvc !== null)
        <a name="tvc">
            <div style="background-image:url({{ asset('images/bg3.png') }});padding:30px 0 30px 0;margin:0 0 30px 0;">
                <table style="margin:0 0 20px 0;">
                <tr>
                    <td>
                        <img src="{{ asset('images/icon-title.png') }}">
                    </td>
                    <td>
                        <div style="font-family:oswald;font-size:25px;color:#185698;text-transform:uppercase;">
                            {{ $produk->name }} <font style="color:#2f2f2f;">TVC</font>
                        </div>
                    </td>
                    <td>
                        <img src="{{ asset('images/icon-title.png') }}">
                    </td>
                </tr>
                </table>
                
                <iframe width="854" height="480" src="{{ $produk->tvc }}" frameborder="0" gesture="media" allowfullscreen></iframe>					
            </div>
        </a>	
    @endif
		
	
<hr style="border:0px solid;border-bottom:1px solid #efefef">
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
        autoScaleSlider: true, 
        autoScaleSliderWidth: 960,     
        autoScaleSliderHeight: 307,
        controlNavigation: 'bullets',
        thumbsFitInViewport: false,
        navigateByClick: true,
        startSlideId: 0,
        autoPlay: true,
        transitionType:'move',
        globalCaption: false,
        deeplinking: {
        enabled: true,
        change: false
        },
        
        imgWidth: 960,
        imgHeight: 307
    });
    });
    </script>


    <script src="{{ asset('jquery/animation/plugins.js') }} "></script>
    <script src="{{ asset('jquery/animation/jquery.appear.js') }} "></script>
    <script src="{{ asset('jquery/animation/jquery.validate.js') }} "></script>
    <script src="{{ asset('jquery/animation/theme.js') }} "></script>
@endsection