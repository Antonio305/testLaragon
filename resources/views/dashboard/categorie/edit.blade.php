<!-- Definimos de que vamos a entender de este aarciuho la cial 
    ldefinimos el nombre de la capeta  y el  nombre del archivo.
   -->
@extends('dashboard.master')

<!-- 
        del archoco mastes definimo con el yield la section 
   -->
@section('content')
    @include('dashboard.partials.validation-error')

    // aca mandamos la peticion de los  datos.

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @method('PUT')
 
        @include('dashboard.categorie.form')
        
    </form>
    <br>
    <br>
    
    <!--crearemos otro fotm para subir las imagenes-->
    <!-- del post podemos solo el id o pasar todo el objeto--> 



    {{--  <form action="{{route('post.image',$post->id)}}" method="POST" enctype="multipart/form-data">
 @csrf
        <div class="container">
            <div class="row">

                    <label for=""> Selecciona una de las imagen </label>


                <br>

                <div class="col">
                    <input type="file" id="image" name="image" class="form-control">
                </div>

                <div class="col">
                    <input type="submit" class="btn btn-primary" value="ENViAR">
                </div>
            </div>
        </div>
    </form>
  --}}

    <!--codigo se js para el dceditor-->
    {{--  <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>  --}}

@endsection
