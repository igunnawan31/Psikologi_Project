<?php

namespace App\Http\Controllers;

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
}
