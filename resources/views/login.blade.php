<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Jadwal Dokter</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="{{asset('New/css/style.css')}}" />
		<script src="{{asset('New/js/modernizr.custom.63321.js')}}"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
				background: #563c55 url(images/blurred.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
        <div class="container">
			
			<header>
			
				<h1><strong>LOGIN</strong></h1>
				<h2>Jadwal Dokter</h2>
				
			</header>
			
			<section class="main">
				<form class="form-2" method="POST" action="{{url('/login')}}">
				{{ csrf_field() }}
				
				@if(Session::has("error"))
					<strong style="color:red">{{Session::get("error")}}</strong>
				@endif
				    <p class="clearfix">
				        <label for="E-Mail">E-Mail</label>
				        <input type="text" name="email" id="E-Mail" placeholder="E-Mail">
				    </p>
				    <p class="clearfix">
				        <label for="password">Password</label>
				        <input type="password" name="password" id="password" placeholder="Password"> 
				    </p>
					
				    <p class="clearfix">
				        <input type="checkbox" name="remember" id="remember">
				        <label for="remember">Remember me</label>
				    </p>
				    <p class="clearfix">
				        <input type="submit" name="submit" value="LOGIN">
						<a class="log-twitter" href="{{url('register')}}"> Register</a>
				    </p>       
				</form>​
			</section>
			
        </div>
    </body>
</html>