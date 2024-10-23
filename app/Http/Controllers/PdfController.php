<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to Laravel PDF generation'];
        
        // Load the view file and pass data to it
        $pdf = Pdf::loadView('templates/amara', $data);
        
        // Download the generated PDF
        return $pdf->download('amara.pdf');
    }

    public function storeFaiData(Request $request)
    {
        // Validate inputs
        $request->validate([
            'title' => 'required|string|max:20',
            'message' => 'required|string|max:100',
            'image1' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'image2' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'image3' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'image4' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        // Store data in session
        $request->session()->put('title', $request->input('title'));
        $request->session()->put('message', $request->input('message'));
        for ($i = 1; $i <= 4; $i++) {
            if ($request->hasFile('image' . $i)) {
                $imagePath = $request->file('image' . $i)->store('images', 'public');
                $request->session()->put('image' . $i, $imagePath);
            }
        }
    
        // Redirect directly to payment.blade.php
        return redirect()->route('payment');
    }
}
