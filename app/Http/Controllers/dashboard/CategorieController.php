<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostCategorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
           // con esto obtenemos todos los datos.
        // dd(Categorie::get()); 

        // $posts = Post::paginate(5)->withQueryString();
        $category = Categorie::paginate(5)->withQueryString();
  return view("dashboard.categorie.index", ['category' => $category]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Respons
     */
    public function create()
    {
        // haremos  la redicreccion de los datos.
        // donde parasaremos un parametro una nueva instancua de Post()
        return view("dashboard.categorie.create",['category' => new Categorie()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostCategorie $request)
    {
          Categorie::create($request->validated());    
        
           return back()->withInput()->with('status', 'Post creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

          // para hacer la paginaion de los datos la cual se mostraran de 5 en 5 en cada una de las paginas

       
          $categori = Categorie::findOrFail($id);  
        // $category = Categorie::findOrFail($id);


        // hacemos la redireccion de los datos para mostrar en la vista.....
        return view('dashboard.categorie.show', ['categori'  => $categori]);

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie  $category)
    {
            // return view("dashboard.categorie.edit", ['category'=> $category]);
            // dd($category);

            return view('dashboard.categorie.edit', ['category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostCategorie $request, Categorie $category)
    {
        
         $category->update($request->validated());

         return back()->withInput()->with('status', ' categorias actulizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Categorie::destroy($id);

        // hacemos la redireccion de los datos,
        return back()->withInput()->with('status', 'Categoria eliminado con exito');

    }
}
