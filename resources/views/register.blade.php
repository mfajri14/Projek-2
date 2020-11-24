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
			
				<h1><strong>REGISTER</strong></h1>
				<h2>Jadwal Dokter</h2>
				
			</header>
			
			<section class="main">
				<form class="form-2" method="post" action="{{url('/register')}}">
					{{ csrf_field() }}
					
					@if(Session::has("sukses"))
					<strong style="color:green">{{Session::get("sukses")}}</strong>
					@endif
				    <p class="clearfix">
				        <label for="name">Name</label>
				        <input type="text" name="name" id="name" placeholder="Name">
				    </p>
					<p class="clearfix">
				        <label for="email">E-Mail</label>
				        <input type="text" name="email" id="email" placeholder="E-Mail">
				    </p>
					<p class="clearfix">
				        <label for="jenis_kelamin">Jenis Kelamin</label>
				        <select class="log-twitter" name="jenis_kelamin" id="jenis_kelamin" placeholder="jenis_kelamin">
							<option value="laki-laki"> Laki-laki</option>
							<option value="perempuan"> Perempuan</option>
						</select>
					</p>
					<p class="clearfix">
				        <label for="agama">Agama</label>
				        <select class="log-twitter" name="agama" id="agama" placeholder="Agama">
							<option value="budha"> Budha</option>
							<option value="hindu"> Hindu</option>
							<option value="islam"> Islam</option>
							<option value="katolik"> Katolik</option>
							<option value="protestan"> Protestan</option>
							
						</select>
					</p>
				    <p class="clearfix">
				        <label for="password">Password</label>
				        <input type="password" name="password" id="password" placeholder="Password"> 
					</p>
					<p class="clearfix">
				        <label for="confirm_password">Confirm Password</label>
				        <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm_password"> 
				    </p>
					
				    <p class="clearfix">
				        <input type="submit" name="submit" value="Register">
						<a class="log-twitter" href="{{url('/login')}}"> Login</a>
				    </p> 
				</form>​
			</section>
			
        </div>
    </body>
</html>