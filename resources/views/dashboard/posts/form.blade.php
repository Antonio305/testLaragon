




   
             @csrf

           <div class="form-group"> 
            
   


               <label for="title"> Titulo</label>
               <input class="form-control"  value="{{ old('title', $posts->title)  }}" type="text" name="title" id="title" class=" @error('title') is-invalid   @enderror">
               @error('title')
                   <div class="alert alert-danger">{{ $message }}</div>
               @enderror
           </div>

   
           <div class="form-group">
               <label for="url_clean"> Url Limpia</label>
               <input class="form-control" type="text" id="url_clean" type="text" name="url_clean"  value="{{ old('url_clean',$posts->url_clean),  }}">
           </div>

           <!--codigo del formulario de categorias y el posted-->

           <div class="form-group">
            <label for="category_id"> Categorias</label>

               <select class="form-control" name="category_id" id="category_id">
                   <!--con el foreach es una forma de  hacer mas facial con el listado de los datos -->
                @foreach ($category as $title => $id)
                <option {{ $posts->category_id == $id ? 'selected= "selected"' : ''}} value="{{$id}}">{{$title}}</option>
                    
                @endforeach
               </select>
        </div>

        {{--   creamros el formualrio  para seleccoinar los posred --}}
        <div class="form-group">
            <label for="posted"> Posted</label>
            <select name="posted" id="posted">
  {{-- include el formulario hecho para las opciones--}}

              @include("dashboard.partials.option-yes-not",['val' => $posts->posted] )

            </select>

            <br>
            <br>

            <div class="form-control">
                <label for="content"> Contenido</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="3"  
                    class="@error('content') is-invalid @enderror">
                    {{ old('content',$posts->content) }}
        </textarea>
    
                @error('content')
                    <small class="text-darger"> {{ $message }} </small>
                @enderror
            
             </div>
        </div>



{{--

        <!--Aca vamos a mostrar o crear codigo para los po -->

              <div class="form-group">
                  <label for="posted"> Posted</label>
                <select class="form-control" name="posted" id="posted">

              @include('dashboard.partials.option-yes-not',['val' => $post->posted])   
             </select>

              </div>  --}}



           {{--  <div class="form-control">
               <label for="content"> Contenido</label>
               <textarea class="form-control" name="content" id="content" cols="30" rows="3"  
                   class="@error('content') is-invalid @enderror">
                   {{ old('content',$posts->content) }}
       </textarea>
   
               @error('content')
                   <small class="text-darger"> {{ $message }} </small>
               @enderror
           
            </div>
     --}}

      


           <input type="submit" value="Enviar">
         
   
         

    
           <script>
            ClassicEditor
                .create( document.querySelector( '#content' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
           


{{--     
           @csrf
   
           <div class="form-group">
               <label for="title"> Titulo</label>
               <input class="form-control"  value="{{ old('title', $post->title)  }}" type="text" name="title" id="title" class=" @error('title') is-invalid   @enderror">
               @error('title')
                   <div class="alert alert-danger">{{ $message }}</div>
               @enderror
           </div>

   
           <div class=" form-group">
               <label for="url_clean"> Url Limpia</label>
               <input class="form-control" type="text" id="url_clean" type="text" name="url_clean"  value="{{ old('url_clean',$post->url_clean),  }}">
           </div>

           <div class=" form-group">
            <label for="category_id"> Categorias</label>

               <select class="form-control" name="category_id" id="category_id">
                   <!--con el foreach es una forma de  hacer mas facial con el listado de los datos.-->
                @foreach ($categories as $title => $id)
                <option {{ $post->category_id == $id ? 'selected= "selected"' : ''}} value="{{$id}}">{{$title}}</option>
                    
                @endforeach
               </select>
        </div>

        <!--Aca vamos a mostrar o crear codigo para los po -->

              <div class="form-group">
                  <label for="posted"> Posted</label>
                <select class="form-control" name="posted" id="posted">

              @include('dashboard.partials.option-yes-not',['val' => $post->posted])   
             </select>

              </div>



           <div class="form-control">
               <label for="content"> Contenido</label>
               <textarea class="form-control" name="content" id="content" cols="30" rows="3"  
                   class="@error('content') is-invalid @enderror">
                   {{ old('content',$post->content) }}
       </textarea>
   
               @error('content')
                   <small class="text-darger"> {{ $message }} </small>
               @enderror
           
            </div>
   

      


           <input type="submit" value="Enviar">
         
   
           --}}