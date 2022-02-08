<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"> Larablog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!--
          // esto del home y del link lo voy a comentar
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Crud
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('posts.index') }}"> POST</a></li>
                        <li><a class="dropdown-item" href="{{ route('posts.create')}}"> CREATE NEW POST</a></li>

                        <!--defnimos el link para mostrar las categorias-->
                        <li>    <a class="dropdown-item" href="{{route('categories.index') }}"> CATEGORIAS </a> </li>
                        {{--  <li><a class="dropdown-item" href="{{ route('categorie.create')}}"> CREATE NEW CATEGORY</a></li>
                        <li><a class="dropdown-item" href="{{route('categorie.index')}}"> CATEGORIES</a>   </li>
                          --}}
                        <li>
                            
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Help else here</a></li>
                    </ul>
                </li>

            </ul>

            <!--Definirmeos otra clase para el login-->
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href=""> Login <span
                            class="sr-only"></span> </a></li>
                <li class="nav-item"> <a class="nav-link" href=""> Lagout <span
                            class="sr-only"></span></a></li>

                <!--creamos otro  nav-item-->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Perfil
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"> Perfil</a>
                        <div class="dropdown-divider"></div>
                    </div>



                </li>


            </ul>
</nav>
