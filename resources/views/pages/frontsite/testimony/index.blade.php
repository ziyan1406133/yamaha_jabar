@extends('layouts.frontsite')

@section('head')
    <link rel="stylesheet" href="{{ asset('klorofilTemplate/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
@endsection

@section('content')
    @include('layouts.partial.profile-head')
	<div style="font-family:open sans;font-weight:700;color:#326a95;font-size:36px;margin-top:20px;">
		Yamaha Gallery
	</div>
	<div style="font-family:open sans;font-weight:600;color:#4a4a4a;font-size:16px;text-transform:uppercase;">
		See all our activity
	</div>
	<div style="margin-bottom:20px;">
		<img src="images/line-blue.jpg">
	</div>
	
	
	<div style="width:100%;background-image:url(images/bg-corak.png);background-repeat:no-repeat;background-size:100% auto;padding:40px 0 40px 0;">							
		<table width=960px>
		    <tr>
            @for ($i = 1; $i <= count($testimonies); $i++)
                <td align=center valign=top style="padding:0 0 30px 0;">
                    <a href="#" data-toggle="modal" data-target="#showTestimoni_{{ $testimonies[$i-1]["id"] }}">
                    <div style="background-image:url({{ asset($testimonies[$i-1]['image']) }});width:306px;height:205px;padding:10px 0 0 7px;text-align:left;">
                        <img src="{{ asset($testimonies[$i-1]['image']) }}" width=300 height=193 style="border:1px solid #3f3f3f;border-radius:3px;">
                    </div>
                    </a>
                </td>
                @if ($i > 1)
                    @if ($i%3 == 0)
                        </tr>
                        <tr>
                    @endif
                @endif
            @endfor
            </tr>
        </table>
	</div>
    @for ($i = 0; $i < count($testimonies); $i++)
        @include('pages.frontsite.testimony.modal.show')
    @endfor
    <hr style="border:0px solid;border-bottom:1px solid #efefef">
    @include('layouts.partial.profile-footer')
@endsection

@section('foot')
	<script src="{{ asset('klorofilTemplate/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('klorofilTemplate/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
@endsection