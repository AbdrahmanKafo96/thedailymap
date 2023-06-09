<?php

namespace App\Http\Controllers;

use App\Models\Observer;
use App\Http\Requests\StoreObserverRequest;
use App\Http\Requests\UpdateObserverRequest;

class ObserverController extends Controller
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
     * @param  \App\Http\Requests\StoreObserverRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObserverRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Observer  $observer
     * @return \Illuminate\Http\Response
     */
    public function show(Observer $observer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Observer  $observer
     * @return \Illuminate\Http\Response
     */
    public function edit(Observer $observer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateObserverRequest  $request
     * @param  \App\Models\Observer  $observer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObserverRequest $request, Observer $observer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Observer  $observer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Observer $observer)
    {
        //
    }
}
