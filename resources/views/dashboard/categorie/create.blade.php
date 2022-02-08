

<!-- crearemos la vista para ingresar las categorias datos, -->

@extends('dashboard.master')

@section('content')
    <!--incluimos el codigo de la validacion-->

    @include('dashboard.partials.validation-error')

<form id="creating" action="{{route('categories.store')}}" method="POST">

    @csrf
    @include('dashboard.categorie.form')

</form>

 

       <!-- escribiremos el scrip para mostrar editor   de texto  para el contenido -->

    <script>
       ClassicEditor.create(document.querySelector('#content')).catch(
           error => {
            console.error(error);
           }
       )

  
    </script>

@endsection


{{--  


   @extends('dashboard.master')

   @section('content')

    <!--inportamos lac validacion y las vistar que hemos credo la que es _from-->
        
    @include('dashboard.partials.validation-error')

    <form id="creating" action="{{ route('posts.store') }}" method="POST">
        @csrf
    @include('dashboard.posts.form')

    

    </form>s
   
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
       
   
   @endsection

 
  
  --}}
