<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //GET 
    { 
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //GET
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //POST
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic) //GET
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //GET
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //PUT-PATCH
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)// DELETE
    {
        //
    }
}
