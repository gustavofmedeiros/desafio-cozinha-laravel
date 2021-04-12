<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cozinha;

class CozinhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$cozinhas= Cozinha::all();
     return view('cozinhas.index', compact('cozinhas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cozinhas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$dados = $request->all();
Cozinha::create($dados);
return redirect()->route('cozinhas.index');


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
    $cozinha= Cozinha::find($id);
    return view('cozinhas.edit', compact('cozinha'));

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
        $cozinha= Cozinha::find($id);
        $dados = $request->all();
        $cozinha->update($dados);
        return redirect()->route('cozinhas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function destroy($id) {
Cozinha::find($id)->delete();
return redirect()->route('cozinhas.index');
    }

public function remover($id) {
$cozinha= Cozinha::find($id);
return view('cozinhas.remove', compact('cozinha'));
}

}
