<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
body {
    font-family: 'figtree', sans-serif; /* Aplicar tu fuente personalizada */
    background-image: url('assets/img/inicio.jpg'); /* Rutas de las imágenes */
    background-size: cover; /* Cubrir toda el área */
    background-position: center center; /* Posiciones de la imagen de fondo */
    background-repeat: no-repeat; /* Evitar que la imagen de fondo se repita */
    height: 100vh !important; /* Ajustar la altura del cuerpo al 100% de la ventana gráfica */
    margin: 0; /* Eliminar márgenes predeterminados */
    padding: 0; /* Eliminar relleno predeterminado */
    position: relative; /* Establecer posición relativa para alinear imágenes absolutas */
}

    </style>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                     <!-- Email Address -->
                                      <div class="form-floating mb-3">
                                          <x-input-label for="name" :value="__('Nombre o Usuario')" />
                                          <x-text-input  id="name"  class="form-control"  placeholder="name@example.com"  type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                      </div>
                             
                                      <!-- Password -->
                                      <div class="form-floating mb-3">
                                          <x-input-label for="password" :value="__('Password')" />
                             
                                          <x-text-input class="form-control" id="password" placeholder="Password" 
                                                          type="password"
                                                          name="password"
                                                          required autocomplete="current-password" />
                             
                                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                      </div>
                                         


                               
                                       <!-- Remember Me -->
                                       <div >
                                           <label for="remember_me" class="inline-flex items-center">
                                               <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                               <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                           </label>
                                       </div>
                               
                                       <div class="flex items-center justify-end mt-4">
                                           @if (Route::has('password.request'))
                                               <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                   {{ __('Forgot your password?') }}
                                               </a>
                                           @endif
                                           <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <x-primary-button class="ms-3">
                                                 {{ __('INGRESAR') }}<a class="btn btn-primary" >Login</a>
                                                </x-primary-button>
                                                
                                            </div>

                                       </div>
                                </form>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
