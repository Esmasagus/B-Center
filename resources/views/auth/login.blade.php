<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset("/backend/images/logo-1.png") }}">

    <title>B-Center - Log in </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset("/backend/main-dark/css/vendors_css.css") }}">

	<!-- Style-->
	<link rel="stylesheet" href="{{ asset("/backend/main-dark/css/style.css") }}">
	<link rel="stylesheet" href="{{ asset("/backend/main-dark/css/skin_color.css") }}">

</head>
<body class="hold-transition theme-primary bg-primary" style="background-image: url(backend/images/auth-bg/bg-6.png); width: 100%">
    {{-- style="background-image: url(backend/images/15.jpg)" --}}

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						{{-- <div class="content-top-agile p-10">
							<h2 class="text-white">Get started with Us</h2>
							<p class="text-white-50">Sign in to start your session</p>
						</div> --}}
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed"">
                            <center>
                            <img src="{{ asset('backend/images/logo.png') }}" width="150" class="mb-2" alt="">
                            <h2 class="text-white mb-3 text-bold">Login Form</h2>
                        </center>
							<form action="{{ route('login') }}" method="post">
                                @csrf
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
										</div>
										<input type="email" name="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-primary btn-rounded mt-10">SIGN IN</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>
							{{-- <div class="text-center">
								<p class="mt-15 mb-0 text-white">Don't have an account? <a href="{{ url("auth_register.html") }}" class="text-info ml-5">Sign Up</a></p>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset("/backend/main-dark/js/vendors.min.js") }}"></script>
    <script src="{{ asset("/backend/assets/icons/feather-icons/feather.min.js") }}"></script>

</body>
</html>
