<?php

namespace App\Http\Controllers;

use App\Models\auth;
use App\Http\Requests\StoreauthRequest;
use App\Http\Requests\UpdateauthRequest;

class AuthController extends Controller
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
    public function store(StoreauthRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateauthRequest $request, auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(auth $auth)
    {
        //
    }
}
