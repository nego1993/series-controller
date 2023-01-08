<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Series_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('name')->get();
        $message = $request->session()->get('message.destroy');
        $messagesuccess = $request->session()->get('message.success');
        $request->session()->forget('message.destroy');
        $request->session()->forget('message.success');

        return view("series.index", compact('series'))->with('message', $message)->with('messagesuccess', $messagesuccess);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        $request->session()->put("message.success", "Série $serie->name adicionada com sucesso");

        return to_route('series.index');
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
    public function edit(Request $request, Serie $series)
    {

        return view('series.edit')->with('serie', $series);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $series)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
        ->with('message.success', "Série $series->name atualizada com sucesso" );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $series, Request $request)
    {

        // dd($request);
        $series->delete();
        Serie::destroy($request->id);

        $request->session()->put('message.destroy', "Série $series->name removida com sucesso!");

        return to_route('series.index');
    }
}
