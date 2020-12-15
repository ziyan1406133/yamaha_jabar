@extends('layouts.frontsite')

@section('head')
    <link href="{{ asset('css/acc/accordion.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('css/acc/accordion.js') }}"></script>
    <script src="{{ asset('css/acc/accordion2.js') }}"></script>
    <script>
        $(function() {
            $( "#accordion" ).accordion({
                autoHeight: false,
                navigation: true,
            });
        });
    </script>
@endsection

@section('content')
    
<hr style="border:0px solid;border-bottom:0px solid #c8c8c8;padding:0 0 0 0;margin:0 0 0 0;">	</div>
	
<div style="font-family:open sans;font-weight:700;color:#326a95;font-size:36px;margin-top:20px;">
    Career Recruitment
</div>
<div style="font-family:open sans;font-weight:600;color:#4a4a4a;font-size:16px;text-transform:uppercase;">
    let join our best team together
</div>
<div style="margin-bottom:20px;">
    <img src="{{ asset('images/line-blue.jpg') }}">
</div>

<div style="background-color:#ffffff;width:960px;padding:30px 0 30px 0;border:1px solid #e8e8e8;margin:0 0 40px 0;">

<img src="{{ asset('data/career/1.jpg') }}" width=850px style="margin:0px 0 0 0;">	
    <form id = "careerform" method = "get" action = "{{ route('careers.index') }}">
    <div style="margin:10px 0 20px 0;">
        <div style="display:inline-block;vertical-align:middle;">
            <input type="text" class="tmenu" name="keyword" value="" placeholder="Search Career Here..." style="color:#242424;background-color:transparent;outline:none;width:200px;border:1px solid #aaa;border-radius:5px;padding:6px 20px 6px 20px;font-size:13px;font-family:open sans;">		
        </div>
        <div style="display:inline-block;vertical-align:middle;">
            <input type="submit" class="tmenu" value="." style="font-size:1px;color:#ffffff;border:0px solid;background-image:url(images/btn-search.png);background-color:transparent;text-align:center;width:86px;height:32px;">
        </div>
    </div>
    </form>	
    
    <div style="margin:0 0 20px 0;width:800px;">
    
            <a href="{{ route('careers.index') }}">
            <div class="careermenu" style="color:#ffffff;background-color:#174273;">
                All Career
            </div>
            </a>		</div>
    
    <div id="accordion" style='text-align: left'>
        @foreach ($career as $item)
            <h3 style="padding:10px 10px 10px 20px;"><img src="{{ asset('images/plus.png') }}" style="margin:0 10px 0 0;">{{ $item->name }}</h3>
            <div class="accordion_content">			
                {!! $item->description !!}
            </div>
        @endforeach
    </div>	
    
    

        <table width=840px style="margin:40px 0 0px 0;">
        <tr>
            <td width=280px>			
                <div style="display:inline-block;vertical-align:middle;">
                    <img src="{{ asset('data/career/1a.png') }}">
                </div>
                <div style="display:inline-block;vertical-align:middle;">
                    <div style="font-family:arial;font-size:15px;color:#326a95;line-height:20px;font-weight:bold;text-transform:uppercase;">
                        MORE INFORMATION
                    </div>
                    <div style="font-family:arial;font-size:12px;color:#326a95;text-transform:uppercase;">
                        031 - 5312121
                    </div>
                </div>
            </td>
            <td align=center width=280px>
                <div style="display:inline-block;vertical-align:middle;">
                    <img src="{{ asset('data/career/1b.png') }}">
                </div>
                <div style="display:inline-block;vertical-align:middle;">
                    <div style="font-family:arial;font-size:15px;color:#326a95;line-height:20px;font-weight:bold;text-transform:uppercase;text-align:left;">
                        EMAIL US
                    </div>
                    <div style="font-family:arial;font-size:12px;color:#326a95;text-transform:uppercase;text-align:left;">
                        hr.recruitment.yamahastsj@gmail.com
                    </div>
                </div>
            </td>
            <td align=right width=280px>
                <div style="display:inline-block;vertical-align:middle;">
                    <img src="{{ asset('data/career/1c.png') }}">
                </div>
                <div style="display:inline-block;vertical-align:middle;">
                    <div style="font-family:arial;font-size:15px;color:#326a95;line-height:20px;font-weight:bold;text-transform:uppercase;text-align:left;">
                        HEAD OFFICE
                    </div>
                    <div style="font-family:arial;font-size:12px;color:#326a95;text-transform:uppercase;text-align:left;">
                        Jl. Basuki Rahmat 45-47 Surabaya
                    </div>
                </div>
            </td>
        </tr>
        </table>		
</div>


<hr style="border:0px solid;border-bottom:1px solid #efefef">

@endsection