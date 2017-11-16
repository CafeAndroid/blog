<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = json_encode([
            ['titulo' => 'Home', 'url' => route('home')],
            ['titulo' => 'Artigos', 'url' => ''],
        ]);

        $artigos = json_encode([
            ["id" => 1, "titulo" => "Aula de Java", "descricao" => "Descricao Java", "autor" => "Lucas", "data" => "22/08/2017"],
            ["id" => 2, "titulo" => "Python com C++", "descricao" => "C++", "autor" => "Lucas", "data" => "22/08/2017"],
            ["id" => 3, "titulo" => "Angular JS", "descricao" => "Descricao Angular Js", "autor" => "Lucas", "data" => "22/08/2017"],
            ["id" => 4, "titulo" => "Delphi", "descricao" => "Descricao Delphi", "autor" => "Lucas", "data" => "22/08/2017"]
        ]);

        return view('admin.artigos.index', compact('breadcrumbs', 'artigos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
