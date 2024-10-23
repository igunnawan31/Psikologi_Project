<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use Google_Client;
use Google_Service_Gmail;

class PaymentController extends Controller
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
    
    public function storePayment(Request $request)
    {
        // Validate payment and file
        $request->validate([
            'paymentMethod' => 'required',
            'buktiPembayaran' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'pdf' => 'required',
        ]);
    
        // Fetch email using Gmail API
        $email = $this->getEmailFromGmailApi();
    
        // Store the uploaded image (Bukti Pembayaran)
        if ($request->hasFile('buktiPembayaran')) {
            $buktiPath = $request->file('buktiPembayaran')->store('bukti_pembayaran', 'public');
        }
    
        // Store the PDF
        $pdfPath = 'payments/payment_receipt_' . time() . '.pdf';
        Storage::disk('public')->put($pdfPath, $request->file('pdf')->get());
    
        // Save to database
        $payment = new Payment();
        $payment->user_id = auth()->id();
        $payment->email = $email; // Store email from Gmail API
        $payment->payment_method = $request->input('paymentMethod');
        $payment->bukti_pembayaran = $buktiPath;
        $payment->pdf_path = $pdfPath;
        $payment->save();
    
        return response()->json(['success' => true, 'message' => 'Payment saved successfully']);
    }
    
    private function getEmailFromGmailApi()
    {
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/credentials.json'));
        $client->addScope(Google_Service_Gmail::GMAIL_READONLY);
        
        $service = new Google_Service_Gmail($client);
        $user = 'me'; // You can get the authenticated user's data
        
        $profile = $service->users->getProfile($user);
        return $profile->getEmailAddress();
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
