@extends('layouts.frontsite')

@section('content')
    @include('layouts.partial.profile-head')
    <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:29px;margin-top:20px;">
            Vision & Mission
        </div>
        <div style="font-family:open sans;color:#4a4a4a;font-size:14px;text-transform:uppercase;">
            Start to get through our company mission
        </div>
        <div>
            <img src="{{ asset('images/line-blue.jpg') }}">
        </div>
        
        <table cellpadding=20px>
        <tr>
        
                <td width=350px align=center valign=top>
                    <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:24px;line-height:20px;">
                        Vision
                    </div>
                    <div style="font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;margin:10px 0 0 0;">
                        Menjadi perusahaan penyalur sepeda motor Yamaha terbaik di Indonesia.
                    </div>
                </td>
                <td width=350px align=center valign=top>
                    <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:24px;line-height:20px;">
                        Mission
                    </div>
                    <div style="font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;margin:10px 0 0 0;">
                        Mengembangkan bisnis melalui produk-produk Yamaha yang berkualitas asli Jepang, terdistribusi secara regional Indonesia Timur dengan dasar customer satisfaction dan information technology.
                    </div>
                </td>				
        </tr>
        </table>
    </div>
    <img src="{{ asset('images/profile-shadow.png') }}">
    </div>	
    @include('layouts.partial.profile-footer')
@endsection