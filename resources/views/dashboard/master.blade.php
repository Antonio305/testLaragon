<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   


{{--  
    <link href="{{asset('css/estilos.css')}}" rel="stylesheet">
 --}}


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>


  <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script> 


     
      {{--  <link rel="stylesheet" href="{{ asset('public/css/estilos.css') }}">  --}}
       {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}



  <title>Moduilo administrador</title>
  yo sooy el master




</head>

<body>
    

    <h1>ACA TOOD ESTA BIEN PESADO</h1>
    <div class="container">

        <!--vamos a incluir el codigo del menu-->
        @include('dashboard.partials.nav-header-menu')

        <div class="container">
            <!-- vamos a definimos un mensaje si el dato ha sido ingresado con exito -->

            @include('dashboard.partials.session-flash-status')


            <!--Desde eeste punto definomos cual vista vamos a motrar-->
            @yield('content')

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    {{--  
    <script src="{{ asset('js/app.js') }}"></script>  --}}


</body>
</html>