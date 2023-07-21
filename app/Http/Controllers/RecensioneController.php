<?php

namespace App\Http\Controllers;

use App\Models\Recensione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecensioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function recensioni(){
        $recensioni = Recensione::all();
        return view('recensioni', compact('recensioni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeREC(Request $request)
    {
        $recensione = Recensione::create([
            'recensione' => $request->recensione,
            'star' => $request->star,
            'user_id' => Auth::id()
        ]);
        return redirect(route('recensioni'))->with('message', 'recensione caricata correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recensione $recensione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recensione $recensione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recensione $recensione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recensione $recensione)
    {
        //
    }
}
