<?php

namespace App\Http\Controllers\Admin;

use App\Artigo;
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

        $artigos = json_encode(Artigo::all('id', 'titulo', 'descricao', 'data_publicacao'));
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
        $data = $request->all();

        $validacao = \Validator::make($data, [
            'titulo'    => 'required',
            'descricao' => 'required',
            'conteudo' => 'required',
            'data_publicacao' => 'required',
        ]);

        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        Artigo::create($data);
        return redirect()->back();
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
