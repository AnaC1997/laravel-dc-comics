<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function validation($data)
     {

        $validated = Validator::make($data, [
            "title"=> "required|min:4|max:50",
            "description"=> "required|max:400",
            "thumb"=> "required",
            "price"=> "required|max:7",
            "series"=> "required|min:4|max:100",
            "sale_date"=> "required",
            "type"=> "required|min:4|max:50",
            ])->validate();

            return $validated;
    }  
       
   
    public function index()
    { 

        $comics = Comic::all();
        $menuLinks = config("data.menuLinks");
        return view("comics.index",[
            "comics" => $comics,
            "menuLinks" => $menuLinks,
  
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() //GET
    {

        $menuLinks = config("data.menuLinks");
        return view("comics.create", compact("menuLinks"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //POST
    {
        
        $data = $request->all();
        $dati_validati = $this->validation($data);

        $comic = new Comic();
    
        $comic->fill($dati_validati);
        $comic->save();

        
        return redirect()->route('comics.show',  $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic) //GET
    {
        $menuLinks = config("data.menuLinks");
        return view("comics.show", compact("comic","menuLinks"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic) //GET
    {
        $menuLinks = config("data.menuLinks");
        return view("comics.edit", compact("comic", "menuLinks"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic) //PUT-PATCH
    {
        $data =$request ->all();

        $dati_validati =$this->validation($data);

        $comic->update($dati_validati);

        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic  $comic)// DELETE
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
