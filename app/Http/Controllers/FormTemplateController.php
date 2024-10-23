<?php

namespace App\Http\Controllers;

use App\Models\FormTemplate;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFormTemplateRequest;
use App\Http\Requests\UpdateFormTemplateRequest;

class FormTemplateController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string|max:100',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Handle file uploads
        $formTemplate = new FormTemplate();
        $formTemplate->title = $request->title;
        $formTemplate->message = $request->message;

        if ($request->hasFile('image1')) {
            $formTemplate->image1 = $request->file('image1')->store('images');
        }
        if ($request->hasFile('image2')) {
            $formTemplate->image2 = $request->file('image2')->store('images');
        }
        if ($request->hasFile('image3')) {
            $formTemplate->image3 = $request->file('image3')->store('images');
        }
        if ($request->hasFile('image4')) {
            $formTemplate->image4 = $request->file('image4')->store('images');
        }
        if ($request->hasFile('pdf')) {
            $formTemplate->pdf_path = $request->file('pdf')->store('pdfs');
        }

        $formTemplate->save();

        return redirect()->back()->with('success', 'Form template saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormTemplateRequest $request, FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormTemplate $formTemplate)
    {
        //
    }
}
