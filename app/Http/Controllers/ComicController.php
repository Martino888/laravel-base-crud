<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    protected $validateData = [
        'title' => 'required|unique:comics|min:5|max:50',
        'description' => 'required' ,
        'thumb' => 'required|url|max:250',
        'price' => 'required|numeric',
        'series' => 'required|max:50',
        'sale_date' => 'required|date',
        'type' => 'required|max:20'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::paginate(3);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // validation for all data
        $request->validate($this->validateData);
        $newComic = Comic::create($data);
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic){
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comics)
    {
        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comics)
    {
        //
    }
}
