
<!DOCTYPE html>
<head>
<title>Đăng nhập quản lí</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->


<!-- Custom CSS -->
<link href="back-end/css/style.css" rel='stylesheet' type='text/css' />
<link href="back-end/css/style-responsive.css" rel="stylesheet"/>
<link href="back-end/css/custum.css" rel="stylesheet"/>

<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="back-end/css/font.css" type="text/css"/>
<link href="back-end/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Đăng Nhập</h2>
	
		<form action="admin-dashboard" method="post">
			@csrf
			<input 
				type="text" 
				class="ggg" 
				name="email" 
				placeholder="nhập email" 
				value="{{ old('email') }}"
			>
			@if ($errors->has('email')) 
				<label class="err-message">*
						{{$errors->first('email') }}
				</label>
			@endif

			<input 
				type="password" 
				class="ggg" 
				name="password" 
				placeholder="nhập mật khẩu" 
			>
			@if ($errors->has('password'))
				<label class="err-message">*
						{{$errors->first('password') }}
				</label>
			@endif
			<p></p>

			<span><input type="checkbox"/> Nhớ đăng nhập</span>
			<h6><a href="#">Quên mật khẩu</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p>Chưa có tài khoản<a href="registration.html">Tạo tài khoản</a></p>
</div>
</div>
<script src="back-end/js/bootstrap.js"></script>
<script src="back-end/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="back-end/js/scripts.js"></script>
<script src="back-end/js/jquery.slimscroll.js"></script>
<script src="back-end/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="back-end/js/jquery.scrollTo.js"></script>
</body>
</html>
