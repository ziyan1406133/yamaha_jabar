@extends('layouts.frontsite')

@section('content')
    @include('layouts.partial.profile-head')
    <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:29px;margin-top:20px;">
        Company Awards
    </div>
    <div style="font-family:open sans;color:#4a4a4a;font-size:14px;text-transform:uppercase;">
        See our achievement
    </div>
    <div>
        <img src="{{ asset('images/line-blue.jpg') }}">
    </div>
    
    <table cellpadding=20px>
        <tr>
            <td align=center>
                <img style="max-width:200px;" class="negatif" src="{{ asset('data/award_pic/3.png') }}" alt="" title="">
                <div style="font-family:open sans;color:#222222;font-size:15px;font-weight:600;text-transform:uppercase;margin:10px 0 0 0;">
                    Top Brand yamaha Jupiter
                </div>
            </td>
            <td align=center>
                <img style="max-width:200px;" class="negatif" src="{{ asset('data/award_pic/4.png') }}" alt="" title="">
                <div style="font-family:open sans;color:#222222;font-size:15px;font-weight:600;text-transform:uppercase;margin:10px 0 0 0;">
                    Top Brand Yamaha Mio
                </div>
            </td>
            <td align=center>
                <img style="max-width:200px;" class="negatif" src="{{ asset('data/award_pic/5.png') }}" alt="" title="">
                <div style="font-family:open sans;color:#222222;font-size:15px;font-weight:600;text-transform:uppercase;margin:10px 0 0 0;">
                    Top Brand Yamaha Vixion
                </div>
            </td>
            </tr>
            </table>
        </tr>
    </table>		
    </div>
    <img src="{{ asset('images/profile-shadow.png') }}">
    </div>	

    @include('layouts.partial.profile-footer')
@endsection