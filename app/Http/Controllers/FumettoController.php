<?php

namespace App\Http\Controllers;

use App\Models\Fumetto;
use Illuminate\Http\Request;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Fumetto::all();
        
        return view('fumetti.index',compact("fumetti"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('fumetti.create');
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

        // per inserire dati nella tabella fumetti devo creare un oggetto fumetto
        $fumetto = new Fumetto();

        // ! METODO MANUALE DI INSERIMENTO
        // $fumetto->title = $data['title'];
        // $fumetto->description = $data['description'];
        // $fumetto->author = $data['author'];
        // $fumetto->url = $data['url'];

        // ? METODO FILL - e ricordarsi di inserire i fillable in metods
        // $fumetto->fill($data);

        // # METODO CREATE - anche questo richiede di inserire i fillables nel rispettivo models    
        $fumetto = Fumetto::create($data);

        // * per salvare i dati
        $fumetto->save();

        // todo: dopo il salvataggio possiamo scegliere di essere reindirizzati a un pagina scelta

        return redirect()->route("fumetti.show", $fumetto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = Fumetto::findOrFail($id);
        
        return view('fumetti.show',compact("fumetto"));
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
