<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateComicRequest;
use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saber = new Comic();
        // save the fileds
        $saber->title = $request->title;
        $saber->thumb = $request->thumb;
        $saber->price = $request->price;
        $saber->description = $request->description;
        $saber->series  = $request->series;
        $saber->sale_date = $request->sale_date;
        $saber->type = $request->type;
        $saber->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
       
        $data = [
            'title' => $request->title,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'description' => $request->description,
            'series' => $request->series,
            'sale_date' => $request->sale_date,
            'type' => $request->type
        ];
        $comic->update($data);

        return to_route('comics.index')->with('message', 'comic updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        
            $comic->delete();
            return to_route('comics.index')->with('message', 'comic deleted');
        
    
    }
}
