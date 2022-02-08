




             @csrf

             <div class="form-group"> 
              
                 <label for="title"> Titulo</label>
                 <input class="form-control"  value="{{ old('title', $category->title)  }}" type="text" name="title" id="title" class=" @error('title') is-invalid   @enderror">
                 @error('title')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
             </div>
  
     
             <div class=" form-group">
                 <label for="url_clean"> Url Limpia</label>
                 <input class="form-control" type="text" id="url_clean" name="url_clean"  value="{{ old('url_clean',$category->url_clean)  }}">
             </div>

             <input type="submit" value="Enviar">


  {{--  
             <div class=" form-group">
              <label for="category_id"> Categorias</label>
  
                 <select class="form-control" name="category_id" id="category_id">
                     <!--con el foreach es una forma de  hacer mas facial con el listado de los datos.-->
                  @foreach ($category as $title => $id)
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
  
                </div>  --}}
  
  

        
  
  
            
           
  
  
  