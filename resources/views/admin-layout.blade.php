
<!DOCTYPE html>
<head>
<title>Trang quản lí web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ asset('back-end/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->

<!-- Custom CSS -->
<link href="{{ asset('back-end/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('back-end/css/style-responsive.css') }}" rel="stylesheet" />
<link href="{{ asset('back-end/css/custum.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('back-end/css/switchery/switchery.css') }}" rel="stylesheet" />


<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- Gọi tệp tin CSS từ thư mục public/back-end/css -->
<link rel="stylesheet" href="{{ asset('back-end/css/font.css') }}" type="text/css"/>
<!-- Gọi Bootstrap Icons từ CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<!-- Gọi Font Awesome từ thư mục public/back-end/css -->
<link href="{{ asset('back-end/css/font-awesome.css') }}" rel="stylesheet">
<!-- Gọi tệp tin CSS từ thư mục public/back-end/css -->
<link rel="stylesheet" href="{{ asset('back-end/css/morris.css') }}" type="text/css"/>


<link rel="stylesheet" href="back-end/css/monthly.css">
<!-- //font-awesome icons -->
<!-- Gọi thư viện jQuery từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/jquery2.0.3.min.js') }}"></script>
<!-- Gọi thư viện Raphael từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/raphael-min.js') }}"></script>
<!-- Gọi thư viện Morris.js từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/morris.js') }}"></script>
</head>



<body>
<section id="container">
<!--header start-->
	@include('admin.header')
	<aside>
		<div id="sidebar" class="nav-collapse">
			@include('admin.sidebar')
		</div>
	</aside>
	
<section id="main-content">
	<section class="wrapper">
		
			@yield('content')
			
	</section>
</section>









<!-- Gọi thư viện Bootstrap từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/bootstrap.js') }}"></script>
<!-- Gọi thư viện jQuery DCJS từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<!-- Gọi tệp tin JavaScript từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/scripts.js') }}"></script>
<!-- Gọi thư viện jQuery SlimScroll từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/jquery.slimscroll.js') }}"></script>
<!-- Gọi thư viện jQuery NiceScroll từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/jquery.nicescroll.js') }}"></script>
<!-- Gọi thư viện Switchery từ thư mục public/back-end/js/switchery -->
<script src="{{ asset('back-end/js/switchery/switchery.js') }}"></script>
<!-- Gọi tệp tin JavaScript từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/library.js') }}"></script>
<!-- Kiểm tra nếu trình duyệt là IE8 hoặc thấp hơn, sử dụng thư viện excanvas.min.js -->
<script language="javascript" type="text/javascript" src="{{ asset('back-end/js/flot-chart/excanvas.min.js') }}"></script>
<!-- Gọi thư viện jQuery ScrollTo từ thư mục public/back-end/js -->
<script src="{{ asset('back-end/js/jquery.scrollTo.js') }}"></script>
<!-- morris JavaScript -->	


{{-- <script>
		 var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });
</script> --}}

	{{-- <script>
		$(document).ready(function() {	
			var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });
		})
	</script> --}}

<!-- calendar -->
	<script type="text/javascript" src="{{ asset('back-end/js/monthly.js') }}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});
			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>

</body>
</html>
