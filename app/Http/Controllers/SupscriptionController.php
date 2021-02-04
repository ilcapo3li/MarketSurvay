<?php

namespace App\Http\Controllers;

use App\Models\Supscription;
use Illuminate\Http\Request;

class SupscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'email' => 'required|email|unique:supscriptions,email',
        ]);
            $supscription = new Supscription();
            $supscription->email = $request->email;
            $supscription->save();
        return response()->json(["message"=>"Data Saved"]) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supscription  $supscription
     * @return \Illuminate\Http\Response
     */
    public function show(Supscription $supscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supscription  $supscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Supscription $supscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supscription  $supscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supscription $supscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supscription  $supscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supscription $supscription)
    {
        //
    }
}
