@extends('dashboard.master')

@section('content')


    <!--Crearmos un boton para en la pagina de crerar un nuevo archivo  -->
    <a class="btn btn-success" mt-3 mb-3 href="{{ route('posts.create') }}"> CREATE NEW POST</a>

    <!--crearmos la tabla par mostrar los datos
                                                la cual consta de dos partes 
                                                1.- thead 
                                    
                                                1.- tbody
                                             
                                             -->

    <div class="container">
        <table class="table">
            <!--filas-->
            <thead>
                <!--Columnas-->
                <tr>
                    <!--Filas-->
                    <td> id </td>
                    <td> Titulo</td>
                    <td>Categorias</td>
                    <td> Posteado </td>
                    <td>Creacion</td>
                    <td>Actualizacion</td>
                    <td>Acciones</td>

                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $post->id }}
                        </td>

                        <td>
                            {{ $post->title }}
                        </td>

                        <td>
                            {{ $post->category->title}}
                        </td>

                        <td>
                            {{ $post->posted }}
                        </td>

                        <td>
                            {{ $post->created_at->format('d-m-Y') }}
                        </td>

                        <td>
                            {{ $post->updated_at->format('d-m-Y') }}
                        </td>

                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary"> Ver </a>
                        </td>

                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary"> Actualizar </a>

                        </td>

                        <td>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModel"
                                data-id="{{ $post->id }}">Eliminar pots</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>



        <!--Aca mostraremos los resultados de la paginacion-->
    </div>


    {{ $posts->onEachSide(5)->links() }}



    <!--Deifnimos el codigo del dialong para elimiar los datos-->

    <div class="modal fade" id="deleteModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> YOU WANT TO DELETE THE RECORD</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--aca podemos definir lo que nosotros querramos -->
                    <p> SEGURO QUE DESEA BORRAR EL REGISTRO SELECCIONADO? </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>

                    <!-- VAMOS A DUPLICAR L RUTA PARA  MANDARLOY PORDERLOS-->
                    <form id="formDelete" action="{{ route('posts.destroy', 0) }}"
                        data-action="{{ route('posts.destroy', 0) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <script>
        /*

                                var exampleModal = document.getElementById('deteleModel')
                                exampleModal.addEventListener('show.bs.modal', function (event) {
                                  // Button that triggered the modal
                                  var button = event.relatedTarget
                                  // Extract info from data-bs-* attributes
                                  var recipient = button.getAttribute('data-bs-id')
                                  // var data = button.document.getElementById('data-bs-action')

                                    //console.log(data)
                                    
                                  
                                  // Update the modal's content.
                                  var modalTitle = exampleModal.querySelector('.modal-title')
                                  //var modalBodyInput = exampleModal.querySelector('.modal-body input')
                                 
                                  modalTitle.textContent = 'New message to ' + recipient
                               
                                })
                                */

        $('#deleteModel').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            {{-- console.log(id) --}}
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

            // vamos a obtener el dato del id 
            // vamos a insertar de nuevo los datos

            action = $('#formDelete').attr('data-action').slice(0, -1)
            action += id
            console.log(action)
            // insertamos los datos
            $('#formDelete').attr('action', action)

            var modal = $(this)
            modal.find('.modal-title').text('Vas a borrar el Post' + id)
            //modal.find('.modal-body input').val(recipient)
        })
    </script>

@endsection
