<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use App\Http\Requests\StoreSchoolsRequest;
use App\Http\Requests\UpdateSchoolsRequest;

class SchoolsController extends Controller
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
    public function store(StoreSchoolsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Schools $schools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schools $schools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolsRequest $request, Schools $schools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schools $schools)
    {
        //
    }
}
