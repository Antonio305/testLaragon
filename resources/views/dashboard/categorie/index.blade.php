<!-- crearemos la vista para mostrar los datos. -->

@extends('dashboard.master')


@section('content')

    <!--defiremos el codigo dentro de la secccion ya solo erededarlo sepues en el maste-->

    <div class="container">


        <a class="btn btn-success" mt-3 mb-3 href="{{ route('categories.create') }}"> Create New Categories </a>

        <!--definimos  la table-->
        <table class="table">
            <!--definimos el titulo de lo campos-->
            <thead>
                <!--Colunmas-->
                <tr>
                    <!--filas-->


                    <td>ID</td>
                    <td>TITULO</td>
                    <td>URL_CLEAN</td>

                    <td>CREACION </td>
                    <td> ACTUALIZACION </td>
                    <td>ACCIONES</td>
                </tr>
            </thead>
            <!-- con esto hacemos el retorno de los datos
                     en cada td haremos la iretacion de cada uno ee los campos -->
            <tbody>
                @foreach ($category as $categorias)
                    <!--mostraremos los datos dentro de las llaves co la plantillas de blade-->

                    <tr>
                        <td>{{ $categorias->id }}</td>
                        <td> {{ $categorias->title }}</td>
                        <td>{{ $categorias->url_clean }}</td>

                        <!--  con el format definimos el tipo de formato de horario -->
                        <td> {{ $categorias->created_at->format('d-m-Y') }}</td>
                        <td>{{ $categorias->updated_at->format('d-m-Y') }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('categories.show', $categorias->id) }}"> VER </a>

                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('categories.edit', $categorias->id) }}">EDITAR</a>
                        </td>
                        <td>
                            <!-- le pasamos e valor  de id al otro formulariofa-flip-vertical  -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModel"
                                data-id="{{ $categorias->id }}">Eliminar pots</button>

                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>

    <!--paginacion-->


    {{--  {{ $categorias->onEachSide(5)->links() }}  --}}
    {{ $category->links() }}



    <!-- definimos el cosigo de dialog -->
    <div class="modal fade" id="deleteModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModelLabel"> YOUR WANT TO DELETE CATEGORIES </h5>
                    <button type="button" class="btn btn-close" data-bs-dissmisible="modal" aria-label="CLOSE"></button>


                </div>
                <div class="modal-body">
                    <p>Seguro que seasea vorrar el registro sleccionado</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn primary" data-bs-dissmisible="modal">
                        Cerrer
                    </button>


                    <!-- ava vamos a rcivir el id de que vamos a recivir la hora de sulsar el boton anterior -->

                    <form id="formDelete" action="{{ route('categories.destroy', 0) }}"
                        data-action="{{ route('categories.destroy', 0) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Codigo js para la aliminacion de los elemntos -->
    <script>
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
