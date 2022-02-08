<?php

namespace App\Http\Controllers\dashboard;
use App\Models\PostImage;
use App\Models\Post;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Http\Requests\StorePostCategorie;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  

           //este es para obtener todos los datos.
            //  $posts = Post::get();
  
                  // la pagiancio y el orden del listado de los datos.
                  //$posts = Post::orderBy('created_at','asc')->paginate(5);

         // obteneo los datos solo que lo pasamos  ya on la paginacion
        $posts = Post::paginate(5)->withQueryString();
        // dd($posts);
         return view('dashboard.posts.index',['posts' => $posts]);
   
   
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     // obenetmos y mandamos los datos de la categoria para crear nuevo datos y
     // la con la categoria definida.
    
             
        $categorias = Categorie::pluck('id','title');

      
            // redireccciona la vista. y le pasamos los dstos 
            // para mostrat a lado de usuario.
            
            return view('dashboard.posts.create',[ 'posts' => new Post(),'category'=> $categorias]);

    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        //aca vamos a ingresr  los  datos en la base de datos.

        // dd($request->all()); con esto  obtenemos todos los datos.

        // mandamos los datos en la  base de datos.
        Post::create($request->validated());


        // una ves ingresado los datos  hacemos la redireccion
        
        return back()->withInput()->with('status', 'Post creado con extp');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {    // le mandamos el id del a cual nosotromos vamos a ver 
        //  obtenemos tooos los datos de la tabla.
        $post = Post::findOrFail($id);  
      
         // redireccioanos la vista 
         return view('dashboard.posts.show', [ 'posts' => $post]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        
      // obenemos los datos de la categoria la cual solo necesitamos el id el title 
      // con el metodo pluck defiimos que datos vamos a retornar ('id', 'title')
       
        $categorias = Categorie::pluck('id','title');
        // dd($categorias);

        // dd($categorias);
        // vamos a recivir el id del ciual se va a actualizar los datos...
           return view('dashboard.posts.edit', ['posts' => $post, 'category' => $categorias ]);

    }

     // creamos un metodo para la insercion de los datos en la base de datos....
     // en la cual en cada una de las iamgenes tendrea una pots que seria el id como indentificador
     // le pasaremos la validacio y los posts

     public function image(  Request $request,Post $posts){
  
          // hacemos la validacion de los datos.....
          $request->validate([
              //  mimes es la validacion definilos los tipos de datos la cual puede soportar.

              // en cavtidad de o el  es peso de la imagen 10mb.
               // image es el nombre del campo
            'image' => 'required|mimes:jpg,bmp,png|max:10240', 
          ]);
            
            //  validamos y especificamos en la carga de datos.
            // esto define un nombre especifico en cada una de las cargar. 
            $filaname = time().".".$request->image->extension();
            // con esto mostramos a la hira de enviar los datos y ver camo cambia en nombre de los... 

  // dd($filaname);

     


    /* 
    para almacenar nuesta imagen en el servidor 
definimos un path en la cual dinde vamos a mover el elemento.
     
  1.- primer parametro es el path.
  3.- el nombre del archivo $filaname  nomobre de archivo.
  3.- public_path('images) el parametro dentro del archivo es el nombre de la carpeta 
*/
// se guardara en la carpeta images
$request->image->move(public_path('images'),$filaname);

                
     // inseramos loa dstos sin esta validados.....
     // pasamos dos datos (imagen, id del post) 
     PostImage::create(['post_id' => $posts->id, 'images'=> $filaname]);   
     
     
     // hacemos la redireccion de  la visra
     return back()->withInput()->with('status','Imagen creado con exito');
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Ressponse
     */
    public function update(StorePostPost $request, Post $post)
    {  
        // le pasamos como parametro todo el objeto la cual es igual 

        $post->update($request->validated());

        // redireccionamos la vista
        return back()->withInpu()->with('status', 'Post actualizado con exito');
             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // del modelo le pasamos metodo de destroy
        Post::destroy($id);

        // de la clase solo le pasamosel parametro id y ya esta 
        return back()->withInput()->with('status', '´Posts eliminado con extito.');
        
    }
}
