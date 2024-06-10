<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Salessa Shop - Product Details</title>
  @required('layouts.ProductDetails.css')
</head>
<body>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
    @required('layouts.ProductDetails.nav')
    </div>
  </header>
	<!--================ End Header Menu Area =================-->
	
	<!-- ================ start banner area ================= -->	
	@required('layouts.ProductDetails.banne')
	<!-- ================ end banner area ================= -->


  @yield('content')

  <!--================ Start footer Area  =================-->	
  @required('layouts.ProductDetails.footer')
	<!--================ End footer Area  =================-->



@required('layouts.ProductDetails.js')
</body>
</html>