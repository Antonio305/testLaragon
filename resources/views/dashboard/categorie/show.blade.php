


<!-- Definimos de que vamos a entender de este aarciuho la cial 
    ldefinimos el nombre de la capeta  y el  nombre del archivo.
   -->
   @extends('dashboard.master')
   
   <!-- 
        del archoco mastes definimo con el yield la section 
   -->
   @section('content')

  <form action="{{ route('categores.show',$categori->id)}}"  method="categori">
           @csrf
   
           <div class="form-group">
               <label for="title"> Titulo</label>
               <input readonly class="form-control"  value="{{ $categori->title }}" type="text" name="title" id="title" class=" @error('title') is-invalid   @enderror">
               @error('title')
                   <div class="alert alert-danger">{{ $message }}</div>
               @enderror
           </div>
   
           <div class=" form-group">
               <label for="url_clean"> Url Limpia</label>
               <input readonly class="form-control" type="text" id="url_clean" type="text" name="url_clean"  value="{{ $categori->url_clean }}">
           </div>
   
           
        </form>   
   
   @endsection
   


{{--  <!-- Definimos de que vamos a entender de este aarciuho la cial 
    ldefinimos el nombre de la capetadit  y el  nombre del archivo.
   -->
   @extends('dashboard.master')
   
   <!-- 
        del archoco mastes definimo con el yield la section 
   -->
   @section('content')

     <!-- reciviremos el id de la cual vamos a haver-->
  <form action="{{ route('categories.show',$categori->id)}}"  method="POST">
           @csrf
   
           <div class="form-group">
               <label for="title"> Titulo</label>
               <input readonly class="form-control"  value="{{ $categori->title }}" type="text" name="title" id="title">
             
           </div>
   
           <div class=" form-group">
               <label for="url_clean"> Url Limpia</label>
               <input readonly class="form-control" type="text" id="url_clean" type="text" name="url_clean"  value="{{ $categori->url_clean }}">
           </div>
   
     
        </form>   
   
   @endsection
     --}}