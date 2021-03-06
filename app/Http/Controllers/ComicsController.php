<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $comics = Comic::all();

        return view("comics.index", [
            "comics" => $comics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComicData = $request->all();
        $newComic = new Comic();
        $newComic->name = $newComicData["title "];
        $newComic->type = $newComicData["type"];
        $newComic->series = $newComicData["series"];
        $newComic->price = $newComicData["price"];
        $newComic->sales_data = $newComicData["sales_data"];
        $newComic->description = $newComicData["description"];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic){

        return view('comics.show',[
            'comic' => $comic
        ]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $comic = Comic::findOrFail($id);

        return view('comics.edit',[
            'comic' => $comic
        ]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $comic = Comic::find($id);
        $formData = $request->all();

        $comic->update($formData);

        return redirect()->route("comic.show", $comic->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route("comic.index");
    }
}
