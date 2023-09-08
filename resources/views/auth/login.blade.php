<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    
    
</head>

<body>
    
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <h4 class="text-center p-2">Iniciar Session</h4>
                            <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" placeholder="Ingrese Usuario"/>
                            <label class="form-label" for="form1Example13">Correo</label>
                        </div>
                        
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" placeholder="Ingrese Contraseña"/>
                            <label class="form-label" for="form1Example23">Contraseña</label>
                        </div>
                        
                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Recordar </label>
                            </div>
                            <a href="#!">Olvidaste tu contraseña?</a>
                        </div>
                        
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block col-12 m-1">Ingresar</button>
                        <label class="form-check-label" for="form1Example3"> No tienes Cuenta? </label>
                        <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg btn-block col-12 m-1">Crear Cuenta</a>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>