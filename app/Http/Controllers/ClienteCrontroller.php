<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteCrontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $clientes = [
        ['id'=>1, 'nome'=>'Ademir'],
        ['id'=>2, 'nome'=>'Letícia'],
        ['id'=>3, 'nome'=>'Roberto'],
        ['id'=>4, 'nome'=>'Maria']
     ];
    //  Metodo Construtor
     public function __contruct(){
         $clientes = session('clientes');
         if(!isset($clientes)) session(['clientes'=> $this->$clientes]);
     }

    public function index()
    {
        $clientes = session('clientes');
        return view('clientes.index', compact(['clientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        $id = count($clientes) + 1;
        $nome = $request->nome;
        // $dados = $request->all();
        $dados = ['id'=>$id, "nome"=>$nome];
        $clientes[] = $dados;
        session(['clientes' => $clientes]);
        // dd($this->clientes);
        return redirect()->route('clientes.index');
        // $clientes = $this->clientes;
        // return view('clientes.index', compact(['clientes']));
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
