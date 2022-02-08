<!-- Definimos de que vamos a entender de este aarciuho la cial 
    ldefinimos el nombre de la capeta  y el  nombre del archivo.
   -->
   @extends('dashboard.master')
   
   <!-- 
        del archoco mastes definimo con el yield la section 
   -->
   @section('content')

     <!-- reciviremos el id de la cual vamos-->
  <form action="{{ route('posts.show',$posts->id)}}"  method="POST">
           @csrf
   
           <div class="form-group">
               <label for="title"> Titulo</label>
               <input readonly class="form-control"  value="{{ $posts->title }}" type="text" name="title" id="title" class=" @error('title') is-invalid   @enderror">
               @error('title')
                   <div class="alert alert-danger">{{ $message }}</div>
               @enderror
           </div>
   
           <div class=" form-group">
               <label for="url_clean"> Url Limpia</label>
               <input readonly class="form-control" type="text" id="url_clean" type="text" name="url_clean"  value="{{ $posts->url_clean }}">
           </div>
   
           <div class="form-control">
               <label for="content"> Contenido</label>
               <textarea readonly class="form-control" name="content" id="content" cols="30" rows="3"  
                   class="@error('content') is-invalid @enderror">
                   {{ $posts->content }}
       </textarea>
   
               @error('content')
                   <small class="text-darger"> {{ $message }} </small>
               @enderror
           </div>
        </form>   
   
   @endsection
   