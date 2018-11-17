<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('/css/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/public/css/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/util(2).css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/css/main(2).css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact100" style="background-image: url({{url('/css/images/bg-01(2).jpg')}})">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="{{url('css/images/8.png')}}" alt="IMG">
				</div>

				<form class="contact100-form validate-form" method="POST" action="{{route('profile.store')}}">
					<span class="contact100-form-title">
						Registro de datos de perfil
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="number" name="tlf" placeholder="Telefono">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="descripcion" placeholder="Danos una descripcion de tu persona"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="edu_primaria" placeholder="Educacion Primaria">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>


      <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="edu_secundaria" placeholder="Educacion Secundaria">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

           <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="habilidades_art" placeholder="Habilidades Artisticas">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="habilidades_comp" placeholder="Habilidades Computacionales">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="habilidades_off" placeholder="Habilidades Oficinista">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="hobbies" placeholder="Pasatiempos">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>


          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="date" name="cursos_date" placeholder="Pasatiempos">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="cursos_des" placeholder="Cursos">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              
            </span>
          </div><input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							Enviar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{asset('css/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('css/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('css/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('css/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('css/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{url('/js/main.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
