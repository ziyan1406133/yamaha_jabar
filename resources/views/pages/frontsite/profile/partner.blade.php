@extends('layouts.frontsite')

@section('content')
    @include('layouts.partial.profile-head')
    <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:29px;margin-top:20px;">
        Partner & Affiliates
    </div>
    <div style="font-family:open sans;color:#4a4a4a;font-size:14px;text-transform:uppercase;">
        Here the list of Our Partners
    </div>
    <div>
        <img src="{{ asset('images/line-blue.jpg') }}">
    </div>
        <table cellpadding=20px>
            <tr>
                <td align=center>
                    <a href="https://www.baf.id/" target="_blank">
                        <img style="max-width:180px;" class="negatif" src="{{ asset('data/profile_partner/1.png') }}" alt="Bussan Auto Finance" title="Bussan Auto Finance">
                    </a>
                </td>
                <td align=center>
                    <a href="http://indomobilfinance.com/public/index" target="_blank">
                        <img style="max-width:180px;" class="negatif" src="{{ asset('data/profile_partner/2.jpg') }}" alt="indomobil finance" title="indomobil finance">
                    </a>
                </td>
                <td align=center>
                    <a href="http://adira.co.id/" target="_blank">
                        <img style="max-width:180px;" class="negatif" src="{{ asset('data/profile_partner/3.png') }}" alt="ADIRA" title="ADIRA">
                    </a>
                </td>
                <td align=center>
                    <a href="http://www.wom.co.id/" target="_blank">
                        <img style="max-width:180px;" class="negatif" src="{{ asset('data/profile_partner/4.png') }}" alt="WOM Finance" title="WOM Finance">
                    </a>
                </td>
                </tr>
                </table>
                <table cellpadding=20px>
                <tr>
                <td align=center>
                    <a href="http://www.otofinance.co.id/" target="_blank">
                        <img style="max-width:180px;" class="negatif" src="{{ asset('data/profile_partner/5.png') }}" alt="OTO Finance" title="OTO Finance">
                    </a>
                </td>
            </tr>
        </table>		
    </div>
    <img src="{{ asset('images/profile-shadow.png') }}">
    </div>	
    @include('layouts.partial.profile-footer')
@endsection