


   @extends('dashboard.master')

   @section('content')

    <!--inportamos lac validacion y las vistar que hemos credo la que es _from-->
        
    @include('dashboard.partials.validation-error')

    <form id="creating" action="{{ route('posts.store') }}" method="POST">
        @csrf
    @include('dashboard.posts.form')

    

    </form>
{{--     
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>  --}}
       
   
   @endsection

 
  

