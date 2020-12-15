@extends('layouts.frontsite')

@section('head')
    <style>
        .menuprof {
            color:#ffffff;
            background-color:#174273; 
        }
        .active {
            height: 65px;
        }
    </style>
@endsection

@section('content')
@include('layouts.partial.profile-head')
			<div style="font-family:open sans;font-weight:700;color:#326a95;font-size:29px;margin-top:20px;">
				Company Profile
			</div>
			<div style="font-family:open sans;color:#4a4a4a;font-size:14px;text-transform:uppercase;">
				Start to get through our company mission
			</div>
			<div>
				<img src="{{ asset('images/line-blue.jpg') }}">
			</div>
			
			<table width=800px cellpadding=20px>
			<tr>
				<td align=left>
				
							<div style="font-family:open sans;color:#4a4a4a;font-size:12px;line-height:24px;">
								Berawal dari tahun 1974, PT. Surya Timur Sakti Jatim memulai bisnisnya di Jalan Embong Ploso 23 Surabaya dengan nama “Yamaha Pool” dengan jumlah karyawan 16 orang. Performa perusahaan yang semakin bertumbuh pesar diiringi  dengan pergantian nama menjadi “Yamaha Harapan Jatim” dan perpindahankantornya ke jalan Kranggan 102 Surabaya ditahunm 1975. Selama 7 tahun YAMAHA HARAPAN JATIM bertempat di jalan Kranggan 102 sebelum pada tahun 1982 berpindah kantor lagi ke jalan Kedungdoro 62-64 Surabaya.<br />
                                <br />
                                Pada Tanggal 10 September 1984 nama perusahaan YAMAHA HARAPAN JATIM resmi berganti nama menjadi PT. SURYA TIMUR SAKTI JATIM. Dan di tahun 1994 PT. RODA SAKTI SURYARAYA didirikan untuk meningkatkan pelayanan terutama di area Malang, Jember dan Nusa Tenggara. Seiring dengan peningkatan pelayanan dan kinerjanya, pada tahun 1997, kantor PT. SURYA TIMUR SAKTI JATIM berpindah jalan Tegalsari 60 Surabaya. <br />
                                <br />
                                Pada awal tahun 2001, tepatnya pada tanggal 1 Januari, diresmikan Gedung RSSR dilokasi yang strategis dan lebih luas yaitu di CBD (Central Bussiness District) kota Surabaya, Jalan Basuki Rahmat 45-47 sebagai kantor pusat PT.SURYA TIMUR SAKTI JATIM dan PT. RODA SAKTI SURYA RAYA.<br />
                                <br />
                                42 tahun kebersamaan kami PT. Surya Timur Sakti Jatim dan PT. Roda Sakti Surya Megah dengan menyandang visi Menjadi perusahaan penyalur sepeda motor Yamaha terbaik di Indonesia dan dengan misi Mengembangkan bisnis melalui produk-produk Yamaha yang berkualitas asli Jepang, terdistribusi secara regional Indonesia Timur dengan dasar customer satisfaction dan information technology akan  senantiasa fokus kepada kepuasaan pelanggan dan terdepan dalam pelayanan.<br />
                                <br />
                                WHY Yamaha??<br />
                                PHILOSOPHY OF YAMAHA<br />
                                Memberikan Sentuhan Pribadi pada Pelanggan dengan Menciptakan Produk Yang Bermutu & Pelayanan yang baik melalui “Staff yang terampil, penuh kehangatan Cepat & Akurat.<br />
                                <br />
                                KUALITAS YAMAHA NO 1:<br />
                                1.	COVERAGE AREA LUAS<br />
                                2.	JARINGAN SERVICE TERSEBAR DI SEMUA WILAYAH<br />
                                3.	MEKANIK YANG TERSERTIFIKASI & AHLI DI BIDANG NYA<br />
                                4.	PRODUK BERKWALITAS DENGAN GARANSI FI & FORGED PISTON – DIASYL SILINDER 5 TAHUN<br />
                                5.	PERALATAN LENGKAP & MODERN<br />
                                6.	SPARE PART TERJANGKAU & ORIGINAL
							</div>					
				</td>
			</tr>
			</table>
		</div>
		<img src="{{ asset('images/profile-shadow.png') }}">
    </div>	
    
    @include('layouts.partial.profile-footer')
@endsection