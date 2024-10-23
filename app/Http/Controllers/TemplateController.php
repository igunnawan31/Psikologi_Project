<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Http\Requests\StoreTemplateRequest;
use App\Http\Requests\UpdateTemplateRequest;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = Template::all(); // Fetch all templates
        return view('ourproduct', compact('templates')); // Pass templates to the view
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
    public function store(StoreTemplateRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show($namatemplate)
    {
        $template = Template::where('namatemplate', $namatemplate)->firstOrFail(); // Fetch by 'namatemplate'
        return view('product', compact('template')); // Pass the template to the product view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemplateRequest $request, Template $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Template $template)
    {
        //
    }

    public function storeTemplatePath(Request $request) {
        $request->validate([
        'template_path' => 'required|string',
        ]);

        session(['template_path' => $request->template_path]);

        return response()->json(['succes' => true]);
    }
}
