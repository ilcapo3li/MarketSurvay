<?php

namespace App\Http\Controllers;

use App\Models\LandingDetails;
use Illuminate\Http\Request;

class LandingDetailsController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // LandingDetails::first();
        return view('website.home');
    }
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
        // new LandingDetails();

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandingDetails  $landingDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(LandingDetails $landingDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LandingDetails  $landingDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandingDetails $landingDetails)
    {
        //$landingDetails
    }

   
}
