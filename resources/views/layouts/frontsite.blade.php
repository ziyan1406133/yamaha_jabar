<!DOCTYPE html>
<html>


<!-- Mirrored from yamaha-jatim.co.id/home by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 06:32:41 GMT -->
<head>
		<base >
	<title>Yamaha Jabar</title>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="format-detection" content="telephone=no">	
	
				<meta name = "description" content = "PT. SURYA TIMUR SAKTI JATIM selaku main dealer motor di Surabaya membuat Website ini dengan sebuah tujuan penting, yakni agar dapat lebih dekat lagi dengan Anda, para pelanggan yang begitu kami istimewakan.Sebuah kebanggaan bagi PT SURYA TIMUR SAKTI JATIM untuk dapat menyambut Anda bergabung menikmati situs kami. Melalui situs ini, Anda dapat menyimak berita terbaru mengenai produk YAMAHA, mengetahui aneka tips n trick, mencari lokasi sales dan service, serta banyak info menarik lain. Anda juga diberi kesempatan untuk berkomentar, memberi masukan ataupun bertanya secara langsung kepada kami melalui customer forum. Dukungan dan kepuasan Anda merupakan motivator kami untuk terus berkarya, berinovasi dan menjadi yang terdepan dalam pelayanan. Terima kasih atas kunjungan dan kepercayaan Anda. Selamat menikmati situs kami.">
				<meta name = "keywords" content = "">	<meta name = "author" content = "KiboCreative">
	<meta name = "copyright" content = "KiboCreative">
	<meta name = "title" content = "YAMAHA Jabar">
	<link rel = "shortcut icon" href = "{{ asset('images/icon.html') }}">

	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type = "text/css">
	
	<!-- FONT -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>	
	<link rel="stylesheet" href="{{ asset('css/font/raleway/stylesheet.css') }}" type = "text/css">
	<link rel="stylesheet" href="{{ asset('css/font/oswald/stylesheet.css') }}" type = "text/css">	
	<link rel="stylesheet" href="{{ asset('klorofilTemplate/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!-- JQUERY -->		
	<script type = "text/javascript" src = "{{ asset('jui/jquery-1.10.1.min.js') }}"></script>
	
	
	<!-- DROP DOWN MENU -->
	<script src="{{ asset('css/dropdown/jquery-latest.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('css/dropdown/dropdown.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('css/dropdown/dropdown.css') }}">
	
	
	<!-- DROP DOWN MENU -->
	<link rel="stylesheet" type="text/css" href="{{ asset('jquery/dropdown/style.css') }}" />
	<script type="text/javascript">
	$(document).ready(function () {
		$('#nav li').hover(
			function () {
				//show its submenu
				$('ul', this).stop().slideDown(0);
			},
			function () {
				//hide its submenu
				$('ul', this).stop().slideUp(0);
			}
		);

	});
	</script>
	
	<link rel="stylesheet" href="{{ asset('jquery/animation/theme-animate.css') }}">	

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-84989537-1', 'auto');
	  ga('send', 'pageview');

	</script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81126636-1"></script>;
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());

	 gtag('config', 'UA-81126636-1');
	</script>
	
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','../connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1232989636822340');
	fbq('track', 'PageView');
	fbq('track', 'ViewContent');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1232989636822340&amp;ev=PageView&amp;noscript=1"
	/></noscript> 
    
    @yield('head')
</head>

<body>
<center>
	<div style="width:100%;position:relative;z-index:12">

@include('layouts.partial.navbar')

@yield('content')

@include('layouts.partial.footer')

</center>

@yield('foot')

</body>


<!-- Mirrored from yamaha-jatim.co.id/home by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 06:38:13 GMT -->
</html>