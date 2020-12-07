@extends('layouts.frontsite')

@section('content')
<div style="background-color:#ffffff;width:960px;padding:20px 0 30px 0;border:1px solid #e8e8e8;margin:30px 0 40px 0;">
    <div style="background-image:url({{ asset('images/dealer-map.png') }});background-repeat:no-repeat;">
        <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:36px;margin-top:0px;">
            Dealers Network
        </div>
        <div style="font-family:open sans;font-weight:600;color:#4a4a4a;font-size:16px;text-transform:uppercase;">
            Know about our dealers all around the world
        </div>
        <div style="margin-bottom:20px;">
            <img src="{{ asset('images/line-blue.jpg') }}">
        </div>
        
            {{-- <form id = "careerform" method = "post" action = "#">
            <div style="margin:10px 0 20px 0;"> 
                <div style="display:inline-block;vertical-align:middle;">
                    <input type="text" class="tmenu" name="ckey" value=""  placeholder="Search Dealer Here..." style="color:#242424;background-color:transparent;outline:none;width:200px;border:1px solid #aaa;border-radius:5px;padding:6px 20px 6px 20px;font-size:13px;font-family:open sans;">		
                </div>
                <div style="display:inline-block;vertical-align:middle;margin:0 0px 0 10px;">
                    <input type="submit" class="tmenu" value="." style="font-size:1px;color:#ffffff;border:0px solid;background-image:url({{ asset('images/btn-search.png') }});background-color:transparent;text-align:center;width:86px;height:32px;">
                </div>
            </div>
            </form>			 --}}
        <div style="margin:60px 0 70px 0;">	
            @foreach ($regions as $item)
                <a href="{{ route('network.show', $item->id) }}">
                    <div class="dealermenu">
                        <font style="font-weight:600;font-size:18px;">{{ $item->name }}</font><br>Region
                    </div>
                </a>	
            @endforeach
        </div>
        
        <div style="width:80%;">
                    
        </div>
        
        
        <table style="margin:40px 0 0px 0;" cellspacing=10px>
        <tr>
            @foreach ($region->networks as $network)
            <td valign=top align=left width=300px>		
                <div style="background-color:rgba(255,255,255,0.7);padding:20px 0 20px 0;border:1px solid #e8e8e8;text-align:left;">
                    <table>
                    <tr>
                        <td valign=top style="padding:0 5px 0 15px;">
                            <img src="{{ asset('images/icon-place.png') }}">
                        </td>
                        <td valign=top style="font-family:open sans;font-size:15px;color:#326a95;font-weight:600;text-transform:uppercase;padding:0 20px 0 0px;">							
                            {{ $network->name }}					
                        </td>
                    </tr>
                    </table>
                    <div style="font-family:open sans;font-size:12px;color:#444444;margin:10px 0 5px 0;padding:0 0 0 20px;line-height:16px;">
                        {{ $network->address }}							
                    </div>
                        <div class="dealertelp">
                            {{ $network->phone }}
                        </div>
                        <div style="height:15px;">
                        </div>
                        <div style="float:right;margin:10px 0 0 0;">
                            <div class="dealercity">
                                @if ($network->is_head_office)
                                    <a href="{{ route('network.show', $region->id) }}"><font style="font-weight:600;text-transform:uppercase;color:#ffffff;">{{ $region->name }}</font></a> HEAD OFFICE
                                @else
                                    DEALER  <a href="{{ route('network.show', $region->id) }}"><font style="font-weight:600;text-transform:uppercase;color:#ffffff;">{{ $region->name }}</font></a>
                                @endif
                            </div>
                        </div><div style="height:30px;">
                        
                    </div>
                </div>
            @endforeach
        </table>

</div>
    
</div>
<img src="{{ asset('images/profile-shadow.png') }}" style="margin-top:-85px;">
@endsection