<?php

namespace App\Http\Controllers;

use App\Models\MarketData;
use Illuminate\Http\Request;

class MarketDataController extends Controller
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
            'name' => 'required|string',
            'phone' => 'required|string|unique:market_data,phone',
            'type' => 'required|string',
            'location' => 'required|integer|exists:locations,id',
            'message' => 'required|string',
            'note' => 'string',
        ]);
            $market =  new MarketData();
            $market->name = $request->name ; 
            $market->phone = $request->phone ; 
            $market->type = $request->type ; 
            $market->location_id = $request->location ; 
            $market->message = $request->message ; 
            $market->note = $request->note ;
            $market->save();

        return response()->json(["message"=>"Data Saved"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MarketData  $marketData
     * @return \Illuminate\Http\Response
     */
    public function show(MarketData $marketData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MarketData  $marketData
     * @return \Illuminate\Http\Response
     */
    public function edit(MarketData $marketData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MarketData  $marketData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarketData $marketData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MarketData  $marketData
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarketData $marketData)
    {
        //
    }
}
