<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremyNewModelRequest;
use App\Http\Requests\UpdatemyNewModelRequest;
use App\Models\myNewModel;

class MyNewModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremyNewModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(myNewModel $myNewModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(myNewModel $myNewModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemyNewModelRequest $request, myNewModel $myNewModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(myNewModel $myNewModel)
    {
        //
    }
}
