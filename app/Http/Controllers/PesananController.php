<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;

class PesananController extends Controller
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
    public function store(StorePesananRequest $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'namapemesan' => 'required|string|max:255',
            'emailpenerima' => 'required|email|max:255',
            'tanggalkirim' => 'required|date',
            'waktukirim' => 'required',
            'judul' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        // Create a new Pesanan record
        Pesanan::create($validatedData);

        // Redirect or return a response
        // return redirect()->route('preview')->with('success', 'Pesanan created successfully!');
        return view('/createyourown/pickyourtemplates/form/preview'); 
    }

    public function preview()
    {
        return redirect()->route('showPreview'); // Update this path as needed
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePesananRequest $request, Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
